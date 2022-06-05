<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    //
    public function inicio()
    {
      $publicaciones = Post::where('public','true')->with('tags')->orderBy('publication_date','DESC')->limit(3)->get();
      $prensa = Post::where('public','false')->with('tags')->orderBy('publication_date','DESC')->limit(3)->get();

       return view('welcome',compact('publicaciones','prensa'));
    }
}
