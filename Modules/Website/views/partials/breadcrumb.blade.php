 <section class="page-header">
            <div class="page-header__bg" style="background-image: url('{{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg')}}');"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>/</li>
                      @if(isset($category_name) && !isset($product->category->name))
                      <li>{!! $category_name !!}</li>
                      
                      @else
                      {{$product->category->name}}
                      @endif
                   <li class="active">{{ isset($category)?$category:''}}</li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
                <h2>{{ isset($category)?$category:''}}</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->