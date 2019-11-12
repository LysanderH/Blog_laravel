<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class AuthorPostController extends Controller
{
    public function index(User $user)
    {
        if ($user->id == auth()->id()) {
            $posts = Post::where('owner_id', $user->id)->paginate(5);
        } else {
            $posts = $user->posts()->published()->paginate(5);
        }


        return view('user.post.index', compact('user', 'posts'));
    }
}
