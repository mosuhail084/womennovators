@extends('frontEnd.layouts.layout') @section('frontEnd_content')
<!-- Main content Start -->
<div class="main-content">
     
                 <div id="slider">
					  <figure>
						    <img src="{{ url('frontEnd/assets/images/mask.jpeg')}} " >
						    <img src="{{ url('frontEnd/assets/images/masks.jpeg')}}" >
						    <img src="{{ url('frontEnd/assets/images/mask2.jpeg')}}" >
					  </figure>
				</div>
        
        <!-- Choose Section Start -->
        <div style="display:flex; box-shadow: 0 0 30px #eee; background:#ffffff; padding:15px 30px 20px 30px;">
                <div class="container">
                   <div class="row align-items-center">
                         <div class="col-lg-12 js-tilt">
                           <h2 style="text-align:center; margin-top:20px;">MaskUpIndia</h2>
                            <h4 style="text-align:center; color:#0c8b51">Only way to Stop Covid 3.0</h4>
                         </div>
                         <div style="">
                         <p style="font-size:20px;">
                           
                         India was in the grips of the second Covid-19 wave <b>(Covid 2.0)</b>, which peaked in mid-May and is expected to climb down by early July. 
                         </p>
                         <p style="font-size:20px;">
                         India's brutal second wave of Covid-19 has revealed some harsh truths about our healthcare system. Many communities like the <b><a href="https://www.covidcaregiver.org/">CovidCareGivers</a> rose to the challenge of optimizing the limited resources available locally and ensuring timely delivery to patients.</b> However, the Covid 2.0 catastrophes have left many of us scarred and grieving.
                         </p>
                         
                    
                         <p style="font-size:20px;">
                         India has only fully vaccinated about a mere <b><u><a href="https://dashboard.cowin.gov.in/">4% of its population</a></u></b>.MaskUpIndia is a proactive and preventive initiative of the <b><u><a href="https://www.covidcaregiver.org/">CovidCareGivers</a> </u> at <u><a href="https://www.womennovator.co.in/">Womennonator</a></b></u> to sensitize the people of India to prevent the onset of the third wave; to reduce transmission as much as possible, and to not repeat history. Irrespective of whether we will or not we will experience the next wave, it's better to prevent ourselves from getting there ever again. 
                         </p>
                         </div>
                         <div class="col-lg-12 js-tilt" style="text-align:center;">
                         <h3 style="color:#0c8b51">Mask is your First line of Defense to fight Covid 3.0</h3>
                          <h3 style="color:#0c8b51">Mask is a Powerful weapon to fight the Pandemic
                         </h3>
                         <h2 style="color:#ff5421">#MaskUpIndia  </h2>
                         <div class="text-center " style="text-align:center; font-size:18px;"><b>Upload Your Photo</b>
                         <br/>
                          <br/>
                          
                         <a href="{{ url('/maskindia/photo')}}" style="background:#21a7d0; color:#ffffff; padding:15px 5px; border-radius:5px 5px 5px 5px; " >Upload Now</a>

                         </div>
                         </div>
                         
                         
                   </div> 
                   
                </div>
            </div>
            <!-- Choose Section End -->
                        


</div> 
        <!-- Main content End -->
@endsection