
	
	@extends('we.layouts.layout') @section('front_content')
	<style>	
	.blog-list-box-iner p {
    font-family: 'Poppins', sans-serif!important;
    font-size: 14px!important;
    }
</style>
	
    <div class="">
        <div class="container">
            <div class="community-banner community-banner3">
            <div class="row">
                <div class="col-sm-9">
                
                <div class="community-ban-cintent we-support-banner">
                    
                    <div class="female-user-content">
                        <h2>Blogs</h2>
                        <ul class="communi-list">
                            <li>Latest news from Womennovator</li>
                        </ul>
                        <div class="search-ban">
                            <input type="search" placeholder="Search"><i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                    </div>
                    </div>
                    
                </div>
                <!--<div class="col-sm-3">
                    <a href="#" class="join-btn">Join this community</a>
                    <div class="lead-by">
                    <p>Led by </p>
                        <div class="team-user">
                            <a class="team-img" href="#"><img src="./images/user.jpg"></a>
                            <div class="team-user-title">
                                <h5>Silviya Plath</h5>
                                <span class="sub-dis">CEO, StartupPath</span>
                            </div>                                                
                        </div>
                    
                    </div>
                </div>-->
            </div>
        </div>
        
        </div>
    </div>
        
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="in-the-press">
                        <h2>Latest Blog </h2>
                        <div class="sidebar_content">
                       
   
                    </div>
                        <ul> 
                            @foreach ($blog as $item)
                            <li>
                             
                                
                            <span>{{ date('M d,Y', strtotime($item->created_at ??''))}}  </span>
                          
                            <a href="{{url('blog/'.$item->id)}}"><h4>{{$item['name']}}</h4></a> 
                            </li>
                        @endforeach   
                        </ul>
                    </div>
                </div>
            </div>
        </div>
              
            </div>
        </div>
    </section>
    
    
  <!--  <section class="section get-the-letest">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">                            
                    <p>Get the latest resources, reminders and alerts from us. Sign up to our newsletter!</p>
                    <div class="mail-submit">
                        <input placeholder="Please add your email id here."><button class="btn-submit">Submit</button>
                    </div>
                </div>
                <div class="col-sm-12">
                   
                </div>
            </div>
            
        </div>
    </section>-->
                        
			@endsection
		
		<!-- eof #box_wrapper -->
	<!--</div>-->
	<!-- eof #canvas -->
