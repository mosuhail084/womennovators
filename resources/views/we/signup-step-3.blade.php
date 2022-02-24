@extends('we.layouts.layout') @section('front_content')
	

<section class="section">
                <div class="container">
                    <div class="row">
                        <div class="alert alert-yellow alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    We’ve sent you a verification mail on {{{$data2['email']}}}. Kindly click on the link and verify your email address.
  </div>
                        <div class="col-sm-6 to_animate" data-animation="fadeInUp">
                            
                        </div>
                        <div class="col-sm-6 to_animate" data-animation="fadeInRight">
                            <div class="login-section signup-steps">
                                <div class="signup-step-heading">
                                    <h2>Last step {{{$data2['name']}}},</h2>
									<p>You can complete it later </p><a href="https://womennovators.com/">Skip Now</a>
                                </div>
                                <form class="login-form" method="post" action="{{route('signupstep3')}}">
                                  @csrf
                                  <input type="hidden" name="email" value="{{{$data2['email']}}}">
                                    <div class="form-group">
                                        <label>Name of your current company?</label>
                                        <input type="text" name="companyname" value="{{old('companyname')}}" placeholder="Eg: Facebook" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Your current designation?</label>
                                        <input type="text" name="designation" value="{{old('designation')}}" placeholder="Eg: Product Manager" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Years of experience?</label>                                        
                                        <div class="quantity quantity-input ">
                                      <input type="number" name="experience" value="{{old('experience')}}" class="form-control input-no" min="1" max="60" step="1" value="1">
                                    </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label>What is your highest qualification?</label>
                                        <select class="select-icon">
                                            <option name="highestqualification" value="{{old('highestqualification')}}">Primary School</option>
                                            <option name="highestqualification" value="{{old('highestqualification')}}">Higher School </option>
                                            <option name="highestqualification" value="{{old('highestqualification')}}">Vocational qualification</option>
                                            <option name="highestqualification" value="{{old('highestqualification')}}">Bachelor's degree</option>
                                            <option name="highestqualification" value="{{old('highestqualification')}}">Master's degree</option>
                                            <option name="highestqualification" value="{{old('highestqualification')}}">Doctorate or higher</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Which industry do you belong to?</label>                                        
                                        <select name="industrytype"class="select-icon">
                                          @foreach ($sectors as $sector)
                                            <option name="industrytype" value="{{old('industrytype')}}">{{$sector->sectorname}}</option>
                                            <!-- <option name="industrytype" value="{{old('industrytype')}}">industry 1</option>
                                            <option name="industrytype" value="{{old('industrytype')}}">industry 2</option>
                                            <option name="industrytype" value="{{old('industrytype')}}">industry 3</option> -->
                                          @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Social media link?</label>
                                        <input type="text" name="facebook" value="{{old('facebook')}}" placeholder="Eg: Linked, Facebook, Instagram, Pintrest etc" class="form-control" onkeyup="socialMediaVal()" required>
                                        <ul id="socialMediaV">
                                          <li style="font-size: 0.8em;">URL must be like https://www.facebook.com/user-name or www.facebook.com/user-name.</li>
                                        </ul>
                                    </div>
                                    <div class="form-group" >
                                        <label>I am here to</label>
                                        <div class="gender-box">
                                            <div class="gender-iner">
                                            <input type="radio" value="givesupport" name="hereto">Give Support</div>
                                            <div class="gender-iner">
                                            <input type="radio" value="seeksupport" name="hereto">Seek Support</div> 
                                        </div>
                                    </div> 
                                    <div class="form-group" style="display:flex; align-items: center;">
                                      <input type="checkbox" id="tnc" name="tnc" onclick="TnC()">
                                      <label for="tnc" style="margin-top: 15px; margin-left: 10px; font-size: 15px;">Terms and conditions</label>
                                      <a href="{{url('we/termsandcondition')}}" style="margin-top: 15px; margin-left: 10px;">Read T&C</a>
                                    </div>
                                    <div class="form-group">
                                        <div class="login">
                                        <button type="submit" class="login-btn" data-toggle='tooltip'>Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</section>


<script>
    // Diables submit button if T&C is not checked
    TnC();
    function TnC(){
      var tnc = document.getElementById('tnc');
      var submit = document.querySelector(".login-btn");
      if(!tnc.checked){
        submit.disabled = true;
        submit.setAttribute('data-original-title','Please accept T&C!');
      }
      else{
        submit.disabled = false;
        submit.removeAttribute('data-original-title');
      }
    }
  </script>            
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
