@extends('emails.layout')

@section('content')
    Hi {{$user->name}}!
    <br>
    <br>

    Thanks for confirming to the event "{{$event->title}}". Your attendance will surely be appreciatted.
    Use this email as a ticket to the volunteering event.

    <br>
    <br>
    <br>
    Lovelots,<br>
    Volteer Team

@endsection
