<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {

//        $posts = Post::paginate(5);
        $posts = Post::with('author')->paginate(5);

        return view('post.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('post.create-post');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->slug = str::slug(request('title'), '-');
        $post->title = request('title');
        $post->content = request('content');
        auth()->user()->posts()->save($post);
        return redirect('/');
    }

    public function show(Post $post)
    {

        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
//        $this->authorize('update', $post);
        return view('post.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $post->title = request('title');
        $post->content = request('content');
        $post->save();
        return redirect('/posts/' . $post->id);
    }

//    public function delete(Post $post)
//    {
//
//        $post->delete();
//
//        return redirect('/');
//    }
}
