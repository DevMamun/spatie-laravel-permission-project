<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $data['posts'] = Post::all();
        return view('post', $data);
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){

        Post::create($request->all());

        return redirect()->route('post.index');
    }

    public function edit($id){

        $data['post'] = Post::findOrFail($id);
        return view('edit', $data);
    }
    public function update(Request $request, $id){

        $post = Post::findOrFail($id);
        $post->update($request->all());
        
        return redirect()->route('post.index');
    }
}
