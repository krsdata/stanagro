<style>
.blogs{
border: 1px solid #f7c35f;
    margin-top: 20px;
    width: 100%;
    height: auto;
    float: left;
}
.product-info{float:left;width:100%;}
h3.name a{
      font-size: 22px;
    text-transform: uppercase;
}
h3.name{
      padding: 15px;
}
.description{padding:10px;}
</style>


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
                    <li><span>Blogs</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
                <h2>Blogs</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->
        
        <div class="container">
              <div class="row">
                 @if($blogs->count()==0) Record not found @endif 
                 @foreach($blogs as $key => $blog)
                  <div style="visibility: hidden; animation-name: none;" class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="blogs">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="product-details">

                          <img  style="width:100%;float: left;height: auto;border: 1px solid #ccc;" src="{{ asset('storage/blog/'. $blog->blog_image) }}" alt="{{ $blog->blog_title }}"> 

                          </a> 
                        </div>
                          <!-- /.image -->
                          
                         <!--  <div class="tag new"><span>new</span></div> -->
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('blog/'."$blog->slug")}}">{{ $blog->blog_title }}</a></h3>
                          <div class="description">{!! str_limit($blog->blog_description,200) !!}</div>
                          <div><a href='{{url('blog/'."$blog->slug")}}' class="btn btn-default add-to-cart">Read More</a></div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                 @endforeach  
                  
                  <!-- /.item --> 
                </div>
        </div>         
@stop