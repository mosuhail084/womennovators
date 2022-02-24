Dear Sir/Madam
<br><br>
<h3>you have a new Reseller request </h3>
<p>Name :{{ $name ??'' }}</p>
<p>Email :{{ $email ??'' }}</p>
<p>Phone :{{ $phone ??'' }}</p>
<p>Phone :{{ $country ??'' }}</p>
<p>State:{{ $state ??''}}</p>
<p>City:{{ $city ??''}}</p>
<p>Address:{{ $address ??''}}</p>
<p>Pincode:{{ $pincode ??''}}</p>
<p>Age:{{ $age ??''}}</p>
<p>I am a ?:{{ $am ??''}}</p>
<p>Please write the profession:{{ $professional ??''}}</p>
<p>Name of your Business:{{ $business ??''}}</p>
<p>name of the Institution :{{ $student ??''}}</p>
<p>How did you hear about us?:{{ $hear ??''}}</p>
<p>Please write the name:{{ $influencer ??''}}</p>
<p>FB, Insta ??:{{ $online ??''}}</p>
<p>Please write the name:{{ $family ??''}}</p>
<p>Why are you interested in earn from home oppurtunity?:{{ $earn ??''}}</p>
<p>Comment:{{ $comment ??''}}</p>
<p>How efficient are you in using Whatsapp, FB, Insta ?:{{ $social ??''}}</p>
<p>Do you have a bank account on your name?:{{ $account ??''}}</p>
<p>Type:{{ $type ??''}}</p>
<p>I have a:
@foreach($hv as $have)
    @if($have->have_id == 1 )
    <span>Pan Card</span>
    @elseif($have->have_id == 2 )
    <span>Adhar Card</span>
    @elseif($have->have_id == 3 )
    <span>License</span>
    @elseif($have->have_id == 4 )
    <span>Voters card</span>
    @elseif($have->have_id == 5 )
    <span>Passport</span>
    @endif
    @endforeach</p>
<p>City you will sell the product in:{{ $sell ??''}}</p>
<p>Products you are Interested in Reselling:
@foreach($prod as $product)
    @if($product->product_id == 1 )
    <span>Appliances</span>
    @elseif($product->product_id == 2 )
    <span>Baby</span>
    @elseif($product->product_id == 3 )
    <span>Beauty</span>
    @elseif($product->product_id == 4 )
    <span>Books</span>
    @elseif($product->product_id == 5 )
    <span>Clothing & Accessories</span>
    @elseif($product->product_id == 6 )
    <span>Collectibles</span>
    @elseif($product->product_id == 7 )
    <span>Computer & Accessories</span>
    @elseif($product->product_id == 8 )
    <span>Electronics</span>
    @elseif($product->product_id == 9 )
    <span>Furniture</span>
    @elseif($product->product_id == 10 )
    <span>Garden & Outdoors</span>
    @elseif($product->product_id == 11 )
    <span>Grocery & Gourmet Foods</span>
    @elseif($product->product_id == 12 )
    <span>Health & Personal Care</span>
    @elseif($product->product_id == 13 )
    <span>Home & Kitchen</span>
    @elseif($product->product_id == 14 )
    <span>Jewellery</span>
    @elseif($product->product_id == 15 )
    <span>Kindle Store</span>
    @elseif($product->product_id == 16 )
    <span>Luggage & Bags</span>
    @elseif($product->product_id == 17 )
    <span>Luxury Beauty</span>
    @elseif($product->product_id == 18 )
    <span>Musical Instruments</span>
    @elseif($product->product_id == 19 )
    <span>Office Products</span>
    @elseif($product->product_id == 20 )
    <span>Pet Supplies</span>
    @elseif($product->product_id == 21 )
    <span>Shoes & Handbags</span>
    @elseif($product->product_id == 22 )
    <span>Software</span>
    @elseif($product->product_id == 23 )
    <span>Sports, Fitness,& Outdoors</span>
    @elseif($product->product_id == 24 )
    <span>Toys & Games</span>
    @endif
    @endforeach</p>
</p>
<p>Any past experience in Reselling:{{ $experience ??''}}</p>
<p>Medium through which you plan to resell:{{ $medium ??''}}</p>
<p>Why do you think these products you will be able to sell in your area/ city?t:{{ $think ??''}}</p>
<p>Any Suggestions?:{{ $suggestions ??''}}</p>
