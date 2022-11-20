@extends('pages.layouts.app')
@section('content')
    <style>

        .img{
            border-radius: 50%;
        }

        p,
        q {
            font-size: 20px;
        }

        q {
            font-weight: 500;
            line-height: 1.5rem;
        }

        p {
            color: #f6eac1;
        }

        .customer-revs {
            margin: 0 auto 0 auto;
        }

        .rectangle {
            width: 40%;
            height: 100vh;
            background: #f6eac1;

            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
        }

        /* slideshow container */
        .slideshow-container {
            position: relative;
            /*width: 60rem;*/
            max-width: 80%;
            /*margin-bottom: 25px;*/
            margin: 0 auto;
        }

        /* Slides */
        .mySlides {
            display: none;
            padding: 2rem 5rem 0 5rem;
            text-align: center;
        }

        .mySlidesContainer {
            min-height: 6rem;
            padding: 3.5rem 2.5rem 2rem 3.5rem;
            background: #dbdbdb;
        }

        /* next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 55%;
            width: auto;
            margin-top: -1.875rem;
            padding: 1rem;
            color: #232323;
            font-weight: bold;
            font-size: 3rem;
            border-radius: 3px;
            user-select: none;
            transition: 0.4s;
        }

        /* position the "next button" to the right */
        .next {
            position: absolute;
            right: 0;
            border-radius: 3px;
        }

        /* on hover, add a black bg color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: #000; /* fallback color */
            background-color: rgba(0, 0, 0, 0.8);
            color: #f6eac1;
            text-decoration: none;
        }

        /* the dot/bullet/indicator container */
        .dot-container {
            text-align: center;
            padding: 0 1.25rem;
        }

        /* the dots/bullets/indicators */
        .dot {
            height: 0.9375rem;
            width: 0.9375rem;
            margin: 0 2px;
            background-color: #dbdbdb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.4s ease;
        }

        /* add bg color to the active dot/circle */
        .active {
            background-color: #232323;
        }

    </style>



<div id="minimal-bootstrap-carousel" class="carousel slide carousel-fade slider-home-two" data-ride="carousel" onload="">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active slide-1" style="background-image: url(front/img/banner-2-1.html);background-position: left center;">

            <div class="carousel-caption">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content ">
                            <h3 data-animation="animated fadeInUp"><span style="color: #3ed4c9;">ZenGo Invest.</span><br />Forex and Cryptocurrency <br /> Investments</h3>
                            <p data-animation="animated fadeInDown">We provide a wide range of financial investment opportunities <br>to both individuals and businesses to grow their investment.</p>
                            <a href="{{ route('register') }}" class="thm-btn yellow-bg" data-animation="animated fadeInDown">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item slide-2" style="background-image: url(front/img/banner-2-3.html);background-position: left center;">

            <div class="carousel-caption">
                <div class="thm-container">
                    <div class="box valign-middle">
                        <div class="content ">
                            <h3 data-animation="animated fadeInUp">Grow Your Investments<br />With <span style="color: #3ed4c9;">ZenGo Invest.</span> </h3>
                            <p data-animation="animated fadeInDown">We do the work for you! Our investment platform is safe for everyone, <br>we have implemented several security protocols to ensure <br>your account is kept safe and private.</p>
                            <a href="{{ route('register') }}" class="thm-btn yellow-bg" data-animation="animated fadeInDown">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right"></i>
        <span class="sr-only">Next</span>
    </a>

    <ul class="carousel-indicators list-inline custom-navigation">
        <li data-target="#minimal-bootstrap-carousel" data-slide-to="0" class="active"></li><!--
        --><li data-target="#minimal-bootstrap-carousel" data-slide-to="1"></li>
    </ul>
</div>

