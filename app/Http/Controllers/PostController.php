<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(4);
        return view('welcome', compact('posts'));
    }

    public function create(int $user_id)
    {
        return view('create', compact('user_id'));
    }

    public function store(int $user_id, Request $request)
    {
        // これはいる？？
        $post = Auth::user($user_id);

        $post = new Post();

        return redirect()->route('index', compact('user_id'));
    }

    public function show(int $user_id, int $post_id)
    {
        $post = Post::find($post_id);
        return view('show', compact('post_id'));
    }

    public function edit(int $user_id, int $post_id)
    {

    }

    public function update(Request $request, int $id)
    {

    }

    public function destroy($id)
    {

    }
}
