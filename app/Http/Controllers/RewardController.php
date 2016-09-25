<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Reward;
use App\User;

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
        $users = $reward->users()->get();
        return view('rewards.show', compact('reward', 'users'));
    }

    public function claim(Request $request)
    {
        $userId = $request->get('userId');
        $rewardId = $request->get('rewardId');

        $user = User::findOrFail($userId);
        $reward = Reward::findOrFail($rewardId);

        $user->points = $user->points - $reward->cost;
        $user->save();

        $user->rewards()->attach($rewardId);

        Mail::send('emails.reward', ['user' => $user, 'reward' => $reward], function ($message) use ($user, $reward) {
            $message->to($user->email, $user->name)->subject("You have redeemed \"$reward->title\"");
        });
        return view('rewards.confirmation', compact('reward'));
    }
}
