@foreach($covid as $covids)
                        <div class="col-lg-4 mb-60 col-md-6">
                            <div class="event-item">
                                <div class="event-short">
                                   <div class="featured-img">
                                       <img src="{{ url($covids->photo ??'') }}" alt="Image" style="
    height: 360px;
    width: 360px;
">
                                   </div>
                                   <!-- <div class="categorie">
                                       <a href="#">Recipes</a>
                                   </div> -->
                                   <div class="content-part">
                                       <div class="address"><i class="fa fa-map-o"></i> {{ $covids->location }}</div>
                                       <h4 class="title">{{ $covids->warrior_name}}</h4>
                                     <!--  <p class="text">
                                          {!!$covids->areaofexpertise!!}
                                       </p>-->
                                       <div class="event-btm">
                                           <div class="date-part">
                                               <!-- <div class="date">
                                                   <i class="fa fa-calendar-check-o"></i>
                                                   July 24, 2020 
                                               </div> -->
                                           </div>
                                           <div class="btn-part">
                                               <a href="{{ route('warrior-detail', ['id' => $covids->id] ) }}">Read More</a>
                                           </div>
                                       </div>
                                   </div> 
                                </div>
                            </div>
                        </div>   
                        @endforeach