<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('anasayfa', compact('posts'));
    }


    public function show($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return 'Sayfa Bulunamadı !';
        }
        return view('posts/show', compact('post'));
    }
}
