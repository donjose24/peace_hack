<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Event;
use Auth;
use Mail;
<<<<<<< HEAD
use App\User;
=======
>>>>>>> d2937c566eaa8da09a4227ab06eb9ee18f90bba3

class EventController extends Controller
{
    public function subscribeUser(Request $request)
    {
        $eventId = $request->get('eventId');
        $userId = $request->get('userId');

        $event = Event::findOrFail($eventId);
        $event->users()->attach($userId);

        $user = User::find($userId);
<<<<<<< HEAD
        Mail::send('emails.confirm', ['user' => $user, 'event' => $event], function ($message) use ($user, $event) {
            $message->to($user->email, $user->name)->subject("Thanks for confirming to the event $event->title");
=======
        Mail::send('emails.confirm', ['user' => $user, 'event' => $event], function ($message) {
            $message->to($user->email, $user->name)->subject('This is a demo!');
>>>>>>> d2937c566eaa8da09a4227ab06eb9ee18f90bba3
        });

        return view('events.confirmation', compact('event'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        $users = $event->users()->get();
        $currentRegistered = $event->users()->count();
        if (Auth::check()) {
            $user = Auth::user();
            $isRegistered = $event->users()->where('user_id', $user->id)->count();
            return view('events.show', compact('event', 'users', 'isRegistered', 'currentRegistered'));
        }
        return view('events.show', compact('event', 'users', 'currentRegistered'));
    }

    public function delete(Request $request)
    {
        $eventId = $request->get('eventId');
        $userId = $request->get('userId');

        $event = Event::findOrFail($eventId);
        $event->users()->detach($userId);

        return view('events.cancel', compact('event'));
    }
}
