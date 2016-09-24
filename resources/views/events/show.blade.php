@extends('layouts.app')


@section('content')
    <div class="container details">
        <br>
        <div class="col-lg-12 hero">
            <div class="overlay"></div>
            <div class="event-title">
                <h1>{{ $event->title }}</h1>
                <h5>{{ $event->organizing_body }}</h5>
            </div>
        </div>
    </div>
    <div class="container details">
        <br>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-block">
                        <h5 class="card-title">What's it all about?</h5>
                        <p class="card-text">
                        {{$event->description}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <h5 class="card-title">Event Details</h5>
                                <p class="date"><strong>From:</strong> {!!date('F d, Y h:m A', strtotime($event->start_date))!!}</p>
                                <p class="date"><strong>To:</strong> {!!date('F d, Y h:m A', strtotime($event->end_date))!!}</p>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <h5 class="card-title">Join the cause</h5>
                                @if (Auth::check())
                                    @if($isRegistered == 0)
                                        {{Form::open(['url' => 'event', 'method' => 'POST'])}}
                                        {{Form::hidden('userId', Auth::user()->id)}}
                                        {{Form::hidden('eventId', $event->id)}}
                                        {{Form::submit('Register', ['class' => 'btn btn-success btn-lg btn-block'])}}
                                        {{Form::close()}}
                                    @else 
                                        {{Form::open(['url' => 'event', 'method' => 'DELETE'])}}
                                        {{Form::hidden('userId', Auth::user()->id)}}
                                        {{Form::hidden('eventId', $event->id)}}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Cancel', ['class' => 'btn btn-danger btn-lg btn-block'])}}
                                        {{Form::close()}}                                   
                                    @endif
                                @else
                                    <h6>You must login to continue</h6>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <h5 class="card-title">Volunteers Registered</h5>
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img class="media-object" src="http://placehold.it/64x64" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Patrick James G. Lim</h4>
                                        <p>UI/UX Designer</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img class="media-object" src="http://placehold.it/64x64" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jose Mari Ramos</h4>
                                        <p>PHP Developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