<section class="no-pad" style="background: #262B38;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-30">
                <style>.widget_horizontal_container{ width: 100%; height:62px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; } .widget_horizontal_iframe_container{ height:42px; width: calc( 100% - 1px ); } .widget_horizontal_iframe{ border:0;margin:0;padding:0; } .widget_horizontal_powered{ color: #626B7F; font-weight: 400; font-size: 11px; box-sizing:content-box; margin: 3px 6px 3px 0px; font-family: Verdana, Tahoma, Arial, sans-serif; float: right !important; } .widget_horizontal_powered_link{ font-weight: 500; color: #626B7F !important; text-decoration:none; font-size:11px; display:inline-block; margin-right:5px; }</style><div class="widget_horizontal_container"><div class="widget_horizontal_iframe_container"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=dark&amp;pref_coin_id=1505&amp;invert_hover=no" width="100%" height="100%" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" class="widget_horizontal_iframe"></iframe></div></div>
            </div>
        </div>
    </div>
</section>

<section class="count-down-style-one-wrapper sec-pad">
    <div class="thm-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="countdown-title">
                    <h3>About <span style="color: #3ed4c9;">ZenGo Invest</span></h3>
                    <p style="color: white; font-size: 20px">ZenGo Invest was founded by a team of professional individuals comprising of experts from the banking, finance and technology sectors, which are multi-billion dollars industries, in 2004.
                        We provide a unique global perspective through our global network, in-depth market and sector knowledge. This puts us in an excellent position to address the increasingly global needs of our clients.</p>
                    <p style="color: white; font-size: 20px">Our work is always intended to provide a clear benefit to all our clients in both the short and long term investments. We focus our resources, leverage our global scale, and drive excellence in all we do while enhancing our partner-like culture to ensure profits on all sectors of our company.</p>
                </div><!-- /.countdown-title -->
            </div>
        </div><!-- /.row -->
        <hr>
        <h3 style="color: white" class="text text-center">Our Team</h3>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
                <img style="border-radius: 50%" height="300" src="{{ asset('front/team/1.jpeg') }}"  />
                <div class="col-lg-12">
                    <h4 style="color: white; text-align: center" class="text">Ouriel Ohayon
                        <a class="btn btn-primary btn-sm" target="_blank" href="https://www.linkedin.com/in/ourielohayon/"> <i class="fa fa-linkedin"></i></a>
                    </h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
                <img style="border-radius: 50%" height="300" src="{{ asset('front/team/2.jpeg') }}"  />
                <div class="col-lg-12">
                    <h4 style="color: white; text-align: center" class="text">Dolores Rinda
                        <a class="btn btn-primary btn-sm" target="_blank" href="https://www.linkedin.com/in/dhirschmann"> <i class="fa fa-linkedin"></i></a>
                    </h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
                <img style="border-radius: 50%" height="300" src="{{ asset('front/team/3.jpeg') }}"  />
                <div class="col-lg-12">
                    <h4 style="color: white; text-align: center" class="text">Tal Beery
                        <a class="btn btn-primary btn-sm" target="_blank" href="https://www.linkedin.com/in/talbeery/"><i class="fa fa-linkedin"></i></a>
                    </h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
                <img style="border-radius: 50%" height="300" src="{{ asset('front/team/4.jpeg') }}"  />
                <h4 style="color: white; text-align: center" class="text">Gal Haramaty
                    <a class="btn btn-primary btn-sm" target="_blank" href="https://www.linkedin.com/in/gal-haramaty-013b47b7/"> <i class="fa fa-linkedin"></i></a>
                </h4>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <img style="border-radius: 50%" height="300" src="{{ asset('front/team/5.jpeg') }}"  />
               <div class="col-lg-12">
                   <h4 style="color: white; text-align: center" class="text">Albert Elrom
                       <a class="btn btn-primary btn-sm" class="btn btn-sm btn-primary" title="Linkedin" target="_blank" href="https://www.linkedin.com/in/alberte/"> <i class="fa fa-linkedin"></i></a>

                   </h4>
               </div>
            </div>
        </div>

    </div><!-- /.thm-container -->
</section><!-- /.count-down-style-one-wrapper -->

<section class="how-it-works sec-pad">
    <div class="thm-container">
        <div class="sec-title text-center">
            <span>check our process</span>
            <h3>How It Works</h3>
        </div><!-- /.sec-title text-center -->
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-how-it-works text-center">
                    <div class="icon-box">
                        <i class="bitmex-icon-wallet"></i>
                        <div class="count">01</div><!-- /.count -->
                    </div><!-- /.icon-box -->
                    <h3>Create An Account</h3>
                    <p style="color: black">Join ZenGo Invest in less than 3 minutes. Get started with us by creating your trading account.</p>
                </div><!-- /.single-how-it-works text-center -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-how-it-works text-center">
                    <div class="icon-box">
                        <i class="bitmex-icon-tap"></i>
                        <div class="count">02</div><!-- /.count -->
                    </div><!-- /.icon-box -->
                    <h3>Choose A Plan</h3>
                    <p style="color: black">Select any of our available investment plans, and make your payment via any of our payment channels.</p>
                </div><!-- /.single-how-it-works text-center -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-how-it-works text-center">
                    <div class="icon-box">
                        <i class="bitmex-icon-payment"></i>
                        <div class="count">03</div><!-- /.count -->
                    </div><!-- /.icon-box -->
                    <h3>Start Earning</h3>
                    <p style="color: black">Sit back, grab a cup of coffee and watch your investments grow. Get paid directly in your wallet.</p>
                </div><!-- /.single-how-it-works text-center -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section>

<section class="feature-style-two sec-pad light-dark-bg">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="feature-style-two-title">
                    <span>Why People Choose Us?</span>
                    <h3>Automated Crypto Trading  <br />Made Simple.</h3>
                    <a href="{{ route('register') }}"  style="background-color: #35c4ba!important;" class="thm-btn yellow-bg-hvr">Get Started</a>
                </div><!-- /.feature-style-two-title -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="feature-style-two-content">
                    <div class="row feature-style-two-content-row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-feature-style-two">
                                <div class="top-box">
                                    <div class="icon-box">
                                        <i class="bitmex-icon-shield"></i>
                                    </div><!-- /.icon-box -->
                                    <div class="text-box">
                                        <h3>Safe and <br /> secure</h3>
                                    </div><!-- /.text-box -->
                                </div><!-- /.top-box -->
                                <p>We offer a zero risk investment platform as all your funds are insured against theft or any loss.</p>
                            </div><!-- /.single-feature-style-two -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-feature-style-two">
                                <div class="top-box">
                                    <div class="icon-box">
                                        <i class="bitmex-icon-handshake"></i>
                                    </div><!-- /.icon-box -->
                                    <div class="text-box">
                                        <h3>Trusted</h3>
                                    </div><!-- /.text-box -->
                                </div><!-- /.top-box -->
                                <p>We are in partnership with top companies like Blockchain.com, Facebook and Shopify.</p>
                            </div><!-- /.single-feature-style-two -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-feature-style-two">
                                <div class="top-box">
                                    <div class="icon-box">
                                        <i class="bitmex-icon-clock"></i>
                                    </div><!-- /.icon-box -->
                                    <div class="text-box">
                                        <h3>24/7 experts <br /> support</h3>
                                    </div><!-- /.text-box -->
                                </div><!-- /.top-box -->
                                <p>Our customer support team are always available to put you through whenever you need help.</p>
                            </div><!-- /.single-feature-style-two -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-feature-style-two">
                                <div class="top-box">
                                    <div class="icon-box">
                                        <i class="bitmex-icon-coin"></i>
                                    </div><!-- /.icon-box -->
                                    <div class="text-box">
                                        <h3>Instant currency <br /> exchange</h3>
                                    </div><!-- /.text-box -->
                                </div><!-- /.top-box -->
                                <p>All operations are automated, we have designed a stress-free system for you!</p>
                            </div><!-- /.single-feature-style-two -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.feature-style-two-content -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.feature-style-two -->

<section class="pricing btc-calculator sec-pad py-5">
        <div class="container">
            <div class="row">
                <!-- Free Tier -->
                <div class="col-lg-12">
                    <div class="sec-title text-center">
                        <h3 style="color: #222; !important">Investment Plans</h3>
                    </div><!-- /.sec-title text-center -->
                </div>
            </div>
            <div class="row">
                <!-- Free Tier -->
                <div class="col-lg-3">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">STARTER PLAN</h5>
                            <h6 class="card-price text-center">50%</h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Duration: 7 DAYS</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Accrual: HOURLY</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Ref Commision: 5%</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Instant Payment</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Price: <br><span style="color:#7eb20e; font-weight: 600; font-size: 18px;">$500 - $5,000</span></li>
                            </ul>
                            <a href="{{ route('register') }}" style="background-color: #35c4ba!important;" class="btn btn-block btn-primary text-uppercase">GET STARTED</a>
                        </div>
                    </div>
                </div>
                <!-- Plus Tier -->
                <div class="col-lg-3">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">ADVANCE PLAN</h5>
                            <h6 class="card-price text-center">75%</h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Duration: 7 DAYS</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Accrual: HOURLY</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Ref Commision: 5%</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Instant Payment</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Price: <br><span style="color:#7eb20e; font-weight: 600; font-size: 18px;">$5,000 - $10,000</span></li>
                            </ul>
                            <a href="{{ route('register') }}" style="background-color: #35c4ba!important;" class="btn btn-block btn-primary text-uppercase">GET STARTED</a>
                        </div>
                    </div>
                </div>
                <!-- Pro Tier -->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">PROFESSIONAL</h5>
                            <h6 class="card-price text-center">80%</h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Duration: 7 DAYS</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Accrual: HOURLY</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Ref Commision: 5%</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Instant Payment</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Price: <br><span style="color:#7eb20e; font-weight: 600; font-size: 18px;">$10,000 - $15,000</span></li>
                            </ul>
                            <a href="{{ route('register') }}" style="background-color: #35c4ba!important;" class="btn btn-block btn-primary text-uppercase">GET STARTED</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">ULTIMATE</h5>
                            <h6 class="card-price text-center">100%</h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Duration: 7 DAYS</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Accrual: HOURLY</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Ref Commision: 5%</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Instant Payment</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Price: <br><span style="color:#7eb20e; font-weight: 600; font-size: 18px;">$15,000 - Infinity</span></li>
                            </ul>
                            <a href="{{ route('register') }}" style="background-color: #35c4ba!important;" class="btn btn-block btn-primary text-uppercase">GET STARTED</a>
                        </div>
                    </div>
                </div><!-- col -->
            </div>
        </div>
    </section>


<section class="cta-style-one sec-pad">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-5">
                <img src="{{ asset('front/new-assets/img/custom/forex-chart-bg-2.jpg') }}" style="max-width: 100%;" />
            </div><!-- /.col-md-5 -->
            <div class="col-md-7">
                <div class="cta-style-one-content">
                    <span>Let's get you started</span>
                    <h3>Easy To Use FX<br />& Crypto Solutions</h3>
                    <p>ZenGo Invest stands out as one of the leaders in the industry, and here's why: Our trading platform is 100% web based, so you won???t have to download any software. This makes it easy to trade from anywhere and at any time.</p>
                    <div class="btn-box">
                        <a href="{{ route('register') }}"  class="cta-one-btn">
							<span class="icon-box">
								<i class="fa fa-user"></i>
							</span>
                            <span class="text-box">
								<span class="label-text">Get Started</span>
								<span class="title-text">Register Now</span>
							</span>
                        </a>
                        <a href="contact.html" class="cta-one-btn style-two">
							<span class="icon-box">
								<i class="fa fa-support"></i>
							</span>
                            <span class="text-box">
								<span class="label-text">Have inquiries?</span>
								<span class="title-text">Contact Us</span>
							</span>
                        </a>
                    </div><!-- /.btn-box -->
                </div><!-- /.cta-style-one-content -->
            </div><!-- /.col-md-7 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.cta-style-one -->

<section class="cta-style-two btc-calculator">
    <div class="thm-container clearfix">
        <div class="title-text pull-left">
            <h3>Want to grow your Bitcoin daily? Sign up with us</h3>
        </div><!-- /.title-text -->
        <div class="btn-box pull-right">
            <a href="{{ route('register') }}"  style="background-color: #35c4ba!important;" class="thm-btn">Create an Account</a>
        </div><!-- /.btn-box -->
    </div><!-- /.thm-container -->
</section>

<section class="fun-fact-style-one dark-bg sec-pad">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-fun-fact-style-one text-center">
                    <i class="bitmex-icon-coin"></i>
                    <p>Total Transactions</p>
                    <h3 class="counter">43266</h3>
                </div><!-- /.single-fun-fact-style-one text-center -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-fun-fact-style-one text-center">
                    <i class="bitmex-icon-wallet"></i>
                    <p>Bitcoin Wallets</p>
                    <h3 class="counter">5499</h3>
                </div><!-- /.single-fun-fact-style-one text-center -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-fun-fact-style-one text-center">
                    <i class="bitmex-icon-like"></i>
                    <p>Happy Users</p>
                    <h3 class="counter">5599</h3>
                </div><!-- /.single-fun-fact-style-one text-center -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-fun-fact-style-one text-center">
                    <i class="bitmex-icon-handshake"></i>
                    <p>Bitcoin Investors</p>
                    <h3 class="counter">5981</h3>
                </div><!-- /.single-fun-fact-style-one text-center -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.fun-fact-style-one -->


<section class="customer-revs">
{{--        <div class="rectangle"></div>--}}

        <!-- Slideshow container -->
        <div class="slideshow-container">

            <div class="thm-container">
                <div class="sec-title text-center">
                    <span>what people say</span>
                    <h3>Testimonials</h3>
                </div><!-- /.sec-title text-center -->

            </div><!-- /.thm-container -->

            <!-- Full-width slides/quotes -->
            <div class="row">


                    <div class="mySlides ">
                        <div class="mySlidesContainer">
                            <img class="img" height="200" src="https://www.cryptonfttrade.com/images/naomi-nl.jpeg">
                            <q>
                                The Best so far , investing that works , is far better than saving.
                            </q>
                            <p style="color: black" class="author"> - <span>Naomi Wensing(Netherlands)</span></p>
                        </div>

                    </div>
                   <div class="mySlides ">
                        <div class="mySlidesContainer">
                            <img class="img" height="200" src="https://www.cryptonfttrade.com/images/hamza-pk.jpeg">
                            <q >
                                This Platform has been the game changer,and has really made a turn around in my life, it looked really risky at first and I am glad I took the risk.
                            </q>
                            <p style="color: black" class="author"> - <span>Hamza Majid(Pakistan)</span></p>
                        </div>

                    </div>
                  <div class="mySlides ">
                        <div class="mySlidesContainer">
                            <img class="img" height="200" src="https://www.cryptonfttrade.com/images/anushka-in.jpeg">
                            <q >
                                Best Investment so far !!! it’s just about getting the best company to invest with.
                            </q>
                            <p style="color: black" class="author"> - <span>Anushka Patel(India)</span></p>
                        </div>

                    </div>
{{--                --}}



            </div>


            <!-- Next/prev buttons -->
            <a class="prev">&#10094;</a>
            <a class="next">&#10095;</a>

        </div><!-- END slidehow-container -->

        <!-- Dots/bullets/indicators -->
        <div class="dot-container">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

    </section>


<script>
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        let prev = document.querySelector(".prev");
        let next = document.querySelector(".next");

        if (!slides.length == 0) {
            let slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides((slideIndex += n));
            }

            let currentSlide = function (n) {
                showSlides((slideIndex = n));
            };

            function showSlides(n) {
                if (n > slides.length) {
                    slideIndex = 1;
                }

                if (n < 1) {
                    slideIndex = slides.length;
                }

                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }

                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }

                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        }

        prev.addEventListener("click", () => {
            plusSlides(-1);
        });

        next.addEventListener("click", () => {
            plusSlides(1);
        });

    </script>

@endsection
