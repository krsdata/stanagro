<style>
.training-block{margin:50px 0px;}
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
                    <li><a href="index.html">Home</a></li>
                    <li>/</li>
                    <li><span>Training</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
                <h2>Training</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <div class="container">
             <div class="row">
             <div class="training-block">
             	<h2>Mushroom Entrepreneur Training</h2>
             	<p>We give quality training to the Mushroom growers, Our aim is when they complete the training session they should be masters in Mushroom Cultivation.
				We provide 1day Entrepreneur training session, includes Theory, Hands on Training and certificate. Lunch and other refreshments are also included. Very important is with our experience we have filtered 9 important points which gives maximum knowledge about Mushroom cultivation.
				</p>
				<br/>
					<h2>Mushroom Consultation </h2>
             	<p>We always welcome any kind of doubts & quires related to Mushroom & its cultivation. Our experts are 24X7 for your help & support. We give consultation On and Off Campus. 

				</p>
				<br/>
				<h2>Mushroom hut Fabrication & Machineries</h2>
				<p>Labor is a biggest challenge in large scale mushroom cultivation. We provide machineries which help in reduction of labors and speed up the time. Our fabricators are skillful and experienced to design the Hut need based.</p>
				<br/>
				<h2>Marketing Support</h2>
				<p>We have our own retail joint and some clients to procure the Mushroom and its biproducts. All the procurements are based on Mutual agreement.</p>
				<br/>
				<h2>RTF</h2>
				<p>Ready fruiting bags, Beginners and urban people can utilize this service.
				We are eliminating 80 % of your risk. We provide you ready mycelium covered bags, your work is to harvest the fruiting bodies.</p>
				<br/>
				<h2>Value added Products</h2>
				<p>Many value added products can be made out of mushrooms like Biscuits, cookies, Rasam powder, Dry Chutney powders, Pappad, Pickles etc.. Mushroom in a regular died is good for health.</p>
</div>
             </div>
             </div>
        @stop