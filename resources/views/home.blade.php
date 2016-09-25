@extends('layouts.app')

@section('content')
    <div class="container home">
        <br>
        <div class="row">
            @foreach($events as $event)
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="volt-container">
                            <div class="volt-points"> <i class="fa fa-bolt"></i> {{$event->points}}</div>
                            <img class="card-img-top" src="/images/{{$event->picture}}" alt="Card image cap">
                        </div>
                        <div class="card-block">
                            <h4 class="card-title dot-ellipsis">{{$event->title}}</h4>
                            <h6 class="date-time"> <i class="fa fa-hourglass-start"></i> {!!date('F d, Y | h:m A', strtotime($event->start_date))!!}</h6>
                            <h6 class="date-time"> <i class="fa fa-hourglass-end"></i> {!!date('F d, Y | h:m A', strtotime($event->end_date))!!}</h6>
                            <h6 class="place"><a href="https://goo.gl/maps/aXsQf46ttgG2" target="_blank"><i class="fa fa-map-marker"></i> Tatalon, Quezon City</a></h6>
                            <p class="card-text dot-ellipsis">
                                {!! $event->short_description !!}
                            </p>
                            <a href="/event/{{$event->id}}" class="btn btn-primary btn-block">View Full Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
