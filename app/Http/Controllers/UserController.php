<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $name  = $request->name;
        $email = $request->email;
        $bio   = $request->bio;

        $users = User::orderBy('id', 'DESC')
            ->name($name)
            ->email($email)
            ->bio($bio)
            ->paginate(4);

        return view('user', compact('users'));
    }
}
