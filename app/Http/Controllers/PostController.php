<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {

//        $posts = Post::paginate(5);
        $posts = Post::published()->with('author')->paginate(5);

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
        $published_at = request('published_at_date') . ' ' . \request('published_at_time') . ':00';
        $post->published_at = $published_at;
        auth()->user()->posts()->save($post);
        return redirect('/');
    }

    public function show($id)
    {
//        $post = Post::published()->owned()->findOrFail($id);
        $post = (new Post)->published()->findOrFail($id);
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {

        return view('post.edit', compact('post'));
    }

    public function update($id)
    {
        $post = Post::published()->findOrFail($id);
        $post->title = request('title');
        $post->content = request('content');
        $post->save();
        return redirect('/posts/' . $post->id);
    }

    public function delete(Post $post)
    {

        $post->delete();

        return redirect('/');
    }
}
