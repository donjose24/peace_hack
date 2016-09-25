@extends('layouts.app')

@section('content')
    <div class="container details">
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
                                <h5 class="card-title"></h5>
                                @if (Auth::check())
                                    Hello World
                                @else
                                    <h6>You must <a href="/login">login</a> to continue</h6>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
