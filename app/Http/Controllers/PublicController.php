<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PublicController extends Controller
{
    //
    public function index (){

      return view('welcome');
    }
    public function displayPosts(){

      $posts = Post::all();

      foreach ($posts as  $post) {


        print $post->title."<br>".$post->body."<br>";
      }

      return ;
    }
}
