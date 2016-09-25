@extends('layouts.app')

@section('head')
    <style>
        .hero {
            background: url('/images/bg.jpg');
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
        <div class="row">
            <div class="col-lg-12 hero redeem-bg">
                <div class="event-title">
                    <h1>{{$reward->title}}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container confirmation">
        <br>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card">
                    <div class="card-block">
                        <h5 class="card-title">Claiming Successful!</h5>
                        <p>We're so happy to get yourself a treat for helping
                        other people. <br>
                        Share this awesome achievement to your friends!</p>
                        <div class="col-lg-6">
                            <a href="/reward/{{$reward->id}}" class="float-right back"><i class="fa fa-chevron-left"></i> Back to Event Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
