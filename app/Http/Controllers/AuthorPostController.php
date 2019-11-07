<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AuthorPostController extends Controller
{
    public function index(User $user)
    {
//        return $user->load(['posts'=>function($query){
//            $query->simplePaginate(5);
//        }]);
        $posts = $user->posts()->paginate(5);

        return view('user.post.index', compact('user', 'posts'));
    }
}
