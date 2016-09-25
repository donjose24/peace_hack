@extends('layouts.app')

@section('content')
    <div class="container-fluid landing">
        <div class="overlay"></div>
        <div class="landing-content">
            <img class="logo-landing" src="img/logo.png" alt="">
            <h1>Change Lives. Earn Points. Claim Rewards</h1> 
            <a href="#" class="btn btn-eer btn-lg learn-more">Learn More</a>
        </div>
    </div>
    <div class="container-fluid about">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="eer headline">Peace Comes With Helping People</h1>
                <br>
                <h5>With volunteering comes understanding and with understanding comes peace.
                    Volteer is a gateway for organizations to create their own volunteering programs
                    and connect them with the people who are willing to help. In exchange for
                    your effort, you will get <strong>"volts"</strong> which you can use to exchange for rewards.
                </h5>
                <br>
                <a href="#" class="btn btn-eer btn-lg view-programs">View Available Volunteering Programs</a>
            </div>
        </div>
    </div>
    <div class="container home">
         <br>
         <div class="row headline">
             <h1 class="eer headline">Available Volunteering Programs</h1>
             <h5>The volunteering programs come from different world organizations.
                 Start joining and earn your <strong>"volts"</strong> today!
             </h5>
         </div>
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
    @section('script')
        <script>
          $('.learn-more').on('click', function(){
             $('html, body').animate({
                 scrollTop: $('.about').offset().top
             }, 1000);
             $(this).css('color', 'white');
          });

          $('.view-programs').on('click', function(){
             $('html, body').animate({
                 scrollTop: $('.home').offset().top
             }, 1000);
             $(this).css('color', 'white');
          });
      </script>
    @endsection
@endsection
