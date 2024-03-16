<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::withCount('posts')->get();
        return view("users", ['users' => $users]);
    }
}
