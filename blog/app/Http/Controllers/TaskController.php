<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
        {
        $posts=Post::all();
        return view('anasayfa', compact('posts'));
    }
    public function show($id){
        $posts=Post::find($id);
        dd($id);
        if (!$posts) {
            return 'hata';
        }
        return view('posts/show',compact( 'posts'));
    }
}
