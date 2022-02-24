@extends('frontEnd.layouts.layout') @section('frontEnd_content')
<!-- Main content Start -->
<div class="main-content">
    		<!-- Cart Section Start -->
            
            <div class="rs-cart orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="cart-wrap">
                        <form>
                            <table class="cart-table">
                                <thead>
                                    <tr>
                                        <th class="product-remove"></th>
                                        <th class="product-thumbnail">Image</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                      <!--  <th class="product-quantity">Shipping Charges</th>-->
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $total = 0; $ship_charge = 0;@endphp
                                    @if(session('cart'))
                                        @foreach(session('cart') as $id => $product)
                                            @php
                                                $sub_total = $product['amount'] * $product['quantity'];
                                                $total += $sub_total;
                                               // $ship_charge+=100;
                                            @endphp
                                    <tr>
                                        <td class="product-remove"><a href="{{route('remove', [$id])}}"><i class="fa fa-close"></i></a></td>
                                        <td class="product-thumbnail"><a href="#"><img src="https://wepitch.weblooptechnik.in/backEnd/image/productimage/{{$product['product_image']}}" alt=""></a></td>
                                        <td class="product-name"><a href="#">{{$product['product_name']}}</a></td>
                                        <td class="product-price"><span>Rs</span>{{$product['amount']}}</td>
                                        <td class="product-quantity">
                                            <form action="{{route('change_qty', $id)}}" >
                                              <!--  <button
                                                    type="submit"
                                                    value="down"
                                                    name="change_to"
                                                    class="btn-shop orange-color"
                                                >
                                                    @if($product['quantity'] === 1) x @else - @endif
                                                </button>-->
                                                <input
                                                    type="text" class="input-text"
                                                    value="{{$product['quantity']}}"
                                                    disabled>
                                              <!--  <button
                                                    type="submit"
                                                    value="up"
                                                    name="change_to"
                                                    class="btn-shop green-color"
                                                >
                                                    +
                                                </button>-->
                                            </form>
                                        </td>
                                       <!-- <td class="product-price"><span>Rs</span>100</td>-->
                                        <td class="product-price"><span class="amount"><span class="symbol">Rs</span> {{$sub_total}}</span></td>
                                    </tr>
                                  
                                    
                                         @endforeach
                                        @endif
                                        <tr>
                                            <td colspan="6" class="action text-right">
                                               <!-- <div class="coupon">
                                                    <input type="text" name="text" placeholder="Coupon code" required="">
                                                    <button type="submit" class="btn-shop apply-btn orange-color">apply coupon</button>
                                                </div>-->
                                                
                                                <div class="update-cart">
                                                    <a href="{{url('/care/kajal-pathak')}}" class="btn-shop orange-color">Add More</a>
                                                </div>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </form>
                        <div class="cart-collaterals pt-70 md-pt-50">
                            <div class="cart-totals">
                                <h5 class="title mb-25">Cart totals</h5>
                                <table class="cart-total-table">
                                    <tbody>
                                        
                                        <tr class="cart-subtotal">
                                            <th>Sub Total</th>
                                            <td><span class="amount"><span>RS </span>{{$total}}</span></td>
                                        </tr>
                                        <tr class="cart-subtotal">
                                            <th>Shipping Charges</th>
                                            <td><span class="amount"><span>RS </span>100</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td><strong><span class="amount"><span>Rs</span> {{$total+100}}</span></strong></td>
                                       @php
                                       //  request()->session()->put('carttotal', $total);
                                       //     $otpm = request()->session()->get('carttotal');
                                        // dd($otpm );
                                       @endphp
                                        </tr>
                                    </tbody>
                                </table>
                                <form action="{{url('form/cart')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="amount" value="{{$total+100}}">
                              
                                <div class="wc-proceed-to-checkout">
                                    <button class="btn-shop orange-color"> Proceed to checkout</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cart Section End --> 
        </div> 
            <!-- Main content End --> 
@endsection