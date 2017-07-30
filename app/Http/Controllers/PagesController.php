<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function candidate(){
        return view('candidatesubmit');
    }

    public function employer(){
        $posts = Post::all();
        return view('employer')->with('posts', $posts);
    }
}
