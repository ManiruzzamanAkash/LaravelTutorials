<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
    public function index()
    {
      $posts = Post::orderBy('id', 'desc')->simplePaginate(1);
      return view('index')->withPosts($posts);
    }
    public function search(Request $request)
    {
        $this->validate($request, [
            'search' => 'required'
        ]);
      $search_txt = $request->search;


      $posts = Post::orderBy('id', 'desc')
                ->where('title', 'like', '%'.$search_txt.'%')
                ->orWhere('description', 'like', '%'.$search_txt.'%')
                ->get();

      return view('search')->withPosts($posts);
    }
}
