<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Reward;

class RewardController extends Controller
{
    public function index()
    {
        $rewards = Reward::all();
        return view('rewards.index', compact('rewards'));
    }

    public function show($id)
    {
        $reward = Reward::findOrFail($id);
        return view('rewards.show', compact('reward'));
    }
}
