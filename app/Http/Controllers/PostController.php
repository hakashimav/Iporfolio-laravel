<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Client\Events\RequestSending;
use Illuminate\Http\Client\Request as ClientRequest;
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

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'category' => ['required', 'string', 'max:255'],
        //     'client' => ['required', 'string', 'max:255'],
        //     'url' => ['required', 'string', 'max:255'],

        // ]);

        // $post->name = $request->name;
        // $post->category = $request->category;
        // $post->client = $request->client;
        // $post->pro_url = $request->url;
        // $post->save();

        // $post = Post::create([
        //     'name' => $requests->name,
        //     'category'=> $requests->category,
        //     'client' => $requests->client,
        //     'pro_url' => $requests->url
        // ]);
        dd($request);
    }

}



















?>
