<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
    public function home(){
        $posts = Post::get();
        return view('home', compact('posts'));
    }

}
