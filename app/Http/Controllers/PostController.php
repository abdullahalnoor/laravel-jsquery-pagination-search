<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    

    public function index(Request $request,$search=null){

        if(empty($search)){
             $posts = Post::latest('created_at')->paginate(5);
        }else{
            $posts = Post::where('title','like','%'.$search.'%')->paginate(5);
        }

        if($request->ajax()){
             return view('post.load',compact('posts'))->render();
        }

        return view('post.index',compact('posts'));
    }


  


}
