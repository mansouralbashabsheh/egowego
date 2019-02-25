@extends('layouts.app')

@section('content')
<div id="fullscreen_bg" class="fullscreen_bg">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="jumbotron text-xs-center">
      
                <h1 class="display-3" ><i class="fas fa-unlock-alt pr5"></i> {{ __('Reset Password') }}</h1>
                <p> Don't Worry , Resetting your <strong class="red-text">password is easy </strong>, just tell us the email address you registered with zoom</p>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-3">   <button type="submit" class="btn btn-primary padding-btn">
                                    {{ __('Send') }}
                                </button></div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="text-center">
                              
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
        <div class="col-md-2">
            </div>
    </div>
</div>
</div>





@endsection
