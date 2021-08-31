<style>
.top-cart-row .dropdown-cart .lnk-cart {
    padding: 12px 0px 12px 20px;
    display: inline-block;
    color: #fff;
}
.agrikon-icon-shopping-cart{color:#255946;}
.btn-primary:hover {
    color: #fff;
    background-color: #255946;
    border-color: #255946;
}
.top-cart-row .dropdown-cart .dropdown-menu {
    border: 1px solid #e1e1e1;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    float: right;
    left: auto;
    min-width: 0;
    padding: 24px 22px;
    right: 0;
    width: 230px;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.lbl{    background-color: #255946;
    border-radius: 50px;
    font-size: 10px;
    padding: 2px 5px;
    color: #fff;}
</style>
<div class="preloader">
        <img class="preloader__image" width="55" src="{{ asset('public/agro/assets/images/loader.png') }}" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">

        <header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="topbar__left">
                        <div class="topbar__social">
                            <a href="https://www.facebook.com/stan.agroventures" class="fab fa-facebook-square" target="_blank"></a>
                            <a href="https://www.linkedin.com/in/stan-agro-ventures-37a823203/?originalSubdomain=in" class="fab fa-linkedin" target="_blank"></a>
                            <a href="https://www.instagram.com/stanagroventures/" class="fab fa-instagram" target="_blank"></a>
                        </div><!-- /.topbar__social -->
                        <p>Welcome to Stan Agro Ventures</p>
                    </div><!-- /.topbar__left -->
                    <div class="topbar__right">
                        @if($userData==null)
                         <a href="{{ url('signup') }}"><i class="agrikon-icon-phone"></i>Login</a>
                           @else
                          <li><a href="{{ url('myaccount') }}">My Account</a></li>  
                         <li> <a href="{{url('signout')}}">Logout</a> </li>
                          @endif
                        <a href="#"><i class="agrikon-icon-email"></i>stanagroventures@gmail.com</a>
                        <a href="#"><i class="agrikon-icon-phone"></i>074834 77692</a>
                    </div><!-- /.topbar__right -->
                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <nav class="main-menu">
                <div class="container">
                    <div class="logo-box">
                        <a href="{{url('/')}}" aria-label="logo image"><img src="{{url('storage/uploads/img/'.$setting->website_logo)}}" width="153" alt=""></a>
                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.logo-box -->
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>
                            <a href="#">Mushroom Spawms</a>
                            <ul>
                                  @foreach($category_list as $key => $result)
                  
                                  <?php ++$key ;
                                  if($key>=6){
                                    continue;
                                  }
                                  ?>

                                        <li class="dropdown yamm mega-menu"> 
                                        <a href="{!! url('category/'.$result->slug) !!}"> {!! ucfirst(strtolower($result->category_name)) !!}</a>
                                        </li> 
                                                         
                                      @endforeach     
                            </ul>
                        </li>
                        <li><a href="{{url('/training')}}">Training</a></li>
                        <li><a href="{{url('/services')}}">Services</a></li>
                        <li><a href="{{url('/contact')}}">Contact</a></li>
                        
                    </ul>
                    <!-- /.main-menu__list -->

                    <div class="main-header__info">
                        <a href="#" class="search-toggler main-header__search-btn"><i class="agrikon-icon-magnifying-glass"></i></a>

                   <div class="animate-dropdown top-cart-row"><div class="dropdown dropdown-cart"> <a href="##" class="main-header__cart-btn dropdown-toggle lnk-cart" data-toggle="dropdown"><i class="agrikon-icon-shopping-cart"></i><span class="lbl">{{$total_item}}</span></a>
                         <ul class="dropdown-menu">
              <li>
                <div class="cart-item product-summ#fdd922ary">
                  
                </div>
                <!-- /.cart-item -->
                <div class="clearfix"></div>
                
                <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text"> Total Item  :</span><span class='price'>{{$total_item}}</span> </div>
                    <hr>
                   <div class="pull-right"> <span class="text"> Total Price :</span><span class='price'>₹ {{$sub_total}}</span> </div>
                  <div class="clearfix"></div>
                  <a href="{{ url('checkout') }}" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> </div>
                <!-- /.cart-total--> 
                
              </li>
            </ul></div></div>
                        <a href="tel:92-666-888-0000" class="main-header__info-phone">
                            <i class="agrikon-icon-phone-call"></i>
                            <span class="main-header__info-phone-content">
                                <span class="main-header__info-phone-text">Call Anytime</span>
                                <span class="main-header__info-phone-title">074834 77692</span>
                            </span><!-- /.main-header__info-phone-content -->
                        </a><!-- /.main-header__info-phone -->
                    </div><!-- /.main-header__info -->
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->