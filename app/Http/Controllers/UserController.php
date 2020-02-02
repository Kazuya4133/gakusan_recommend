<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
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
