<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use App\Models\Post;
use illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

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

}



















?>
