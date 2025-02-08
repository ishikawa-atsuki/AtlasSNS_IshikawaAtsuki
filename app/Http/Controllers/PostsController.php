<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(){
        $list = Post::where('user_id', \Auth::user()->id)->get();
        return view('posts.index',['list'=>$list]);
        // return view('posts.index');
    }

    public function store(Request $request){
        $post->user_id = \Auth::user()->id;
        $post = $request->input('newPost');
        Post::create(['post' => $post]);
        return back();

        // $this->validate($request,[
        //     'post'=>'required|min:1|max:150',
        // ]);

        // $post->user_id = Auth::user()->id;

        // $post = $request->input('newPost');
        // \DB::table('posts')->insert([
        //     'post' => $post
        // ]);

        // return view('posts.index');
    }
}
