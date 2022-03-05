
@extends('website::layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 

            @include('website::partials.menu')
             <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li>Page Not Found</li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
               
            </div><!-- /.container -->
        </section><!-- /.page-header -->
        
        <div class="container">
             <div class="row">
              <!-- panel-body  -->
                            <div class="panel-body">
                               <h1>Page Not Found</h1>
                            </div>
                          <!--   @if(!empty($page->images))
                            <div class="panel-body">
                               <img src="{{url('storage/pages/'.$page->images)}}" width="100%">        
                            </div>
                            @endif -->
                            <!-- panel-body  -->
             
             </div>
        </div>         
@stop
