<?php

namespace App\Http\Controllers;

use App\Models\Post;


class PostController extends Controller
{
    public function index(){
        $dataPost = Post::all();
        return view('posts.index', compact('dataPost'));
    }

    public function show($id){
        $dataPost = Post::findOrFail($id);
        return view('posts.show', compact('dataPost'));
    }
}
