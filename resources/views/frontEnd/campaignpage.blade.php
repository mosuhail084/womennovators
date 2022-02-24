@extends('frontEnd.layouts.layout') @section('frontEnd_content')
<!-- Main content Start -->
<div class="main-content">
      <!-- Breadcrumbs Start -->
      <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ url('frontEnd/assets/images/banner.jpeg')}}" alt="Breadcrumbs Image">
                </div>
                <!-- <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Events</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Educavo</a>
                        </li>
                        <li>Events</li>
                    </ul>
                </div> -->
            </div>
            <!-- Breadcrumbs End --> 
		    <!-- Events Section Start -->
            <div class="rs-event orange-color pt-100 pb-100 md-pt-70 md-pb-70 bg3">
            <h2 style="text-align:center;">Campaign Page</h2>
                <div class="container">
                    <div class="row">
                    @foreach($campaignpage as $campaignpageData)
                        <div class="col-lg-4 mb-60 col-md-6">
                            <div class="event-item">
                                <div class="event-short">
                                   <div class="featured-img">
                                       <img src="{{ $campaignpageData->banner ??''}}" alt="Image" style="height:250px;">
                                   </div>
                                   
                                   <div class="content-part">
                                       
                                       <h4 class="title"><a href="{{ url('care', ['campaign_name' => $campaignpageData->campaign_name] ) }}">{{$campaignpageData->campaign_name}}</a></h4>
                                       
                                       <div class="event-btm">
                                           <div class="date-part">
                                               
                                           </div>
                                           <div class="btn-part">
                                               <a href="{{ url('care', ['campaign_name' => $campaignpageData->campaign_name] ) }}">Read More</a>
                                           </div>
                                       </div>
                                   </div> 
                                </div>
                            </div>
                        </div>   
                        @endforeach

                    </div>
                </div> 
            </div>
            <!-- Events Section End --> 
</div> 
         <!-- Main content End --> 
@endsection