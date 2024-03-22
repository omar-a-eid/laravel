<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facade\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::withCount('posts')->get();
        return view("users", ['users' => $users]);
    }

    public function listNotifications() {
        $notifications = Auth::user()->unreadNotifications;
        return view("notifications.index", compact("notifications"));
    }
}