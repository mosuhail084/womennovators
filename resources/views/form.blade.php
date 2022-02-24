<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4">
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Title -->
    <title>WE-PITCH</title>

 <!-- stylesheet start -->
 @include('backEnd.layouts.includes.stylesheet')
 <!-- stylesheet end -->
</head>
<body style=" background-image: url(/frontEnd/images/w.jpg);background-position: center;
background-size: cover;
margin-top: 40px;">
   <div class="card-body"><div class="img-responsive"><a href="#"><img style="margin-top: 0px; margin-left:50px; margin-bottom:30px padding-bottom:10px;"
    src="{{ url('frontEnd/images/Womennovator.png') }}" alt="logo" height="60px" width="150px" /></a></div></div>
<style>
.card-body{
    color:black;
}
</style>
<!-- main-signin-wrapper -->
<div class="card-body">
<div class="my-auto page page-h">
    <div class="main-signin-wrapper">
     
        <div class="main-card-signin" style="box-shadow: 2px 2px 15px rgb(255 20 147 / 30%);border-radius: 10px;border: 1px solid rgba(255,255,255,0.3);width:440px;margin: -55px 10% 0px auto;background-color: rgba(219,112,133,0.6);">

            <div class="p-5 wd-md-100p">
                @if(session()->has('status'))
                <div class="alert alert-success">
                    @if(is_array(session()->get('status')))
                    @foreach (session()->get('status') as $message)
                    <p>{{ $message }}</p>
                    @endforeach
                    @else
                    <p>{{ session()->get('success') }}</p>
                    @endif
                </div>
                @endif


                <div class="main-signin-header">
                    <h2 style="text-align: center;color:white;">Challenges Form</h2>


                    <form id="register" method="post" action="{{ route('polling.store')}}"
                        enctype="multipart/form-data">
                        @csrf
                      
                <div>
                    <ul>
                        @foreach ($errors->all() as $e)
                        <li style="color:red;">{{$e}}</li>
                        @endforeach
                    </ul>
                </div>
                        <div class="form-group">
                            <label style="    color: #fff;"><strong>Name</strong></label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                           
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label style="    color: #fff;"><strong>{{ __('E-Mail Address') }}</strong></label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label style="    color: #fff;"><strong>Phone</strong></label>
                            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone">

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label style="    color: #fff;"><strong>Choose your major challenge for support</strong></label>

                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="challenge[]" value="1" id="defaultCheck1" >
                <label style="color: white;" class="form-check-label" for="chkPassport">
                Creating Distribution Channel
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="challenge[]"  value="2" id="defaultCheck1">
                <label style="color: white;" class="form-check-label" for="chkPassport">
                Idea to Prototype to Final Product
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="challenge[]" value="3"  id="defaultCheck1">
                <label style="color: white;" class="form-check-label" for="chkPassport">
                Go to Market Strategy
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="challenge[]" value="4"  id="defaultCheck1">
                <label style="color: white;" class="form-check-label" for="chkPassport">
                Funding
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="challenge[]" value="5"  id="defaultCheck1">
                <label style="color: white;" class="form-check-label" for="chkPassport">
                Social Media and branding
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="challenge[]" value="6"  id="defaultCheck1">
                <label style="color: white;" class="form-check-label" for="chkPassport">
                Finance, Accounts and compliance
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="challenge[]" value="7"  id="chkPassport" onclick="ShowHideDiv(this)">
                <label style="color: white;" class="form-check-label" for="chkPassport">
                Others... Type Your Challenge
                </label>
                </div>
                            @error('challenge')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div style="display: none;" class="form-group" id="dvPassport">
                            <label style="color: white;"><strong>Comment</strong></label>
                            <textarea type="text" row="4" name="comment" class="form-control" placeholder="Enter Comment">
</textarea>
                        </div>
                        <button style="background:#8F4A9F;" type="submit" class="btn btn-main-primary btn-block" >Submit</button>
                    </form>
                </div>
                {{-- <div class="main-signin-footer mt-3 mg-t-5">
                    <p>   @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
                </a>
                @endif</p>
                <!-- <p>Don't have an account? <a href="signup.html">Create an Account</a></p> -->
            </div> --}}
            </>
        </div>
    </div>
</div>
</div>
<!-- /main-signin-wrapper -->


  
<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>


    <!-- js bar start-->
    @include('backEnd.layouts.includes.js')
    <!-- js bar end -->
   
    <script type="text/javascript">
    function ShowHideDiv(chkPassport) {
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = chkPassport.checked ? "block" : "none";
    }
</script>
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }

  </script>
    </body>
    
    </html>