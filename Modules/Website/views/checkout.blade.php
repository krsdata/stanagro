<style>
.page-header .container{padding-top:60px!important;padding-bottom:60px!important;}
.cart-grand-total span{color:#49a760}
.estimate-ship-tax table,.cart-shopping-total table{border:1px solid #dee2e6}
.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float: left;
}
.shopping-cart {
    background-color: #fff;
    box-shadow: 0 2px 4px 0 rgb(0 0 0 / 8%);
    padding: 20px;
    overflow: hidden;
    margin-top:20px;
}
@media (min-width: 1200px)
{
.checkout-page{ 
    width: 1170px;
    margin:0 auto;
    padding-left:15px;padding-right:15px;
}
}
</style>


@extends('website::layouts.master')
    @section('title', 'HOME')
        @section('header')
        <h1>Home</h1>
        @stop
        @section('content') 
            @include('website::partials.menu')
              @include('website::partials.breadcrumb')
            <!-- Left side column. contains the logo and sidebar -->
            <div class="checkout-page" style="margin-top: 100px; margin-bottom: 100px; border: 4px solid #49A760;">
                <div style="padding:15px">
                   <b> Order Summary: </b>
                </div>
                <div class="shopping-cart">
                    <div class="shopping-cart-table ">
                        <div class="table-responsive">
                         @if(count($cart))
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-romove item">Remove Product</th>
                                        <th class="cart-description item">Product Image</th>
                                        <th class="cart-product-name item">Product Name</th>
                                        <th class="cart-edit item">Price</th>
                                        <th class="cart-qty item">Quantity</th>
                                        <th class="cart-sub-total item">Subtotal</th> 
                                    </tr>
                                </thead><!-- /thead -->
                               <!--  <tfoot>
                                    <tr>
                                        <td colspan="7">
                                            <div class="shopping-cart-btn">
                                                <span class="">
                                                    <a href="{{url('/')}}" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
                                                    <a href="index.htm#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a>
                                                </span>
                                            </div><!-- /.shopping-cart-btn -->
                                        </td>
                                    </tr>
                                </tfoot>  
                                 <tbody>
                                @foreach($cart as  $item)
                                <tr>
                                    <td class="cart_delete">
                                      <a class="cart_quantity_delete" href="{{ url('removeItem/'.$item->id) }}"><i class="fa fa-times"></i>
                                      </a>
                                   
                                    </td>
                                    <td class=" cart-description item">
                                    @foreach($product_photo as $key => $photo)
                                    
                                        @if($photo['id']==$item->id)
                                         <img style="width: 100px;height: 100px;" src="{{ asset('storage/uploads/products/'. $photo['photo']) }}" alt="">
                                         @endif
                                     @endforeach
                                    </td>

                                    <td class="cart_description">
                                        <h4><a href="">{{$item->name}}</a></h4>
                                    </td>
                                    <td class="cart_price">
                                        <p>Rs {{$item->price}}</p>
                                    </td>
                                    <td class="cart_quantity">
                                        <div class="cart_quantity_button">
                                            <a class="cart_quantity_up" href="{{ url('updateCart?product_id='.$item->id.'&increment=1')}}"> + </a>
                                            <input class="cart_quantity_input" type="text" name="quantity" value="{{$item->qty}}" autocomplete="off" size="2">
                                            <a class="cart_quantity_down" href="{{ url('updateCart?product_id='.$item->id.'&decrease=1')}}"> - </a>
                                        </div>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price">Rs {{ number_format($item->subtotal,2) }}</p>
                                    </td>  
                                </tr> 
                                @endforeach
                                @else
                            <p>You have no items in the shopping cart</p>
                            @endif
                            </tbody>
                            </table><!-- /table -->
                        </div>
                        <hr>
                    </div><!-- /.shopping-cart-table -->                
                    <div class="col-md-4 col-sm-12 estimate-ship-tax" style="visibility:hidden;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="estimate-title">Continue Shopping </span>
                                        <p>Do you want to buy more...</p>
                                    </th>
                                       <tr>
                                    <td>
                                        <a href="{{url('/')}}" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
                                    </td>
                                </tr>
                                </tr>
                            </thead><!-- /thead -->
                            
                        </table>
                    </div><!-- /.estimate-ship-tax -->

                    <div class="col-md-4 col-sm-12 estimate-ship-tax">

                        
                    </div><!-- /.estimate-ship-tax -->

                    <div class="col-md-4 col-sm-12 cart-shopping-total" style="float:right;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="cart-sub-total">
                                            <span class="inner-left-md">Subtotal ₹ {{$sub_total}} </span>
                                        </div>
                                        <div class="cart-grand-total">
                                            <span class="inner-left-md">Total ₹ {{$sub_total}} </span>
                                        </div>
                                    </th>
                                </tr>
                            </thead><!-- /thead -->
                            <tbody>
                                    <tr>
                                        <td>
                                            <div class="cart-checkout-btn pull-right">
                                                <a href="{{route('order')}}">
                                                <button type="submit" class="btn btn-primary checkout-btn">PLACE ORDER</button>
                                                </a>
                                               
                                            </div>
                                        </td>
                                    </tr>
                            </tbody><!-- /tbody -->
                        </table><!-- /table -->
                    </div><!-- /.cart-shopping-total -->            
                </div><!-- /.shopping-cart -->
            </div> <!-- /.row -->
                    <!--  BRANDS CAROUSEL -->
         </div><!-- /.logo-slider -->
<!--BRANDS CAROUSEL : END  -->     
@stop