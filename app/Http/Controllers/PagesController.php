<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Post;

class PagesController extends Controller
{
    public function index(){
        $albums = Album::latest()->take(5)->get();
        // dd($albums);
        return view('index', compact('albums'));
    }

    public function gallery()
    {
        $albums = Album::latest()->get();
        return view('gallery', compact('albums'));
    }
    public function singleview(Album $album)
    {
        return view('singleview', compact('album'));
    }

    public function blog()
    {
        $posts = Post::latest()->wherePublished(true)->get();
        return view('blog', compact('posts'));
    }
    public function post(Post $post)
    {
        return view('single-blog', compact('post'));
    }
}
