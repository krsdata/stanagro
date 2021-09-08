<style>
.panel-w{
    width: 100%;
    float: left;
}
.body-content{margin:50px 0px;}
.checkout-box .panel-group .panel {
    -webkit-border-radius: 0px !important;
    -moz-border-radius: 0px !important;
    border-radius: 0px !important;
    background-color: #fff;
    box-shadow: 0 2px 4px 0 rgb(0 0 0 / 8%);
    padding: 20px;
    border: none;
}
.panel-heading {
    padding: 10px 15px !important;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
.panel-group {
    margin-bottom: 20px;
}
.checkout-box .checkout-steps .panel .panel-heading, .checkout-box .checkout-progress-sidebar .panel .panel-heading {
    font-family: 'Open Sans', sans-serif;
    font-size: 20px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
    text-transform: uppercase;
    padding: 0px;
    border: none;
}
.checkout-box .checkout-steps .panel .panel-heading, .checkout-box .checkout-progress-sidebar .panel .panel-heading {
    font-family: 'Open Sans', sans-serif;
    font-size: 20px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
    text-transform: uppercase;
    padding: 0px;
    border: none;
}
.checkout-box .checkout-steps .panel .panel-heading .unicase-checkout-title {
    margin: 0px !important;
    font-size: 13px;
    font-weight: bold;
}
.panel-default>.panel-heading {
    color: #333;
    background-color: #f5f5f5;
    border-color: #ddd;
}

.checkout-box .checkout-steps .panel .panel-heading .unicase-checkout-title {
    margin: 0px !important;
    font-size: 13px;
    font-weight: bold;
}
.checkout-box .checkout-steps .panel .panel-heading .unicase-checkout-title > a:not(.collapsed) span {
    background-color: #F5F5F5;
    padding: 10px; 
}
.checkout-box .checkout-steps .panel .panel-heading .unicase-checkout-title a {
    color: #555;
    text-transform: uppercase;
    display: block;
}
 
</style>

@extends('website::layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 

            @include('website::partials.menu')
            <!-- Left side column. contains the logo and sidebar -->
            <div class="body-content">
    <div class="container">
        <div class="checkout-box ">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel-group checkout-steps" id="accordion">
 

<div class="panel panel-default checkout-step-01 active">

    <!-- panel-heading -->
        <div class="panel-heading">
        <h4 class="unicase-checkout-title"> 
            <a  data-toggle="collapse" class="{{ ($tab==0)?'':'collapse'}}"  data-parent="#accordion" href="#collapseOne">
            Login
            </a>
         </h4>
    </div>
    <!-- panel-heading -->

    <div id="collapseOne" class="panel-collapse collapse in show">

        <!-- panel-body  -->
        <div class="panel-body">
            <div class="row">       

                <!-- guest-login -->            
                <div class="col-md-6 col-sm-6 guest-login">
                    <h4 class="checkout-subtitle">Guest or Register Login</h4>
                    <p class="text title-tag-line">Register with us for future convenience:</p>

                    <!-- radio-form  -->
                    <form class="register-form" role="form">
                        <div class="radio radio-checkout-unicase">  
                            
                          
                            <input id="register" name="text" value="register" type="radio" checked="checked">  
                            <label class="radio-button" for="register">Register</label>  
                        </div>  
                    </form>
                    <!-- radio-form  -->

                    <h4 class="checkout-subtitle outer-top-vs">Register and save time</h4>
                    <p class="text title-tag-line ">Register with us for future convenience:</p>
                    
                    <ul class="text instruction inner-bottom-30">
                        <li class="save-time-reg">- Fast and easy check out</li>
                        <li>- Easy access to your order history and status</li>
                    </ul>
                     <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo2">
                    <button   type="button" class="btn-upper btn btn-primary checkout-page-button checkout-continue ">Continue</button> </a>
                </div>
                <!-- guest-login -->

                <!-- already-registered-login -->
                <div class="col-md-6 col-sm-6 already-registered-login">
                    <h4 class="checkout-subtitle">Already registered?</h4> 

                       <form method="POST" action="{{ url('userLogin') }}"  class="form-horizontal" role="form" id="loginForm">
                        {!! csrf_field() !!}
                        <input type="hidden" name="signup" id="signup" value="signup">
                        <div class="form-group">
                        <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                        <input class="form-control unicase-form-control text-input" name="email" id="exampleInputEmail1" placeholder="" type="email">
                      </div>
                      <div class="form-group">
                        <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                        <input class="form-control unicase-form-control text-input" name="password" id="exampleInputPassword1" placeholder="" type="password">
                        <a href="#" class="forgot-password">Forgot your Password?</a>
                      </div>
                      <button type="button"  onclick="loginBtnMain()" class="btn-upper btn btn-primary checkout-page-button" >Login</button>
                      <span id="loginError" style="color: red"></span>
                    </form>
                </div>  
                <!-- already-registered-login -->       

            </div>          
        </div>
        <!-- panel-body  -->

    </div><!-- row -->
</div>

                    <div class="panel panel-default checkout-step-022 closeREG panel-w" id="register">
                         

                    <div id="collapseTwo2" class="panel-collapse collapse">
                          <p class="btn btn-success" style="width:100%"> Registration </p>
                            <div class="panel-body">
                                    <div class="col-md-6 col-sm-6 already-registered-login"> 
                                        <form class="register-form" role="form" id="register">
                                              {!! csrf_field() !!}
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">First Name <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="" type="text" name="first_name">
                                            </div> 
                                            <input type="hidden" name="signup" value="singup" id="signup" >
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Last Name <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="" type="text" name="last_name">
                                            </div> 

                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                                <input class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="" type="email" name="email">
                                            </div>
                                          <div class="form-group">
                                            <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                                            <input class="form-control unicase-form-control text-input" id="exampleInputPassword1" placeholder="" name="password" type="password">
                                             
                                          </div>

                                          <div class="form-group">
                                            <label class="info-title" for="exampleInputPassword1">Confirm Password <span>*</span></label>
                                            <input class="form-control unicase-form-control text-input" id="exampleInputPassword1" placeholder="" name="confirm_password" type="password">
                                             
                                          </div> 
                                          
                                          <button type="button" onclick="signUp()"  class="btn-upper btn btn-primary checkout-page-button">Continue</button> 

                                        </form>
                                        <span id="regErr" style="color: red"></span>
                                    </div>  
                            </div>
                        </div>
                    </div> 
  
                       
                </div> <!-- /.row -->
                                </div>
                            </div>
                        </div>
                        <!-- checkout-step-06  -->
                        
                    </div><!-- /.checkout-steps -->
                </div>
               
            </div><!-- /.row -->
            </div><!-- /.checkout-box -->
               </div><!-- /.container -->
        </div>

            
    @stop