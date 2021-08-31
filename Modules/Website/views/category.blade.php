<style>
	.page-header .container {
    padding-top: 65px!important;
    padding-bottom: 65px!important;
}
.col-sm-4,.col-sm-3 {
    float: left;
}
.price{color:#255946}
.category-product-inner{margin-bottom:50px;margin-top:50px;}
</style>
@extends('website::layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 
         <div class="row">
            @include('website::partials.menu')
            @include('website::partials.breadcrumb')
         
            
               <!-- @include('website::partials.product-sidebar')  -->
               
                @include('website::partials.product') 
            </div> 
    @stop
 