@extends('layouts.app')

@section('content')




















<div id="fullscreen_bg" class="fullscreen_bg" />

<div class="container">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
         
            
                <div class="jumbotron text-xs-center">
                    <h1 class="display-3">Congratulations!</h1>
                    <p class="lead"><strong>You just won 3,000 Silver Coins</strong> <br />
                    Please check your email for further instructions on how to activate your account.</p>

                   <span class="if-did-not">{{ __('If you did not receive the email') }} </span> <a class="btn btn-primary" href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>
                   <br />  <br />
                   @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                      <span>  <i class="fas fa-info-circle pr5 icon-alert"></i>  {{ __('A fresh verification link has been sent to your email address.') }}</span>
                    </div>
                @endif
                  
                   
                </div>
            </div>
           

        </div>
    
   
        <div class="col-md-2">

        </div>
     </div>


</div>





@endsection
