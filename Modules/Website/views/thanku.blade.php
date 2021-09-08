
@extends('website::layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 

            @include('website::partials.menu')
            
            <div class="checkout-box faq-page" style="margin:100px">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-title">Thank you for placed order!</h2>
                    <span class="title-tag">Your order will shipped soon..!</span>
                     
                        
                    </div><!-- /.checkout-steps -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.checkout-box -->
        @stop