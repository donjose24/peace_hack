@extends('layouts.app')

@section('head')
    <style>
        .hero {
            background: url('/images/{{$event->picture}}');
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
    <div class="container cancel-confirmation" style="margin-top: 10%;">
        <br>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card">
                    <div class="card-block">
                        <h5 class="card-title">Cancellation Successful</h5>
                        <p>We're sorry to know that you can't attend. Hopefully we'll get to
                        see you next time! 
                        </p>
                        <a href="/event/{{$event->id}}" class="back"><i class="fa fa-chevron-left"></i> Back to Event Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
