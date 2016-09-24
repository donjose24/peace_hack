<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;
use Auth;

class EventController extends Controller
{
    public function subscribeUser(Request $request)
    {
        $eventId = $request->get('eventId');
        $userId = $request->get('userId');

        $event = Event::findOrFail($eventId);
        $event->users()->attach($userId);

        return view('events.confirmation', compact('event'));
    }

    public function show($id)
    {
        if (Auth::check()) {
            $event = Event::findOrFail($id);
            $users = $event->users()->get();
            $user = Auth::user();
            $isRegistered = $event->users()->where('user_id', $user->id)->count();
            return view('events.show', compact('event', 'users', 'isRegistered'));
        } else {
            return redirect('login');
        }

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
