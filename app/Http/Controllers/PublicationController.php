<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;


class PublicationController extends Controller
{
    //
    public function getAll()
    {
      $all = Post::orderBy('publication_date','DESC')->get();
      return response()->json($all);
    }

    public function getYears()
    {
       $array = [];
       $publicaciones = Post::where('public','true')->select('publication_date')->orderBy('publication_date','DESC')->get();

       foreach ($publicaciones as $key => $value) {
         $array  [] = substr($value->publication_date, 0 , 4);
       }

       return array_unique($array);
    }

    public function getPublications()
    {
      $years = $this->getYears();
      $arreglo = [];

      foreach ($years as $key => $value) {
        $publicaciones = Post::where('public','true')->where('publication_date','LIKE',$value.'%')->with('tags')->orderBy('publication_date','DESC')->get();

        $arreglo [] = [
          'anio' => $value,
          'posts' => $publicaciones
        ];
      }

      // return $arreglo;
      return view('publicaciones',compact('arreglo'));
    }

    public function getByTag($id)
    {


      $years = $this->getYears();
      $arreglo = [];

      foreach ($years as $key => $value) {
        $publicaciones_tag = DB::table('post_tag AS pt')
        ->join('posts AS p','pt.post_id','p.id')
        ->where('pt.tag_id',$id)
        ->where('p.publication_date','LIKE',$value.'%')
        ->select('p.*')
        ->orderBy('p.publication_date','DESC')->get();

        if (count($publicaciones_tag) > 0) {
          $arreglo [] = [
            'anio' => $value,
            'posts' => $publicaciones_tag
          ];
        }
      }

      return view('publicacionesbytag',compact('arreglo','id'));

    }

    public function getByPost($id)
    {
      $publicaciones = Post::where('id',$id)->with('tags')->first();

      $multiple = DB::table('files_psts')->where('post_id',$id)->get();

      $data_p = Post::where('public','true')
      ->where('id','!=',$id)
      ->orderBy('publication_date','DESC')->limit(3)->get();

      return view('publicacion', compact('publicaciones','data_p','multiple'));
    }

    public function getByPostSearch($data)
    {
      $espacios = array(" ", "  ", "   ", "    ", "     ", "     ", "      ", "      ");

      $texto_sin_acento = $this->eliminar_acentos($data);
      $texto_sin_espacio =  str_replace($espacios, "", $texto_sin_acento);
      $array = ['emprendimiento','inovacion','innovacion','tecnologia','seguridayjusticia','seguridad','justicia','seguridady','salud','desarrollohumano','humano','educacion','desarrollosocial','social','juventud'];
      $busqueda_tags = array_search($texto_sin_espacio,$array);
      $result = strlen($busqueda_tags);

      $years = $this->getYears();
      $arreglo = [];

      if ($result == 1) {
        $tag_id = DB::table('tags')->where('name','LIKE','%'.$data.'%')->select('id')->first();
        $id = $tag_id->id;
        foreach ($years as $key => $value) {
          $publicaciones_tag = DB::table('post_tag AS pt')
          ->join('posts AS p','pt.post_id','p.id')
          ->where('pt.tag_id',$id)
          ->where('p.publication_date','LIKE',$value.'%')
          ->select('p.*')
          ->orderBy('p.publication_date','DESC')->get();

          if (count($publicaciones_tag) > 0) {
            $arreglo [] = [
              'anio' => $value,
              'posts' => $publicaciones_tag
            ];
          }
        }

        return view('publicacionesbytag',compact('arreglo','id'));

      }else {

        foreach ($years as $key => $value) {
          $publicaciones = Post::where('public','true')
          ->where('title_es','LIKE','%'.$data.'%')
          ->where('publication_date','LIKE',$value.'%')
          ->with('tags')
          ->orderBy('publication_date','DESC')
          ->get();

          $arreglo [] = [
            'anio' => $value,
            'posts' => $publicaciones
          ];
        }

        return view('publicaciones',compact('arreglo'));
      }


    }

    function eliminar_acentos($cadena){

		//Reemplazamos la A y a
		$cadena = str_replace(
		array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
		array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
		$cadena
		);

		//Reemplazamos la E y e
		$cadena = str_replace(
		array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
		array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
		$cadena );

		//Reemplazamos la I y i
		$cadena = str_replace(
		array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
		array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
		$cadena );

		//Reemplazamos la O y o
		$cadena = str_replace(
		array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
		array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
		$cadena );

		//Reemplazamos la U y u
		$cadena = str_replace(
		array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
		array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
		$cadena );

		//Reemplazamos la N, n, C y c
		$cadena = str_replace(
		array('Ñ', 'ñ', 'Ç', 'ç'),
		array('N', 'n', 'C', 'c'),
		$cadena
		);

		return $cadena;
	}
}
