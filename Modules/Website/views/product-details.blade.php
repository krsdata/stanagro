<style>
    .page-header .container {
    padding-top: 65px!important;
    padding-bottom: 65px!important;
    margin-bottom: 50px;
}
.custom-carousel .owl-controls .owl-prev {
    position: absolute;
    width: 20px;
    height: 20px;
    top: -25px;
    right: 27px;
    -webkit-transition: all linear 0.2s;
    -moz-transition: all linear 0.2s;
    -ms-transition: all linear 0.2s;
    -o-transition: all linear 0.2s;
    transition: all linear 0.2s;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    background: #dddddd;
}
.hot-deals .custom-carousel .owl-controls .owl-prev {
    top: -13px;
}
.hot-deals .custom-carousel .owl-controls .owl-next {
    top: -13px;
}
.custom-carousel .owl-controls .owl-next {
    position: absolute;
    width: 20px;
    height: 20px;
    top: -25px;
    right: 0px;
    -webkit-transition: all linear 0.2s;
    -moz-transition: all linear 0.2s;
    -ms-transition: all linear 0.2s;
    -o-transition: all linear 0.2s;
    transition: all linear 0.2s;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    background: #dddddd;
}
.custom-carousel .owl-controls .owl-next:before {
    content: "\f105";
    font-family: fontawesome;
    color: #fff;
    font-size: 13px;
    left: 7px;
    position: absolute;
    top: -3px;
}
.custom-carousel .owl-controls .owl-prev:before {
    color: #fff;
    content: "\f104";
    font-family: fontawesome;
    font-size: 13px;
    left: 7px;
    position: absolute;
    top: -3px;
}
.sidebar-widget {
    background-color: #fff;
    box-shadow: 0 2px 4px 0 #6c757d;
    padding: 20px;
}
.hot-deals .hot-deal-wrapper .sale-offer-tag {
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    color: #FFFFFF;
    font-size: 11px;
    font-weight: 700;
    height: 50px;
    text-transform: uppercase;
    top: 4%;
    right: 10px;
    width: 50px;
    z-index: 100;
    background: #255946;
    position: absolute;
    text-align: center;
}
.hot-deals .hot-deal-wrapper .sale-offer-tag span {
    position: relative;
    z-index: 100;
    top: 10px;
    line-height: 1.4;
}
.hot-deals .product-info .name {
    font-size: 14px;
}
.rateit-small .rateit-range {
    position: relative;
    display: -moz-inline-box;
    display: inline-block;
    background: url(images/star-small.png);
    height: 14px;
    outline: none;
}
.hot-deals .product-info .product-price .price-before-discount {
    text-decoration: line-through;
    color: #d3d3d3;
    font-weight: 400;
    line-height: 30px;
    font-size: 14px;
}
.section-title {
    font-size: 14px;
    border-bottom: 1px solid #e3e3e3;
    padding-bottom: 12px;
    text-transform: uppercase;
    font-weight: bold;
    margin-top: 0px;
}
.hot-deals .hot-deal-wrapper {
    position: relative;
}
.sidebar-widget .custom-carousel .owl-controls {
    right: 0px;
}
.custom-carousel .owl-controls {
    position: absolute;
    right: 20px;
    top: -28px;
    width: 100%;
    display: block;
}
.single-product .product-tabs {
    margin-top: 30px;
    background-color: #fff;
    box-shadow: 0 2px 4px 0 #6c757d;
    padding: 0px;
    overflow: hidden;
    margin-bottom: 30px;
}
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell li.active a {
    background: #255946;
}
.single-product .product-tabs .tab-content .tab-pane .text {
    line-height: 20px;
}
.single-product .product-tabs .tab-content .tab-pane {
    padding: 24px;
}
.single-product .nav-tabs {
    border: none;
}
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell > li {
    float: none !important;
}
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell > li > a {
    border: none;
    color: #555;
    display: block;
    padding: 12px 28px;
    font-size: 13px;
    line-height: 28px;
    text-transform: uppercase;
    position: relative;
    font-weight: bold;
    letter-spacing: 1px;
    background: #f8f8f8;
    border: 1px #fff solid;
}
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell > li.active > a {
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
    color: #fff;
}
.product-tabs p{
    font-size: 13px;
    color: #333;
    overflow-x: hidden;
    margin: 0;
    padding: 0;
    }
    .product-info{margin-top: 5%;}
    .single-product .product-info .stock-container .stock-box .value {
    font-size: 13px;
    color: #ff7878;
}
.quantity-container.info-container{margin-top: 20px;}
.stock-box span{font-size: 13px;}
</style>
@extends('website::layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 
            @include('website::partials.menu')
                 @include('website::partials.breadcrumb')
                 <section>
            <div class="container">
            <div class="row single-product">
                
                 
                @include('website::partials.product_detail_sidebar')
                @include('website::partials.product_details')
               
            </div></div></section>
        @stop