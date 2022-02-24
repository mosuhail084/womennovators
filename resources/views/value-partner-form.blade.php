@extends('frontEnd.layouts.layout') @section('admin_content')

      <div id="page-banner-area" class="page-banner-area" style="background-image:url(globalsummit/images/hero_area/banner_bg.jpg)">
			<!-- Subpage title start -->
			<div class="page-banner-title">
				<div class="text-center">
					<h2>Get Inspired Get Involved</h2>
					
				</div>
			</div><!-- Subpage title end -->
		</div><!-- Page Banner end -->

       <section class="ts-intro-content">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
						<h2 class="section-title text-center become-sponsor">Become our Sponsor</h2>
                  
                          
                   
               </div><!-- col end-->
              
            </div><!-- row end-->
         </div><!-- container end-->
      </section>
       <section class="ts-pricing classic bg-gray">
         <div class="container">
            <div class="row">
                <div class="col-sm-12"><img src="globalsummit/images/price.png" class="img-fluid"></div>
                <div class="col-sm-12"><div class="text-center"><a target="_blank" href="http://womennovators.com/Womennovator_Sponsorship_Deck.pdf" class="btn">Sponsorship Deck</a></div></div>
             </div>
           </div>
       </section>
        
       <section class="ts-contact-form">
         <div class="container">
            <div class="row" >
                @if(session()->has('success'))
                <div class="alert alert-success" style="    text-align: center;  display: block;margin: 0 auto;  margin-bottom: 20px;    width: 70%;">
                @if(is_array(session()->get('success')))
                @foreach (session()->get('success') as $message)
                <p>{{ $message }}</p>
                @endforeach
                @else
                <p>{{ session()->get('success') }}</p>
                @endif
                </div>
                @endif
               <div class="col-lg-10 mx-auto">
                  <h2 class="section-title text-center">
                     Apply For Partnership
                  </h2>
               </div><!-- col end-->
            </div>
            <div class="row">
               <div class="col-lg-10 mx-auto">
                  <form id="contact-form" class="contact-form" action="{{url('sponser/add')}}" method="post">
                      @csrf
                     <div class="error-container"></div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                               <label>1. Name of the Organisation/Firm :</label>
                              <input class="form-control form-control-name" placeholder="Organisation" name="name_of_org" id="f-name"
                                 type="text" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label>2. Email:</label>
                              <input class="form-control form-control-name" placeholder="Email" name="email" id="l-name"
                                 type="email" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label>3. Name of the Concerned Person:</label>
                              <input type="text" class="form-control form-control-subject" placeholder="" name="concerned_person" id="subject"
                                 required>
                           </div>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>2. Email of the Concerned Person:</label>
                              <input class="form-control form-control-name" placeholder="Email" name="email_concern_person" id="l-name"
                                 type="email" required>
                           </div>
                        </div>
                       
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>4. Contact No:</label>
                              <input class="form-control " placeholder="" name="contact_no" id="city"
                                 type="text" required>
                           </div>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>5. Alternative contact details</label>
                              <input class="form-control " placeholder="" name="aternative_contact" id="city"
                                 type="text" required>
                           </div>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>6. Country:</label>
                               <select class="form-control" id="category" name="country"
           > <option value="">Please Select One
            </option>

            @foreach($country as $stateData)
            <option value="{{$stateData->id}}" @if(!empty($listing->
                state_id) && $listing->
                state_id==$stateData->id) selected @endif>
                {{ $stateData->name }}</option>
            @endforeach
        </select>
                              
                           </div>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>7. State:</label>
                              <select class="form-control" id="subcategory_id" name="state">
                                 </select>
                           </div>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>8. City:</label>
                              <input class="form-control " placeholder="" name="city" id="city"
                                 type="text" required>
                              
                           </div>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>9. Your Social Media links :</label>
                              <input class="form-control " placeholder="Facebook" name="facebook" id=""
                                 type="text" required>
                           </div>
                        </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                <input class="form-control " placeholder="twitter" name="twitter" id=""
                                 type="text" required>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                             <input class="form-control " placeholder="instagram" name="instagram" id=""
                                 type="text" required>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                             <input class="form-control " placeholder="Linkedin" name="linkedin" id=""
                                 type="text" required>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                             <input class="form-control " placeholder="website" name="website" id=""
                                 type="text" required>
                             </div>
                         </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>10. Where did you get reference from?</label>
                              <select class="form-control " name="reffrence_from">
                               <option>----</option>
                               <option>Influencer</option>
                               <option>Social Media</option>
                               <option>Website</option>
                               <option>Friends/Family</option>
                               <option>Others</option>
                               </select>
                              
                           </div>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>11. Field of Work:</label>
                             <input class="form-control " placeholder="" name="work_field" id=""
                                 type="text" required>
                             </div>
                        </div>
                         <div class="col-md-12">
                           <div class="form-group">
                               <label>12. How you would be able to add value to the initiative (Deliverables) ?</label>
                             <input class="form-control "  name="deliverables" id=""
                                 type="text" required>
                             </div>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>13. Any criteria to work with us:</label>
                             <input class="form-control "  name="criteria" id=""
                                 type="text" required>
                             </div>
                        </div>
                         <div class="col-md-6">
                           <div class="form-group">
                               <label>14. Expectations from us</label>
                             <input class="form-control "  name="expectations" id=""
                                 type="text" required>
                             </div>
                        </div>
                         <div class="col-md-12">
                           <div class="form-group">
                               <label>15. What kind of partnership are you looking for (ex. Mentorship,Sponsorship, media or gift/food)</label>
                             <select class="form-control " multiple name="kind_of_partnership">
                               <option>-----</option>
                               <option>SPONSOR</option>
                               <option>VENUE SUPPORT</option>
                               <option>GIFT PARTNER</option>
                               <option>MEDIA & PR PARTNER</option>
                               <option>OUTREACH PARTNER</option>
                               <option>DIGITAL MARKETING PARTNER</option>
                               <option>INNOVATION PARTNER</option>
                               </select>
                        </div>

                     </div>
                         <div class="col-md-12">
                           <div class="form-group">
                               <label>16. Upload Your Logo :</label>
                               <div class="clearfixed"></div>
                             <input type="file" name="logo">
                        </div>

                     </div>
                         <div class="col-md-12">
                           <div class="form-group">
                               
                             <input type="checkbox" required>
                               I hereby declare the information provided by me is correct to the best of my knowledge and I am aware that in case of any wrong and incorrect information my application is liable to be rejected.
                        </div>

                     </div>
                         <div class="text-center"><br>
                        <button class="btn" type="submit"> Save </button>
                     </div>
                      </div>
                     
                  </form><!-- Contact form end -->
               </div>
            </div>
         </div>
         <div class="speaker-shap">
            <img class="shap1" src="globalsummit/images/shap/home_schedule_memphis2.png" alt="">
         </div>
		</section>
       
    




    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(function(){
       $('#category').on('change',function(){
           var category_id =$(this).val();

        $.ajax({
            type: "GET",
            url: "{{ url('sponsorship-form') }}",
            data: "category_id="+category_id,
            success : function(res){
            
                $('#subcategory_id').html(res);

                
            },
            error : function(){

            },
        });
       });
       
    }); 
  
     
    </script>
   @endsection