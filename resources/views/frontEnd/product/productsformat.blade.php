@foreach ($prod as $items)
                            
                   
<div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
    <div class="courses-item">
        <div class="img-part">
            <img src="{{ url('/backEnd/image/productimage/'.$items->productimage )}}" style="height:300px; width:500px;" alt="">
        </div>
        <div class="content-part">
            <ul class="meta-part">
               
                <li><a class="categorie" href="#">{{$items->categoryname}}</a></li>
            </ul>
            <h3 class="title"><a href="{{url('/product/'.$items->id)}}">{{$items->productname}}</a></h3>
            <div class="bottom-part">
            
                <div class="btn-part">
                    <a href="{{url('/product/'.$items->id)}}"><i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach