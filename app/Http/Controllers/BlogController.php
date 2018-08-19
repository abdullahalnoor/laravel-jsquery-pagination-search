<?php

namespace App\Http\Controllers;

 

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
     protected $posts_per_page = 10;
 
    public function index(Request $request) {
 
        $posts = Post::paginate($this->posts_per_page);
 
        // if($request->ajax()) {
        //     return [
        //         'posts' => view('blog.ajax.index')->with(compact('posts'))->render(),
        //         'next_page' => $posts->nextPageUrl()
        //     ];
        // }
 
        return view('blog.index',compact('posts'));
 
    }

      public function fetchNextPostsSet($page) {
 
 
 
    }



}
