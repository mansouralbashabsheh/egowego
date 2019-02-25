@extends('layouts.app')

@section('content')

<div id="fullscreen_bg" class="fullscreen_bg" />




    <div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
             
                <div id="form">
                    <!-- login and signup form  -->
                    <ul class="tabs">
                        <li id="tab1" class="tab"><a href="#login" class="activate">Log In</a></li>
                        <li id="tab2" class="tab"><a href="#signup">Sign Up</a></li>
                    </ul>
                    <!-- .tabs (login and signup) -->
                    <div id="tab_content">
                        <div id="login" class="">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <h1 class="text-center">Welcome Back!</h1>
                                <div class="wrap-field">
                                    <label for="email">Email<span class="req">*</span></label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required autofocus />
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                       *{{ $errors->first('email') }}
                                    </span>
                                @endif
                                </div>
                                <div class="wrap-field">
                                    <label for="password">Password<span class="req">*</span></label>
                                    <input type="password" class="form-control" name="password" id="password" required />
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
                                </div>
                                <div class="wrap-field">
                                        <div class="checkbox">
                                                <label class="form-check-label" for="remember"> <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>  {{ __('Remember Me') }}</label>
                                              </div>
                                             </div>

                            @if (Route::has('password.request'))
                            <a  style="float: right;" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                                
                                <button type="submit" name="login" class="btn btn-primary">LOG IN</button>
                                
                          </form>
                         


                        </div>
                        <!-- #login  -->
                        <div id="signup" class="">
                            <form method="POST" action="{{ route('register') }}">
                                
                                @csrf
                                <h1 class="text-center">Sign Up For Free</h1>
                                <div class="clearfix">
                                    <div class="col-md-6">
                                        <div class="wrap-field float-left">
                                            <label for="name">First Name</label>
                                            <input type="text"  class="form-control"  name="name" id="name"   />
                                            @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                              {{ $errors->first('name') }}
                                            </span>
                                        @endif
                                        </div>

                                       
                                        <div class="wrap-field">
                                            <label for="pass">Password<span class="req">*</span></label>
                                            <input type="password"  class="form-control"  name="password" id="password" required />
                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                             {{ $errors->first('password') }}
                                            </span>
                                        @endif
                                        </div>
                                        <div class="wrap-field">
                                            <label for="gender" class="inactive">Gender<span class="req">*</span></label>
                                            <select class="form-control" name="gender" id="gender" >
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                         <div class="wrap-field float-right">
                                             <label for="last_name">Last Name<span class="req">*</span></label>
                                             <input type="text" name="last_name" id="last_name" required />
                                             @if ($errors->has('last_name'))
                                            <span class="invalid-feedback" role="alert">
                                               {{ $errors->first('last_name') }}
                                            </span>
                                        @endif
                                         </div>
                                         <div class="wrap-field">
                                             <label for="password_confirmation">RE-Password<span class="req">*</span></label>
                                             <input type="password" name="password_confirmation" id="password_confirmation" required />
                                         </div>
                                         <div class="wrap-field float-right">
                                                  <label for="country" class="inactive">Country<span class="req">*</span></label>
                                             <input type="text" name="country" id="country" required />
                                             @if ($errors->has('country'))
                                            <span class="invalid-feedback" role="alert">
                                               {{ $errors->first('country') }}
                                            </span>
                                        @endif
                                         </div>

                                      
                                    </div>
                                    <div class="col-md-12">
                                        <div class="wrap-field mt0" style="clear: both">
                                            <label for="email">Email<span class="req">*</span></label>
                                            <input type="email" class="form-control" name="email" id="mail" required />
                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                              {{ $errors->first('email') }}
                                            </span>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="wrap-field mt0" style="clear: both">
                                            <label for="date" class="inactive">Date of Birthday<span class="req">*</span></label>
                                            <input type="date" name="date" id="date" class="form-control" required />
                                            @if ($errors->has('date'))
                                            <span class="invalid-feedback" role="alert">
                                            {{ $errors->first('date') }}
                                            </span>
                                        @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="wrap-field mt0" style="clear: both">
                                            <label for="date">Code</label>
                                            <input type="number"  class="form-control"  id="date" name="date" required />
                                            @if ($errors->has('date'))
                                            <span class="invalid-feedback" role="alert">
                                                {{ $errors->first('date') }}
                                            </span>
                                        @endif
                                        </div>






                                        
                                    </div>
                                    <div class="col-md-6">
                                    
                                           
                                        <div class="wrap-field mt0" style="clear: both">
                                            <label for="mobile">Mobile</label>
                                            <input type="number" name="mobile" class="form-control" id="mobile" required />
                                            @if ($errors->has('mobile'))
                                            <span class="invalid-feedback" role="alert">
                                                {{ $errors->first('mobile') }}
                                            </span>
                                        @endif
                                        </div> 
                                        
                                    </div>

                                    </div>
                            
                            
                               
                              <br />
                              <div>
                                    <button type="submit" name="register" class="btn btn-primary btn-block">SIGN UP</button>
                                    <p class="text-center or-text"> or </p>
                                <div class="buttons-action"> 
                                        <a  class="btn btn-info btn-block" href="{{route('logins','facebook')}}">
                                                <i class="fab fa-facebook-f"></i>    Sign up with facebook
                                                 </a>
                                                 <br/> 
                                    <a class="btn btn-vk btn-block" href="{{route('logins','google')}}">
                                            <i class="fab fa-vk"></i> Sign up with VK
                                    </a>
                                   
                                    
                                       
                                      
                                     
                                    </div>
                                            
                              </div>
                             
                            </form>
                        </div>
                        <!-- #signup  -->
                    </div>
                    <!-- #tab_content	 -->
                </div>
               

            </div>
        
       
            <div class="col-md-3">

            </div>
         </div>
    </div>

</div>





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="./js/countrySelect.js"></script>
   <script src="js/main.js"></script>

<script>


    $("#country").countrySelect();




    $(document).ready(function () {

        /* Default Settings */
        $('input').prev('label').addClass('inactive');
        $('#signup').hide();

        $('.tab a').on('click', function (e) {
            e.preventDefault(); /* to stop default action */

            /* To activate login or signup tab */
            $(this).addClass('activate');
            $(this).parent().siblings().children().removeClass('activate');

            /* To hide or show the login and signup form */
            target = $(this).attr('href');
            $('#tab_content > div').not(target).hide();
            $(target).fadeIn(600);
        });

        /* Form elements */
        $('input , select').focus(function () {
            $(this).prev('label').addClass('active');
        });/* input focus function */

        $('input , select').blur(function () {
            var $this = $(this);
            if ($this.val() === '') {
                $(this).prev('label').removeClass('active');
                $(this).prev('label').addClass('inactive');
            }
            else {
                $(this).prev('label').removeClass('inactive');
                $(this).prev('label').addClass('active');
            }
        });/* input blur function */
    });/* document.ready */





   
</script> 
   

@endsection
