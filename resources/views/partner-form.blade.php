
    <!DOCTYPE html>
    <html lang="en">

    <head>
          <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="womennovators global summit">
        <meta name="Author" content="womennovators">
        <meta name="Keywords"
            content=">
        <!-- Title -->
        <title>WE-PITCH</title>

        <!-- stylesheet start -->
        @include('backEnd.layouts.includes.stylesheet')
        <!-- stylesheet end -->
    </head>

    <body style="background: linear-gradient(skyblue, pink, lightgreen);">
        <br>
        <a href="#"><img style="margin-top: 0px; margin-left:50px; margin-bottom:0px;"
                src="{{ url('frontEnd/images/Womennovator.png') }}" alt="logo" height="60px" width="150px" /></a>
        <!-- main-signin-wrapper -->
        <div class="my-auto page page-h">
            <div class="main-signin-wrapper">

                <div class="main-card-signin d-md-flex wd-40p" style=" background-color: rgba(0, 0, 0, 0.2);
            width: 100%;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.3);">

                    <div class="p-5 wd-md-100p">
                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            @if(is_array(session()->get('success')))
                            @foreach (session()->get('success') as $message)
                            <p>{{ $message }}</p>
                            @endforeach
                            @else
                            <p>{{ session()->get('success') }}</p>
                            @endif
                        </div>
                        @endif


                        <div class="main-signin-header">
                            <h2 style="text-align: center;color:white;">Partnership Configuration & Confirmation</h2>


                            <form  method="post" action="{{ url('/partner/store')}}"
                                enctype="multipart/form-data">
                                @csrf

                            
                           <br>
                                <div class="form-group">
                                    <label style="    color: #fff;"><strong>{{ __('E-Mail Address') }}</strong></label>
                                    <input type="email" required name="email" class="form-control" placeholder="Enter Email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                             
                       
                                <div class="form-group">
                                    <label style="color: #fff;"><strong> <label style="color: #fff;">
                                        <strong>Please confirm your contribution as a partner with WE@inQ Scale to India Program for 2021 <span class="tx-danger">*</span></strong></label>
                                    <br>
                                    <input type="radio" name="contribution" id="inlineRadio2" value="yes" >
                                    <label class="form-check-label" for="inlineRadio2"><b
                                            style="color: white;"><strong>YES</strong></b></label>

                                    <input type="radio" name="contribution" id="inlineRadio2" value="no">
                                    <label class="form-check-label" for="inlineRadio2"><b
                                            style="color: white;"><strong>NO</strong></b></label>

                                </div>
                             
                   
                                <div class="form-group"> 
                                    <label style="    color: #fff; "><strong>Nominate how you're going to interact as a partner. Select all that apply.<span class="tx-danger">*</span></strong></label>
                                    <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="interact_as_partner[]" value="1" id="defaultCheck1">
                                    <label style="color: white;" class="form-check-label" for="defaultCheck1">
                                        Content Contribution: To Workshops & Events Across the Program
                                    </label>
                                    </div>
                                    <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="interact_as_partner[]" value="2" id="defaultCheck1">
                                    <label style="color: white;" class="form-check-label" for="defaultCheck1">
                                        Mentorship / Office Hours - Up to 2 Hours per partner in a One to One with a Top Participant
                                    </label>
                                    </div>
                                    <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="interact_as_partner[]" value="3" id="defaultCheck1">
                                    <label style="color: white;" class="form-check-label" for="defaultCheck1">
                                        In-kind Support to the Top 3 Female Founded Startups
                                    </label>
                                    </div>
                                    <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="interact_as_partner[]" value="4" id="defaultCheck1">
                                    <label style="color: white;" class="form-check-label" for="defaultCheck1">
                                        Partner Link: Direct support to the top 3 (approx 1h/month for 12 months) to be a support to the founder as they scale in India
                                    </label>
                                    </div>
                                    <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="interact_as_partner[]" value="5" id="defaultCheck1">
                                    <label style="color: white;" class="form-check-label" for="defaultCheck1">
                                  Others
                                    </label>
                                    </div>
                                     </div>
                            
                          <div class="form-group">
                            <label style="color: #fff;"><strong> <label style="color: #fff;">
                                <strong>You confirm the use of your logo on the WE@InQ Website to show your support <span class="tx-danger">*</span></strong></label>
                            <br>
                            <input type="radio" name="confirm_logo" id="inlineRadio2" value="yes" >
                            <label class="form-check-label" for="inlineRadio2"><b
                                    style="color: white;"><strong>YES</strong></b></label>

                            <input type="radio" name="confirm_logo" id="inlineRadio2" value="no">
                            <label class="form-check-label" for="inlineRadio2"><b
                                    style="color: white;"><strong>NO</strong></b></label>

                        </div>
                        <div class="form-group">
                            <label style="color: #fff;"><strong> <label style="color: #fff;">
                                <strong>Do you require a partnership agreement to be sent to you to formalise this partnership based on your interaction preferences?<span class="tx-danger">*</span></strong></label>
                            <br>
                            <input type="radio" name="partnership_agreement" id="inlineRadio2" value="yes" >
                            <label class="form-check-label" for="inlineRadio2"><b
                                    style="color: white;"><strong>YES</strong></b></label>

                            <input type="radio" name="partnership_agreement" id="inlineRadio2" value="no">
                            <label class="form-check-label" for="inlineRadio2"><b
                                    style="color: white;"><strong>NO</strong></b></label>

                        </div>
                        <div class="form-group">
                            <label style="color: #fff;"><strong> <label style="color: #fff;">
                                <strong>Are we able to send you program updates such as the announcement of the successful 2021 Cohort? <span class="tx-danger">*</span></strong></label>
                            <br>
                            <input type="radio" name="program_updates" id="inlineRadio2" value="yes" >
                            <label class="form-check-label" for="inlineRadio2"><b
                                    style="color: white;"><strong>YES</strong></b></label>

                            <input type="radio" name="program_updates" id="inlineRadio2" value="no">
                            <label class="form-check-label" for="inlineRadio2"><b
                                    style="color: white;"><strong>NO</strong></b></label>

                        </div>
                    
                        <div class="form-group">
                            <label style="    color: #fff;"><strong>Please note your social handles you would like to be tagged as in posts about the WE@inQ Program<span class="tx-danger">*</span></strong></label>
                            <input type="text" name="social_handles" class="form-control" placeholder="Your answer">

                            @error('social_handles')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label style="    color: #fff;"><strong>Nominate the person (name, title, email) you would like us to engage with as a partner representative:</strong></label>
                            <input type="text" name="nominate" class="form-control" placeholder="Your answer">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                            
                           
                            <button style="background:#8F4A9F;" type="submit"
                                class="btn btn-main-primary btn-block">Submit</button>
                        </form>
                    </div>
                    {{-- <div class="main-signin-footer mt-3 mg-t-5">
                    <p>   @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                    </a>
                    @endif</p>
                    <!-- <p>Don't interact_as_partner an account? <a href="signup.html">Create an Account</a></p> -->
                </div> --}}
                </>
            </div>
        </div>
    </div>
    <!-- /main-signin-wrapper -->



    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>


    <!-- js bar start-->
    @include('backEnd.layouts.includes.js')
    <!-- js bar end -->


</body>

</html>
