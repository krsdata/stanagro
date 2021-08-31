@extends('website::layouts.master')
    @section('title', 'HOME')
        
    @section('header')
    <h1>Home</h1>
    @stop

    @section('content') 

        @include('website::partials.menu')
        @include('website::partials.home-slider')
        @include('website::partials.home-services-section')
        @include('website::partials.home-about-section')
        @include('website::partials.home-service-list-section')
       

       

        <div class="projects-one project-one__home-one">
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__image"></div><!-- /.block-title__image -->
                   <!--  <p>Closed projects</p> -->
                    <h3>Our Vision</h3>
                </div><!-- /.block-title -->
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "loop": true, "slidesPerGroup": 1, "pagination": {
            "el": "#projects-one__swiper-pagination",
            "type": "bullets",
            "clickable": true
        },
        "breakpoints": {
            "0": {
                "spaceBetween": 0,
                "slidesPerView": 1,
                "slidesPerGroup": 1
            },
            "640": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            },
            "992": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            }
        }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="{{ asset('public/agro/assets/images/projects/project-2-1.jpg') }}" alt="">
                                <div class="projects-one__content">
                                    <h3>Harvest Innovation</h3>
                                    <a href="#" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="{{ asset('public/agro/assets/images/projects/project-2-2.jpg') }}" alt="">
                                <div class="projects-one__content">
                                    <h3>Harvest Innovation</h3>
                                    <a href="#" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="{{ asset('public/agro/assets/images/projects/project-2-3.jpg') }}" alt="">
                                <div class="projects-one__content">
                                    <h3>Harvest Innovation</h3>
                                    <a href="#" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="{{ asset('public/agro/assets/images/projects/project-2-4.jpg') }}" alt="">
                                <div class="projects-one__content">
                                    <h3>Harvest Innovation</h3>
                                    <a href="#" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="{{ asset('public/agro/assets/images/projects/project-2-2.jpg') }}" alt="">
                                <div class="projects-one__content">
                                    <h3>Harvest Innovation</h3>
                                    <a href="#" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="{{ asset('public/agro/assets/images/projects/project-2-4.jpg') }}" alt="">
                                <div class="projects-one__content">
                                    <h3>Harvest Innovation</h3>
                                    <a href="#" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                    <div class="swiper-pagination" id="projects-one__swiper-pagination"></div>
                </div><!-- /.swiper-container -->
            </div><!-- /.container -->
        </div><!-- /.projects-one -->

        <section class="call-to-action__three jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 50%">
            <img class="call-to-action__three__bg jarallax-img" src="assets/images/backgrounds/cta-1-bg-1.jpg" alt="parallax-image" />
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="call-to-action__three-image">
                            <img src="{{ asset('public/agro/assets/images/resources/cta-3-1.jpg') }}" alt="">
                            <img src="{{ asset('public/agro/assets/images/resources/cta-3-2.jpg') }}" alt="">
                        </div><!-- /.call-to-action__three-image -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7">
                        <div class="call-to-action__three-content">
                            <h3>Providing High Quality
                                Mushrooms</h3>
                            <a href="{{url('/services')}}" class="thm-btn">Discover More</a><!-- /.thm-btn -->
                        </div><!-- /.call-to-action__three-content -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.call-to-action__three -->

        <section class="testimonials-one">
            <img src="{{ asset('public/agro/assets/images/icons/testimonials-bg-1-1.png') }}" class="testimonials-one__bg" alt="">
            <div class="container">
                <h2 class="testimonials-one__title">Testimonials</h2>
                <div id="testimonials-one__carousel" class="testimonials-one__carousel swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonials-one__icons">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div><!-- /.testimonials-one__icons -->
                            <p>I have been buying mushroom spawns from Stango Agro Ventures and should mention that their spawns are of very high quality, Stango Agro Ventures peoples are very friendly, i got trained by them and now i am running a mushroom farm succesfully.</p>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__icons">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div><!-- /.testimonials-one__icons -->
                            <p>Stango Agro Ventures is an outstanding company they have very strong knowledge in technical aspects of mushroom farming, I suggest nayone to get their help who are planning to satrt Mushroom Farming</p>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__icons">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div><!-- /.testimonials-one__icons -->
                            <p>Stango Agro Ventures is a great company to work with, they trained me in Button mushroom, I buy spawns from them as they are the best in quality and much less in cost in comparision to others.</p>
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /#testimonials-one__carousel -->

                <div id="testimonials-one__thumb" class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonials-one__image">
                                <img src="{{ asset('public/agro/assets/images/resources/testimonials-1-1.jpg') }}" alt="">
                            </div><!-- /.testimonials-one__image -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__image">
                                <img src="{{ asset('public/agro/assets/images/resources/testimonials-1-2.jpg') }}" alt="">
                            </div><!-- /.testimonials-one__image -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__image">
                                <img src="{{ asset('public/agro/assets/images/resources/testimonials-1-3.jpg') }}" alt="">
                            </div><!-- /.testimonials-one__image -->
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /#testimonials-one__thumb.swiper-container -->

                <div id="testimonials-one__meta" class="testimonials-one__carousel swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonials-one__meta">
                                <h4>Nagarjun Ayar</h4>
                                <span>Customer</span>
                            </div><!-- /.testimonials-one__meta -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__meta">
                                <h4>Srinivas Rao</h4>
                                <span>Customer</span>
                            </div><!-- /.testimonials-one__meta -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__meta">
                                <h4>Shrikant Nair</h4>
                                <span>Customer</span>
                            </div><!-- /.testimonials-one__meta -->
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /#testimonials-one__meta.swiper-container -->
                <div class="swiper-pagination" id="testimonials-one__swiper-pagination"></div>
            </div><!-- /.container -->
        </section><!-- /.testimonials-one -->

       
        <section class="contact-two">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                        <div class="contact-two__image">
                            <div class="contact-two__image-bubble-1"></div><!-- /.contact-two__image-bubble-1 -->
                            <div class="contact-two__image-bubble-2"></div><!-- /.contact-two__image-bubble-2 -->
                            <div class="contact-two__image-bubble-3"></div><!-- /.contact-two__image-bubble-3 -->
                            <img src="{{ asset('public/agro/assets/images/resources/plarge-King-brown-mushrooms-375.jpg') }}" class="img-fluid" alt="">
                        </div><!-- /.contact-two__image -->
                    </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                        <div class="contact-two__content">
                            <div class="block-title">
                                <div class="block-title__image"></div><!-- /.block-title__image -->
                                <p>Contact now</p>
                                <h3>Leave Us A
                                    Message</h3>
                            </div><!-- /.block-title -->
                            <div class="contact-two__summery">
                                <p>We always welcome any kind of doubts &amp; quires related to Mushroom &amp; its cultivation. Our experts are 24X7 for your help &amp; support. We give consultation On and Off Campus.<p>
                            </div><!-- /.contact-two__summery -->
                        </div><!-- /.contact-two__content -->
                    </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-4 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                        <form action="assets/inc/sendemail.php" class="contact-one__form contact-form-validated">
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" name="name" placeholder="Full Name">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <input type="text" name="email" placeholder="Email Address">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <input type="text" name="phone" placeholder="Phone Number">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Write Message"></textarea>
                                </div><!-- /.col-lg-12 -->
                                <div class="col-lg-12">
                                    <button type="submit" class="thm-btn">Send Message</button><!-- /.thm-btn -->
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-two -->

       @stop