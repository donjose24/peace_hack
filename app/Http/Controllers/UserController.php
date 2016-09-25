<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        $events = $user->events()->get();
        return view('profile.index', compact('user', 'events'));
    }
}
