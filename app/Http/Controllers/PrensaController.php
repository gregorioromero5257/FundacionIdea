<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PrensaController extends Controller
{
    //
    public function getYears()
    {
       $array = [];
       $publicaciones = Post::where('public','false')->select('publication_date')->orderBy('publication_date','DESC')->get();

       foreach ($publicaciones as $key => $value) {
         $array  [] = substr($value->publication_date, 0 , 4);
       }

       return array_unique($array);
    }

    public function getPrensa()
    {
      $years = $this->getYears();
      $arreglo = [];

      foreach ($years as $key => $value) {
        $publicaciones = Post::where('public','false')->where('publication_date','LIKE',$value.'%')->with('tags')->orderBy('publication_date','DESC')->get();

        $arreglo [] = [
          'anio' => $value,
          'posts' => $publicaciones
        ];
      }

      // return $arreglo;
      return view('prensa',compact('arreglo'));
    }


    public function getPrensaDetalle($id)
    {
      $publicaciones = Post::where('id',$id)->with('tags')->first();
      return view('prensadetalle', compact('publicaciones'));
    }

}
