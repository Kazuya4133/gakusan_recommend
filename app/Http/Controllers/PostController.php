<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(3);
        return view('welcome', compact('posts'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        return view('show');
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {

    }
}
