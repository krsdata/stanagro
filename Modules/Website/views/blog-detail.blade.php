<style>
.page-header .container {
    padding-top: 65px!important;
    padding-bottom: 65px!important;
    margin-bottom: 50px;
}
.section-title {
    font-size: 14px;
    border-bottom: 1px solid #e3e3e3;
    padding-bottom: 12px;
    text-transform: uppercase;
    font-weight: bold;
    margin-top: 0px;
}
.blog-title
{
	    font-weight: bold;
    font-size: 24px;
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
                 <section>
            <div class="container">
            <div class="row">
            	<div class="blog-title">{!! $blog_title !!}</div>
                <div>{!! $html !!}</div>
            </div></div></section>
        @stop