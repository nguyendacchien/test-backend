<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view('users.login');
    }

    public function login(Request $request)
    {
        $user = $request->only('email','password');

        if (Auth::attempt($user)){
            return redirect()->route('welcome');
        }
        return redirect()->route('showFormLogin');
    }

    public function welcome()
    {
        return view('welcome');

    }

    public function logOut()
    {
        Auth::logout();
        return redirect()->route('showFormLogin');
    }

    public function getAll()
    {
        return $users = User::all();
    }
}
