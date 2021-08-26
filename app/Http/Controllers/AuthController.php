<?php

namespace App\Http\Controllers;

use App\Models\User;


class AuthController extends Controller
{
    public function getAll()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function getById($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }
}
