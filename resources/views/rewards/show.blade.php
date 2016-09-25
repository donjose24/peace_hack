@extends('layouts.app')

@section('head')
    <style>
.hero {
    background: url('/images/{{$reward->picture}}');
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
    padding: 8rem;
    text-align: center;
    color: #fff;
    position: relative;
}
    </style>

@endsection
@section('content')
    <div class="container-fluid">
        <br>
        <div class="col-lg-12 hero redeem-bg">
            <div class="overlay"></div>
            <div class="event-title">
                <h1>{{ $reward->title }}</h1>
            </div>
        </div>
    </div>
    <div class="container details">
        <br>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-block">
                        <h5 class="card-title">Reward Details</h5>
                        <p class="card-text">
                        {{$reward->description}}
                        </p>
                    </div>
                    <div class="card-block">
                        <h5 class="card-title">Reward Instructions</h5>
                        <p class="card-text">
                        {{$reward->instructions}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <h5 class="card-title">Get Yours Free Now!</h5>
                                @if (Auth::check())
                                    <h6>Your Points:{{Auth::user()->points}}</h6>
                                    <h6>Points Required:{{$reward->cost}}</h6>
                                    {{Form::open(['url' => 'reward', 'method' => 'POST'])}}
                                    {{Form::hidden('userId', Auth::user()->id)}}
                                    {{Form::hidden('rewardId', $reward->id)}}
                                    @if (Auth::user()->points < $reward->cost)
                                        {{Form::submit('Claim Reward', ['class' => 'btn btn-success btn-lg btn-block disabled'])}}
                                    @else
                                        {{Form::submit('Claim Reward', ['class' => 'btn btn-success btn-lg btn-block'])}}
                                    @endif
                                    {{Form::close()}}
                                @else
                                    <h6>You must <a href="/login">login</a> to continue</h6>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                        <h5 class="card-title">Users Claimed</h5>
                        <br>
                        <br>
                        @foreach($users as $user)
                            <div class="media">
                                <a class="media-left" href="#">
                                    <img class="media-object" src="{{$user->avatar_url}}" alt="Generic placeholder image">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">{{$user->name}}</h4>
                                    <p>
                                    @if(Auth::check())
                                        Software Engineer
                                        @if ($user->id == Auth::user()->id)
                                            (You)
                                        @endif
                                    @endif
                                    </p>
                                </div>                                   
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
