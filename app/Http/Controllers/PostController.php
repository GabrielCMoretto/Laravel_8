<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();//isso aqui cria um array de posts(poderia usar all())

        //dd($posts); //bom pra debugar

        return view('admin.posts.index',compact('posts'));//compact junta os posts aparentemente(poderia usar ['posts'=>$posts,])
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(StoreUpdatePost $request)
    {
        $post = Post::create($request->all());//pra fazer um store especifico: ['title' => $request->title]
        return redirect()->route('posts.index');
    }
    public function show($id)
    {
        $post = Post::find($id);
        if(!$post){
            return redirect()->route('posts.index');
        }
        return view ('admin.posts.show',compact('post'));
    }
    public function destroy($id)
    {
        if(!$post=Post::find($id))
            return redirect()->route('posts.index');

        $post->delete();

        return redirect()->route('posts.index')->with('message','Post deletado com sucesso');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        if(!$post){
            return redirect()->back();
        }
        return view ('admin.posts.edit',compact('post'));
    }

    public function update($id)
    {
        $post = Post::find($id);
        if(!$post){
            return redirect()->back();
        }
        
    }
}
