@extends('layouts.app')

@section('content')
    <div class="container home">
        <br>
        <div class="row">
            @foreach($rewards as $reward)
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="volt-container">
                            <div class="volt-points"> <i class="fa fa-bolt"></i> {{$reward->cost}}</div>
                            <img class="card-img-top" src="/images/{{$reward->picture}}" alt="Card image cap">
                        </div>
                        <div class="card-block">
                            <h4 class="card-title dot-ellipsis">{{$reward->title}}</h4>
                            <p class="card-text dot-ellipsis">
                                {!! $reward->short_description !!}
                            </p>
                            <a href="/reward/{{$reward->id}}" class="btn btn-primary btn-block">View Full Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
