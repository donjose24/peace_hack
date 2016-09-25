@extends('layouts.app')

@section('head')
    <meta property="og:url" content="http://volteer.herokuapp.com/event/{{$event->id}}" />
    <meta property="og:type" content="Volteer" />
    <meta property="og:title" content="{{$event->title}}" />
    <meta property="og:description" content="{{$event->short_description}}" />
    <meta property="og:image" content="http://volteer.herokuapp.com/images/{{$event->picture}}" />

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
    <div class="container" style="margin-top: 10%;">
        <div class="row">
            <div class="col-lg-12 hero">
                <div class="overlay"></div>
                <div class="event-title">
                    <h1>{{$event->title}}</h1>
                    <h5>{{$event->organizing_body}}</h5>
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
                        <h5 class="card-title">Registration Successful!</h5>
                        <p>It'd be great if you could bring your friends along
                        and do great things together. <br>
                        Share our cause with your friends!</p>
                        <div class="col-lg-6">
                            <a href="/event/{{$event->id}}" class="float-right back"><i class="fa fa-chevron-left"></i> Back to Event Details</a>
                        </div>
                        <div id="fb-root"></div>
                        <div class="col-lg-6">
                            <div class="fb-share-button" 
                                 data-href="https://volteer.herokuapp.com/event/{{$event->id}}" 
                                 >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
    </script>
@endsection 
