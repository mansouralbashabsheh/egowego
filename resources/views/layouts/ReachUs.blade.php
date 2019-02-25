@extends('layouts.app')

@section('content')


@endif



@if(Session('success'))
                                               
<i> {{Session('success')}} </i>
                                           
                 

@endif


<div id="fullscreen_bg" class="fullscreen_bg .bgchange" />
<form class="form-signin" action="{{url('/ReachUs')}}" method="POST">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">

                <div id="form">
                    <!-- login and signup form  -->
                    <ul class="tabs">
                   
                        <li id="tab1" class="tab"><a class="activate">Reach Us</a></li>
                      
                    
                    </ul>
                    <!-- .tabs (login and signup) -->
                    <div id="tab_content">
                        <div id="login" class="">
                            <form action="" method="post">
                                <h1 class="text-center">Reach Us</h1>
                                <div class="wrap-field">
                                    @guest
                                    <label for="email" class="inactive">Enter Your E-Mail:<span class="req">*</span></label>
                                    <input type="email" name="email" id="email" required />
                                    @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    @else
                                    <label for="email" class="inactive">Enter Your E-Mail:<span class="req">*</span></label>
                                    <input type="email" name="email" id="email" value="  {{ Auth::user()->email }}" readonly required />
                                    @endguest
                                   
                                </div>
                                <div class="wrap-field">
                                    <label for="topic" class="inactive">Select Your Topic<span class="req">*</span></label>
                                    <select class="form-control" name="topic" id="topic" required="">
                                        
                                            <optgroup label="Select Topic">
                                                    
                                            
                                        <option value="Technical">Technical</option>
                                        <option value="Marketing and Advertising">Marketing and Advertising</option>
                                        <option value="Inquiry">Inquiry</option>
                                        <option value="Other">Other</option>
                                    </optgroup>
                                    </select>
                                </div>
                                <div>
                                    <div class="wrap-field">
                                        <label for="massage" class="inactive">Message<span class="req">*</span></label>
                                        <textarea class="form-control" name="massage" id="massage" maxlength="250" placeholder="massage" rows="7" required=""></textarea>

                                        <span id="chars">250</span> characters remaining
                                    
                                        @if ($errors->has('massage'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('massage') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                               
                                
                                <script>
                                     
                                        CKEDITOR.replace( 'massage' );
                                   
                                           
                                        </script>
                                <button type="submit" name="send" class="btn btn-primary">Submit</button>
                          </form>
                        </div>
                        <!-- #login  -->
                   
                    </div>
                    <!-- #tab_content	 -->
                </div>


            </div>


            <div class="col-md-3">

            </div>
        </div>
    </div>
</form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
   <script src="js/main.js"></script>


@endsection