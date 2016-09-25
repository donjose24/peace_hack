@extends('emails.layout')

@section('content')
    Hi {{$user->name}}!
    <br>
    <br>

    You successfuly redeemed "{{$reward->title}}". Thanks for your avid support on different volunteering events
    <br>
    <br>
    here are the instructions for redeeming the prizes:
    <br>
    <br>
    <br>
        {{$reward->instrution}} 
    <br>
    <br>
    <br>
    Lovelots,<br>
    Volteer Team

@endsection
