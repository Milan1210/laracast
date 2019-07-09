<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        $post = new Post;
        $posts = $post->get();

        return view('posts.index',compact('posts'));
    }

    public function show(Post $post) // Ovaj $post se salje iz rute u fajlu web.php i ima vrednost id-a posta,
    {
        // $post = Post::find($id);

        return view('posts.show',compact('post'));
    }

    public function master()
    {
        return view('layouts.master');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'content' => 'required',
        ]);
        // $posts = new Post;
        
        // $posts->title = request('title');
        // $posts->content = request('content');

        // $posts->save();

        Post::create([
            'title'=>request('title'),
            'content'=>request('content'),
        ]);
        return redirect('/');
    }
}
