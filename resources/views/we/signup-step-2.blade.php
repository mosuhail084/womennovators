@extends('we.layouts.layout') @section('front_content')
	

<section class="section">
                <div class="container">
                    <div class="row">
                        <div class="alert alert-yellow alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    We’ve sent you a verification mail on {{{$data['email']}}}. Kindly click on the link and verify your email address.
  </div>
                        <div class="col-sm-6 to_animate" data-animation="fadeInUp">
                        
                        </div>
                        <div class="col-sm-6 to_animate" data-animation="fadeInRight">
                            <div class="login-section signup-steps">
                                <div class="signup-step-heading">
                                    <h2>Hi {{{$data['name']}}},</h2>
                                    <p>Complete the signup to list yourself on Womennovator</p>
                                </div>
                                <form class="login-form" method="post" action="{{route('insertsignup')}}">
                                  @csrf
                                  <input type="hidden" name="name" value="{{{$data['name']}}}">
                                  <input type="hidden" name="email" value="{{{$data['email']}}}">
                                  
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" name="mobile" value="{{old('mobile')}}" placeholder="+91 99999 99999" pattern="\d*" maxlength="10" class="form-control" required>
                                    </div>
                                    <div class="form-group" >
                                        <label>Gender</label>
                                        <div class="gender-box">
                                            <div class="gender-iner">
                                            <input type="radio" name="gender"  value="{{old('gender')}}"> Male
                                                </div>
                                            <div class="gender-iner">
                                            <input type="radio" name="gender" value="{{old('gender')}}"> Female
                                            </div>
                                            <div class="gender-iner">
                                            <input type="radio" name="gender" value="{{old('gender')}}"> Others
                                        </div>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label>Which country are you based out of?*</label>
                                        <select name ="country"  value="{{old('country')}}" class="select-icon">
                                            @foreach ($countries as $country)
                                            <option value = "{{$country->country_name}}" >{{$country->country_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Which city are you based out of?*</label>                                        
                                         <input type="text" name="city"  value="{{old('city')}}" placeholder="Eg: Lucknow" class="form-control" required> 
                                        <!-- <select class="select-icon">
                                            @foreach ($cities as $city)
                                            <option>{{$city->name}}</option>
                                            @endforeach
                                        </select> -->
                                    </div>
                                    <div class="form-group">
                                        <div class="login">
                                        <button type="submit" class="login-btn">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			<script>$(document).ready(function () {
  jQuery('<div class="quantity-nav"><button class="quantity-button quantity-up"><i class="fa fa-angle-up" aria-hidden="true"></i></button><button class="quantity-button quantity-down"><i class="fa fa-angle-down" aria-hidden="true"></i></button></div>').insertAfter('.quantity input');
  jQuery('.quantity').each(function () {
    var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

    btnUp.click(function () {
      var oldValue = parseFloat(input.val());
      if (oldValue >= max) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue + 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

    btnDown.click(function () {
      var oldValue = parseFloat(input.val());
      if (oldValue <= min) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue - 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

  });
});</script>

 
			@endsection
         
           
		<!-- eof #box_wrapper -->
	<!--</div>-->
	<!-- eof #canvas -->
