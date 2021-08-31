
@extends('website::layouts.master')
    @section('title', 'HOME')
        
    @section('header')
    <h1>Home</h1>
    @stop

    @section('content') 

        @include('website::partials.menu')
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url('{{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg')}}');"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li>/</li>
                    <li><span>Contact Us</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
                <h2>Contact</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
                        <div class="contact-one__content">
                            <div class="block-title">
                                <div class="block-title__image"></div><!-- /.block-title__image -->
                                <p>Contact now</p>
                                <h3>Leave A Message</h3>
                            </div><!-- /.block-title -->
                            <div class="contact-one__summery">
                                <p>We always welcome any kind of doubts & quires related to Mushroom & its cultivation. Our experts are 24X7 for your help & support. We give consultation On and Off Campus.</p>
                            </div><!-- /.contact-one__summery -->
                            <div class="contact-one__social">
                                <a href="https://www.facebook.com/stan.agroventures" target="_blank"><i class="fab fa-facebook-square"></i></a>
                                <a href="https://www.linkedin.com/in/stan-agro-ventures-37a823203/?originalSubdomain=in" target="_blank"><i class="fab fa-linkedin"></i></a>
                                <a href="https://www.instagram.com/stanagroventures/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.contact-one__social -->
                        </div><!-- /.contact-one__content -->
                    </div><!-- /.col-sm-12 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-8">
                        <form action="assets/inc/sendemail.php" class="contact-one__form contact-form-validated">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" placeholder="Full Name">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="text" name="email" placeholder="Email Address">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="text" name="phone" placeholder="Phone Number">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Write Message"></textarea>
                                </div><!-- /.col-lg-12 -->
                                <div class="col-lg-12">
                                    <button type="submit" class="thm-btn">Send a Message</button><!-- /.thm-btn -->
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.col-sm-12 col-md-6 col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->

        <section class="contact-infos">
            <div class="container">
                <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
                    <div class="row no-gutters">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="contact-infos__single">
                                <h3>About Company</h3>
                                <p>STAN Agro Ventures is a hi-tech scientific Mushroom spawn production laboratory.</p>
                            </div><!-- /.contact-infos__single -->
                        </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="contact-infos__single">
                                <h3>Visit Company</h3>
                                <p>1st main, main road, near to Royal Enclave, Srirampura, Bengaluru, Karnataka 560064</p>
                            </div><!-- /.contact-infos__single -->
                        </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="contact-infos__single">
                                <h3>Call or Email</h3>
                                <p><a href="mailto:stanagroventures@gmail.com">stanagroventures@gmail.com</a> <br>
                                    <a href="mailto:info@bangaloremushroom.com">info@bangaloremushroom.com</a><br>
                                    <a href="tel:07483477692">074834 77692</a>
                                </p>
                            </div><!-- /.contact-infos__single -->
                        </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.contact-infos -->

        <div class="google-map__home-two">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15546.114216227787!2d77.6157022!3d13.0656532!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc08bd9ea1de4cd25!2sSTAN%20Agro%20Ventures!5e0!3m2!1sen!2sin!4v1629117123597!5m2!1sen!2sin" allowfullscreen class="map__home-two"></iframe>    
        </div><!-- /.google-map -->
        @stop