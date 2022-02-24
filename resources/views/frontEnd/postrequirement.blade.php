
@extends('frontEnd.layout.layout')
@section('frontend_content')
<!-- Main content Start -->
<div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ url('/frontEnd/images/breadcrumbs/6.jpg')}}" alt="Breadcrumbs Image">
                </div>
            </div>
            <!-- Breadcrumbs End -->            

    		<!-- Contact Section Start -->
    		<div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
            	<div class="container">
            	
            		<div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
            			<!-- <div class="col-lg-5 md-mb-30">
            				<div class="contact-map2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d224283.94511989574!2d76.98473110021429!3d28.55664822573662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x390d19d582e38859%3A0x2cf5fe8e5c64b1e!2sGurugram%2C%20Haryana!3m2!1d28.4594965!2d77.0266383!4m5!1s0x390cfd2718af1fa1%3A0xd6c65ab823f35951!2skgs%20advisors!3m2!1d28.6411111!2d77.2380275!5e0!3m2!1sen!2sin!4v1624147604118!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
            			</div> -->
            			<div class="col-lg-12 pl-30 lg-pl-15">
			        	    <div class="rs-quick-contact new-style">
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
                                
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h2 class="title mb-15">Post Your Requirement</h2>
                                    <p>Just complete these simple steps. Get Instant quotes from Verified Suppliers</p>
                                </div>
                                <form method="post" action="{{ url('/postrequirement/store')}}" enctype="multipart/form-data">
                                @csrf
                            <div>
                                    <ul>
                                        @foreach ($errors->all() as $e)
                                        <li style="color:red;">{{$e}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-35 col-md-12">
                                            <input class="from-control" type="text"  name="lookingfor" placeholder="Products/Services you are looking for" required="">
                                            @error('lookingfor')
                                               <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror
                                        </div> 
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text" name="quantity" placeholder="Estimated Order Quantity" required="">
                                            @error('quantity')
                                                <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                                </span>
                                             @enderror
                                        </div>   
                                        <div class="col-lg-6 mb-35 col-md-12">
                                          <select class="form-control" name="piece" style="height: 45px;" required="">
                                                <option value="">Select a value</option>
		
                                                <option value="Bag(s)">Bag(s)</option>		
                                                        
                                                <option value="Carton">Carton</option>		
                                                        
                                                <option value="Dozen">Dozen</option>		
                                                        
                                                <option value="Feet">Feet</option>		
                                                        
                                                <option value="Kilogram/Kg">Kilogram/Kg</option>		
                                                        
                                                <option value="Meter(s)">Meter(s)</option>		
                                                        
                                                <option value="Metric Ton">Metric Ton</option>		
                                                        
                                                <option value="Piece(s)/Pcs">Piece(s)/Pcs</option>		
                                                        
                                             </select>
                                        </div>   
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text"  name="name" placeholder="Name" required="">
                                            @error('name')
                                              <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                              </span>
                                             @enderror
                                        </div>
                                     
                                        <div class="col-lg-6 mb-50">
                                            <input class="from-control" type="text"  name="phone" placeholder=" Mobile Number" required="">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                            </span>
                                           @enderror
                                        </div>
                                        <div class="col-lg-12 mb-50">
                                            <input class="from-control" type="text"  name="email" placeholder=" Email ID" required="">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                            </span>
                                           @enderror
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input class="btn-send" type="submit" value="Submit Now">
                                    </div>       
                                </form>
                            </div>
                        </div> 
            		</div>
            	</div>
            </div>
            <!-- Contact Section End --> 
</div> 
        <!-- Main content End -->             
@endsection