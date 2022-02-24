@foreach($campaignproduct as $campaignproducts)
                        <div class="col-lg-4 mb-60 col-md-6">
                            <div class="event-item">
                                <div class="event-short">
                                  <div class="featured-img">
                                      <img src="https://wepitch.weblooptechnik.in/backEnd/image/productimage/{{$campaignproducts->product_image}}" alt="Image" style="
    height: 360px;
    width: 360px;
">
                                   </div>
                                   <!-- <div class="categorie">
                                       <a href="#">Recipes</a>
                                   </div> -->
                                   <div class="content-part">
                                      
                                 <a href="{{ route('product-detail', ['id' => $campaignproducts] ) }}">      <h4 class="title">{{ $campaignproducts->product_name}}</h4></a>
                                     <!--  <p class="text">
                                          {!!$campaignproducts->amount!!}
                                       </p>-->
                                       <div class="event-btm">
                                        <div class="date-part">
                                            <div class="date">
                                               Rs.{{$campaignproducts->amount}}
                                           </div> 
                                       </div> 
                                       <div class="btn-part">
                                              <a href="{{url('cart', $campaignproducts->id)}}" >Buy Now</a>
                                       </div>
                                       </div>
                                   </div> 
                                </div>
                            </div>
                        </div>   
                        @endforeach