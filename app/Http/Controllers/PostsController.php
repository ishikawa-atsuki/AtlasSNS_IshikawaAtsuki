<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(){
        $list = Post::get();
        return view('posts.index',['list'=>$list]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'post'=>'required|min:1|max:150',
        ]);

        $post->user_id = Auth::user()->id;

        $post = $request->input('newPost');
        \DB::table('posts')->insert([
            'post' => $post
        ]);

        return view('posts.index');
    }
}
