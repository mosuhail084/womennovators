@extends('frontEnd.layout.layout') @section('frontend_content')
	<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{url('/frontEnd/images/breadcrumbs/2.jpg')}}" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text">
                    <h1 class="page-title">Search among wide variety of products</h1>
                    <ul>
                      <!--  <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Course</li>-->
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

          
            <!-- Popular Courses Section Start -->
            <div id="rs-popular-courses" class="rs-popular-courses bg6 style1 pt-94 pb-70 md-pt-64 md-pb-40">
                <div class="container">
                    <div class="row y-middle mb-50 md-mb-30">
                        <div class="col-md-6 sm-mb-30">
                            <div class="sec-title">
                                <div class="sub-title primary">Our Products</div>
                              <!--  <h2 class="title mb-0"> Products</h2>-->
                            </div>
                        </div>
                      
                    </div>
                    <div class="form-group">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search Product..." />
                      </div>
                      <br>
                    <div class="row"  id="row">
                            </div>
                </div>
            </div>
          
        </div> 
        <!-- Main content End --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <script>
            $(document).ready(function(){
             function fetch_products(query='')
             {
              $.ajax({
               type:"GET",
              
               url: "/products/action"+"?query="+query,
               success:function(data)
               {
                 //  alert(data);
                $('#row').html(data);
               }
              });
             }
             fetch_products();
             $(document).on('keyup', '#search', function(){
              var query = $(search).val();
              fetch_products(query);
             });
             
            });
            </script>

@endsection