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
        $user = User::findOrFail($user_id);
        // if (Auth::user()->id !== $user->id) {
        //     abort(403);
        // }

        return view('users.edit', compact('user'));
    }

    public function editProf(int $user_id, Request $request)
    {
        $user = User::findOrFail($user_id);
        $user->name = $request->name;
        $user->type = $request->type;
        $user->comment = $request->comment;

        if ($request->image) {
            $user->$image = $request->image->storeAs('public/images', Auth::id() . 'jpg');
        }

        // AWS S3で保存する場合
        // if ($request->image) {
        //     $image = $request->image;
        //     $path = Storage::disk('s3')->put('/images', $image, 'public');
        //     $user->image = $path;
        // }

        $user->save();

        return redirect()->route('index', compact('user'));
    }
}
