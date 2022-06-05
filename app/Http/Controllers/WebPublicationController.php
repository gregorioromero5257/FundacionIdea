<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\PostTag;
use App\Models\FilePost;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class WebPublicationController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //
    $all = Post::where('link_pgc','0')->orWhere('link_pgc','')->orWhere('link_pgc',null)->with('tags')->orderBy('publication_date','DESC')->get();
    return $all;
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    try {


      $post = new Post();
      $post->title = $request->title_es;
      $post->description = $request->description_es;
      $post->title_es = $request->title_es;
      $post->description_es = $request->description_es;
      $post->publication_date = $request->publication_date;
      $post->public = $request->public;
      $post->save();

      $valores = explode(',', $request->tags);

      if (count($valores) > 0) {
        foreach ($valores as $key_new => $value_new) {
          $tag = Tag::where('name','LIKE',$value_new)->first();
          $post_tag = new PostTag();
          $post_tag->post_id = $post->id;
          $post_tag->tag_id = $tag->id;
          $post_tag->save();
        }
      }

      if($request->hasFile('file')){
        $docName = $this->quitarEspacios($request->file->getClientOriginalName());
        $fileData = File::get($request->file);
        Storage::disk('filesweb')->put($docName, $fileData);
        $post->thumbnail = $docName;
        $post->save();

        $output = shell_exec("cd ..;cd Idea-Web/public/storage/thumbnails;cp $docName /home/fundacv5/public_html/storage/thumbnails/ 2> ehoyc.txt;");
      }

      return true;

    } catch (\Exception $e) {
      return $e;
    }
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request)
  {
    try {

      $pro = 0;
      if ($request->link_pgc_id != '') {
        $pro = ['id' => $request->link_pgc_id ,
                'name_es' => $request->link_pgc_name];
      }
      $post = Post::where('id',$request->id)->first();
      $post->title_es = $request->title_es;
      $post->description_es = $request->description_es;
      $post->publication_date = $request->publication_date;
      $post->public = $request->public;
      $post->link_pgc = json_encode($pro);
      $post->save();

      $valores = explode(',', $request->tags);
      $id_tags = [];
      //
      foreach ($valores as $key_cid => $value_cid) {
        $tag = Tag::where('name','LIKE',$value_cid)->first();
        $id_tags [] = $tag->id;
      }
      //
      $delete_not_found = PostTag::where('post_id',$post->id)->whereNotIn('tag_id',$id_tags)->delete();
      //
      foreach ($valores as $key_new => $value_new) {
        $tag = Tag::where('name','LIKE',$value_new)->first();
        $post_tag_find = PostTag::where('post_id',$post->id)->where('tag_id',$tag->id)->first();
        if (isset($post_tag_find) == false) {
          $post_tag = new PostTag();
          $post_tag->post_id = $post->id;
          $post_tag->tag_id = $tag->id;
          $post_tag->save();
        }

      }

      if($request->hasFile('file')){
        $docName = $this->quitarEspacios($request->file->getClientOriginalName());
        $fileData = File::get($request->file);
        Storage::disk('filesweb')->put($docName, $fileData);
        $post->thumbnail = $docName;
        $post->save();

        $output = shell_exec("cd ..;cd Idea-Web/public/storage/thumbnails;cp $docName /home/fundacv5/public_html/storage/thumbnails/ 2> ehoyc.txt;");
      }

      $multiple = DB::table('files_psts')->where('post_id',$post->id)->get();

      return [$post, $multiple];

    } catch (\Exception $e) {
      return $e;
    }
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    try {
      $post = Post::where('id',$id)->delete();
      return true;
    } catch (\Exception $e) {
      return $e;
    }
  }


  public function resource($id)
  {
    $publicaciones = Post::where('id',$id)->first();

    $multiple = DB::table('files_psts')->where('post_id',$id)->get();

    $arreglo = [];

    if ($publicaciones->file != '') {
      $arreglo [] = ['id' => $publicaciones->id, 'file' => $publicaciones->file, 'table' => 'p'];
    }

    foreach ($multiple as $key => $value) {
      $arreglo [] = ['id' => $value->id, 'file' => $value->file, 'table' => 's'];
    }

    return $arreglo;

  }

  public function saveresource(Request $request)
  {
    try {
      if($request->hasFile('file')){
        $docName = $this->quitarEspacios($request->file->getClientOriginalName());
        $fileData = File::get($request->file);
        Storage::disk('fileswebr')->put($docName, $fileData);

        $file_post = new FilePost();
        $file_post->file = $docName;
        $file_post->post_id = $request->id;
        $file_post->save();

        $output = shell_exec("cd ..;cd Idea-Web/public/storage/IDEA/files;cp $docName /home/fundacv5/public_html/storage/IDEA/files/ 2> ehoyc.txt;");
      }
    } catch (\Exception $e) {
      return $e;
    }
  }

  public function deleteresource($id)
  {
    $valores = explode('&',$id);
    if ($valores[1] == 'p') {
      $publicaciones = Post::where('id',$valores[0])->first();
      $publicaciones->file = '';
      $publicaciones->save();

    }elseif ($valores[1] == 's') {
      $file_post = FilePost::where('id',$valores[0])->where('post_id',$valores[2])->delete();
    }

    return true;
  }

  public function quitarEspacios($value)
  {
    $espacios = array(" ", "  ", "   ", "    ", "     ", "     ", "      ", "      ");
    $texto_sin_espacio =  str_replace($espacios, "", $value);
    return $texto_sin_espacio;
  }

  public function updateImgPgc(Request $request)
  {
    try {


      if($request->hasFile('file_i')){
        $post = Post::where('link_pgc','LIKE','%"id":"'.$request->id.'%')->first();
        $docName = $this->quitarEspacios($request->file_i->getClientOriginalName());
        $fileData = File::get($request->file_i);
        Storage::disk('filesweb')->put($docName, $fileData);
        $post->thumbnail = $docName;
        $post->save();

        $output = shell_exec("cd ..;cd Idea-Web/public/storage/thumbnails;cp $docName /home/fundacv5/public_html/storage/thumbnails/ 2> ehoyc.txt;");
      }
      if ($request->hasFile('file')) {
        $post = Post::where('link_pgc','LIKE','%"id":"'.$request->id.'%')->first();

        $docName = $this->quitarEspacios($request->file->getClientOriginalName());
        $fileData = File::get($request->file);
        Storage::disk('fileswebr')->put($docName, $fileData);

        $file_post = new FilePost();
        $file_post->file = $docName;
        $file_post->post_id = $post->id;
        $file_post->save();

        $output = shell_exec("cd ..;cd Idea-Web/public/storage/IDEA/files;cp $docName /home/fundacv5/public_html/storage/IDEA/files/ 2> ehoyc.txt;");
      }

      return true;

    } catch (\Exception $e) {
      return $e;
    }
  }

  public function updateDataPgc(Request $request)
  {
    try {


        $post = Post::where('link_pgc','LIKE','%"id":"'.$request->id.'%')->first();
        //comprobamos que exista el post en fundacion idea
        if (isset($post) == true) {
          $post->title_es = $request->title_es;
          $post->description_es = $request->description_es;
          $post->publication_date = $request->publication_date;
          $post->public = $request->public;
          $post->save();

          // $valores = explode(',', $request->tags);
          $id_tags = [];
          //
          foreach ($request->tags as $key_cid => $value_cid) {
            $tag = Tag::where('name','LIKE',$value_cid)->first();
            $id_tags [] = $tag->id;
          }
          //
          $delete_not_found = PostTag::where('post_id',$post->id)->whereNotIn('tag_id',$id_tags)->delete();
          //
          foreach ($request->tags as $key_new => $value_new) {
            $tag = Tag::where('name','LIKE',$value_new)->first();
            $post_tag_find = PostTag::where('post_id',$post->id)->where('tag_id',$tag->id)->first();
            if (isset($post_tag_find) == false) {
              $post_tag = new PostTag();
              $post_tag->post_id = $post->id;
              $post_tag->tag_id = $tag->id;
              $post_tag->save();
            }

          }

          $id_file_post = [];

          foreach ($request['files'] as $key_fid => $value_fid) {
            $file_post = FilePost::where('file','LIKE',$value_fid)->where('post_id',$post->id)->first();
            $id_file_post [] = $file_post->id;

            // $fp = new FilePost();
            // $fp->file = $value_fid;
            // $fp->post_id = $post->id;
            // $fp->save();
          }

          $delete_not_found_fp = FilePost::where('post_id',$post->id)->whereNotIn('id',$id_file_post)->delete();
        }else {
          // Se crea un nuevo post
            $pro = ['id' => $request->id ,
                    'name_es' => $request->name_es];
          $new_post = new Post();
          $new_post->title_es = $request->title_es;
          $new_post->description_es = $request->description_es;
          $new_post->publication_date = $request->publication_date;
          $new_post->public = $request->public;
          $new_post->link_pgc = json_encode($pro);
          $new_post->save();

          foreach ($request->tags as $key_new => $value_new) {
            $tag = Tag::where('name','LIKE',$value_new)->first();
              $post_tag = new PostTag();
              $post_tag->post_id = $new_post->id;
              $post_tag->tag_id = $tag->id;
              $post_tag->save();
          }

        }






      return true;

    } catch (\Exception $e) {
      return $e;
    }
  }




}
