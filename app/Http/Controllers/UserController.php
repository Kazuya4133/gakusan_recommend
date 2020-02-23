<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function showProf(int $user_id)
    {
        $user = User::findOrFail($user_id);
        $posts = Post::paginate(3);
        return view('users.users', compact('user', 'posts'));
    } 
    
    public function showProfEditForm(int $user_id)
    {
        // $user = User::findOrFail($user);
        // if (Auth::user()->id !== $user->id) {
        //     abort(403);
        // }

        return view('users.edit');
    }

    public function edit()
    {

    }
}
