<?php

namespace App\Http\Controllers;

use App\Models\Post;
use illuminate\Http\Request;

class PostController extends Controller
{

    public function show($id)
    {
        $post = Post::findOrFail($id);

        // $post = Post::where('name', 'nom de recherche')->firstOrFail();

        return view('portfolio-details',[
            'post' => $post
        ]);
    }

    public function index()
    {
        // $post = Post::find(1);

        // $post->update([
        //     'name' => 'indique le update'
        // ]);

        // $post = Post::find(4);
        // $post->delete();
        // dd('sumprimé!');

        $posts = Post::orderBy('name')->get();

        return view('index',[
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('dashboard');
    }

    public function save(Request $request)
    {
        // $post = new Post();

        // $post->name = $request->name;
        // $post->category = $request->category;
        // $post->client = $request->client;
        // $post->pro_url = $request->url;
        // $post->save();

        Post::create([
            'name' => $request->name,
            'category'=> $request->category,
            'client' => $request->client,
            'pro_url' => $request->url
        ]);

        dd('Post créé !');
    }
}



















?>
