<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Socialite;
use URL;
use App\User;

class SocialAuthController extends Controller
{
    public function redirect(Request $request)
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback(Request $request)
    {
        $response = Socialite::driver('facebook')->user();

        $count = User::where('facebook_id', $response->id)->count();
        if ($count == 0) {
            $user = new User();
            $user->email = $response->email;
            $user->name = $response->name;
            $user->facebook_token = $response->token;
            $user->facebook_id = $response->id;
            $user->avatar_url = $response->avatar;
            $user->password = bcrypt('test'); //haha dont do this. for hacking pruposes lang~
            $user->address = 'Valenzuela City'; //this too

            $user->save();
        } else {
            $user = User::where('facebook_id', $response->id)->first();
        }
        auth()->login($user);

        return redirect($request->session()->get('lastUrl'));
    }
}
