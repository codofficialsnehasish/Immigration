@extends('layouts.web')

@section('title', 'Services')

@section('css')
<link href="{{ asset('assets/site-assets/css/elements-css/page-title.css') }}" rel="stylesheet">
<link href="{{ asset('assets/site-assets/css/elements-css/chooseus.css') }}" rel="stylesheet">
<link href="{{ asset('assets/site-assets/css/elements-css/team.css') }}" rel="stylesheet">
@endsection

@section('content')
    
    <!-- page-title -->
    <section class="page-title centred p_relative">
        <div class="bg-layer" style="background-image: url({{ asset('assets/site-assets/images/background/page-title.jpg') }});"></div>
        <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-67.png') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Services</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->



    {{-- @if($services->isNotEmpty())
    <!-- visa-section -->
    <section class="visa-section sec-pad hser">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-5.png') }});"></div>
        <div class="auto-container">
            <div class="sec-title centred mb_50">
                <!-- <span class="sub-title">Visa Categories</span> -->
                <h2>Fast. Agile. Top-Notch!Ace Your Chancenkarte Journey with Us</h2>
                <p>Discover our expertly crafted packages, each tailored to enhance your Chancenkarte application journey. We ensure success-driven consultations and guidance.</p>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                @foreach($services as $service)
               <div class="visa-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset($service->image) }}" alt=""></figure>
                        <div class="lower-content">
                            <div class="icon-box"><i class="icon-12"></i></div>
                            <h3><a href="{{ route('service.details',$service->id) }}">{{ $service->name }}</a></h3>
                            <!-- <p>Sed gravida nisl a porta tincidunt. Integertheoo aliquam nisi sit amet.</p>
                            <ul class="list-style-one clearfix">
                                <li>Nulla nulla erat, gravida at leo</li>
                                <li>Amet minim mollit no duis deserut</li>
                                <li>dolor do amet sint Velit officia</li>
                            </ul> -->
                            {!! $service->description !!}
                            <div class="link-btn">
                                <a href="{{ route('service.details',$service->id) }}"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- visa-section end -->
    @endif --}}

    @if($services->isNotEmpty())
    <!-- visa-section -->
    <section class="visa-section sec-pad">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-5.png') }});"></div>
        <div class="auto-container">
            <div class="sec-title centred mb_50">
                {{-- <span class="sub-title">Visa Categories</span> --}}
                <h2>Fast. Agile. Top-Notch!Ace Your Chancenkarte Journey with Us</h2>
                <p>Complete Chancenkarte Visa Services to Help Skilled Professionals Secure Job 
                    Opportunities in Germany and Build a Successful Career.</p>
            </div>
            <div class="">
                @foreach($services as $service)
                <div class="visa-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset($service->image) }}" alt=""></figure>
                        <div class="lower-content">
                            <div class="icon-box"><i class="icon-12"></i></div>
                            <h3><a href="{{ route('service.details',$service->id) }}">{{ $service->name }}</a></h3>
                            {{-- <p>Sed gravida nisl a porta tincidunt. Integertheoo aliquam nisi sit amet.</p>
                            <ul class="list-style-one clearfix">
                                <li>Nulla nulla erat, gravida at leo</li>
                                <li>Amet minim mollit no duis deserut</li>
                                <li>dolor do amet sint Velit officia</li>
                            </ul> --}}
                            {!! $service->description !!}
                            <div class="link-btn">
                                <a href="{{ route('service.details',$service->id) }}"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- visa-section end -->
    @endif


    <!-- about-section -->
    {{-- <section class="about-section p_relative">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-6.png') }});"></div>
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_one">
                        <div class="image-box p_relative d_block">
                            <figure class="image image-1"><img src="{{ asset('assets/site-assets/images/resource/about-1.jpg') }}" alt=""></figure>
                            <figure class="image image-2"><img src="{{ asset('assets/site-assets/images/resource/about-2.jpg') }}" alt=""></figure>
                            <figure class="certificate-box"><img src="{{ asset('assets/site-assets/images/icons/certificate-1.png') }}" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_one">
                        <div class="content-box p_relative ml_110">
                            <div class="sec-title mb_30">
                                <span class="sub-title">We are looking for</span>
                                <h2>We became an exam preparation authority.</h2>
                            </div>
                            <div class="text mb_30">
                                <p>Quisque dignissim enim diam, eget pulvinar ex viverra id. Nulla a lobortis lectus, id volutpat magna. Morbi consequat porttitor fermentum. Nulla vestibulum tincidunt viverra. Vestibulum accumsan molestie lorem, non laoreet massa. Duis at dui sem. Vivamus ut gravida libero. Proin porttitor viverra aliquet.</p>
                            </div>
                            <div class="list-inner mb_50 p_relative">
                                <ul class="list-style-one clearfix">
                                    <li>Nulla nulla erat, gravida at leo</li>
                                    <li>Amet minim mollit no duis deserut</li>
                                    <li>dolor do amet sint Velit officia</li>
                                </ul>
                                <ul class="list-style-one clearfix">
                                    <li>Scelerisque eleifend magna sit</li>
                                    <li>Pellentesque pretium elit augue</li>
                                    <li>Aenean in ipsum vel quam</li>
                                </ul>
                            </div>
                            <div class="btn-box">
                                <a href="{{ route('about') }}" class="theme-btn btn-one"><span>More Details</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- about-section end -->


    <!-- feature-section -->
    {{-- <section class="feature-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="shape" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-7.png') }});"></div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-17"></i></div>
                                <h3><a href="javascript:void(0);">Visa</a></h3>
                                <p>Sed gravida nisl a porta tincidunt. Integer aliquam nisi sit amet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-18"></i></div>
                                <h3><a href="javascript:void(0);">Passport</a></h3>
                                <p>Sed gravida nisl a porta tincidunt. Integer aliquam nisi sit amet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-19"></i></div>
                                <h3><a href="javascript:void(0);">Immigration</a></h3>
                                <p>Sed gravida nisl a porta tincidunt. Integer aliquam nisi sit amet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-20"></i></div>
                                <h3><a href="javascript:void(0);">Translation</a></h3>
                                <p>Sed gravida nisl a porta tincidunt. Integer aliquam nisi sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- feature-section end -->


    <!-- dream-section -->
    {{-- <section class="dream-section p_relative">
        <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url({{ asset('assets/site-assets/images/background/dream-bg.jpg') }});"></div>
        <div class="pattern-layer-2" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-9.png') }});"></div>
        <figure class="image-layer"><img src="{{ asset('assets/site-assets/images/resource/women-1.png') }}" alt=""></figure>
        <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-8.png') }});"></div>
        <div class="auto-container">
            <div class="content_block_two">
                <div class="content-box p_relative d_block">
                    <div class="sec-title light mb_20">
                        <span class="sub-title">Reach Your Dream</span>
                        <h2>Get the Right Help</h2>
                    </div>
                    <div class="text mb_25">
                        <p>Where did this incorrect belief that everyone dislikes praising happiness come from? Explain to me how this erroneous theory ended up being devised.</p>
                    </div>
                    <ul class="list-item p_relative clearfix">
                        <li><a href="javascript:void(0);">1. Entering & Leaving From Country <i class="icon-9"></i></a></li>
                        <li><a href="javascript:void(0);">2. Help & Support <i class="icon-9"></i></a></li>
                        <li><a href="javascript:void(0);">3. Country Citizenship <i class="icon-9"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- dream-section end -->


    <!-- countries-section -->
    {{-- <section class="countries-section p_relative centred">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-10.png') }});"></div>
            <div class="pattern-2" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-11.png') }});"></div>
        </div>
        <div class="outer-container">
            <div class="sec-title mb_30 centred">
                <span class="sub-title">Countries We Offer</span>
                <h2>Best Countries to Travel</h2>
            </div>
            <div class="tabs-box">
                <div class="tab-btn-box mb_60">
                    <ul class="tab-btns tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1">Education</li>
                        <li class="tab-btn" data-tab="#tab-2">Immigration</li>
                        <li class="tab-btn" data-tab="#tab-3">Business</li>
                    </ul>
                </div>
                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-1">
                        <div class="content-box clearfix">
                            <div class="countries-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/countries-1.jpg') }}" alt=""></figure>
                                    <div class="text">
                                        <h3><a href="javascript:void(0);">India <br />Visa</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="countries-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/countries-2.jpg') }}" alt=""></figure>
                                    <div class="text">
                                        <h3><a href="javascript:void(0);">Brazil <br />Visa</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="countries-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/countries-3.jpg') }}" alt=""></figure>
                                    <div class="text">
                                        <h3><a href="javascript:void(0);">China <br />Visa</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="countries-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/countries-4.jpg') }}" alt=""></figure>
                                    <div class="text">
                                        <h3><a href="javascript:void(0);">Vietnam <br />Visa</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-2">
                        <div class="content-box clearfix">
                            <div class="countries-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/countries-1.jpg') }}" alt=""></figure>
                                    <div class="text">
                                        <h3><a href="javascript:void(0);">India <br />Visa</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="countries-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/countries-3.jpg') }}" alt=""></figure>
                                    <div class="text">
                                        <h3><a href="javascript:void(0);">China <br />Visa</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="countries-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/countries-4.jpg') }}" alt=""></figure>
                                    <div class="text">
                                        <h3><a href="javascript:void(0);">Vietnam <br />Visa</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="countries-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/countries-2.jpg') }}" alt=""></figure>
                                    <div class="text">
                                        <h3><a href="javascript:void(0);">Brazil <br />Visa</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-3">
                        <div class="content-box clearfix">
                            <div class="countries-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/countries-3.jpg') }}" alt=""></figure>
                                    <div class="text">
                                        <h3><a href="javascript:void(0);">China <br />Visa</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="countries-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/countries-4.jpg') }}" alt=""></figure>
                                    <div class="text">
                                        <h3><a href="javascript:void(0);">Vietnam <br />Visa</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="countries-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/countries-1.jpg') }}" alt=""></figure>
                                    <div class="text">
                                        <h3><a href="javascript:void(0);">India <br />Visa</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="countries-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/countries-2.jpg') }}" alt=""></figure>
                                    <div class="text">
                                        <h3><a href="javascript:void(0);">Brazil <br />Visa</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- countries-section end -->


    <!-- coaching-section -->
    {{-- <section class="coaching-section sec-pad">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-12.png') }});"></div>
        <div class="auto-container">
            <div class="sec-title mb_50">
                <span class="sub-title">HOW WE HELP CLIENTS</span>
                <h2>Your immigration class New <br />Orleans Saints deserves you.</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 coaching-block">
                    <div class="coaching-block-one">
                        <div class="inner-box jo2">
                            <div class="image-box clearfix">
                                <figure class="image"><img src="{{ asset('assets/site-assets/images/resource/coaching-1.jpg') }}" alt=""></figure>
                                <figure class="image"><img src="{{ asset('assets/site-assets/images/resource/coaching-2.jpg') }}" alt=""></figure>
                            </div>
                            <div class="static-content">
                                <h3>Oet <br />Coaching</h3>
                                <div class="link"><a href="javascript:void(0);"><i class="icon-9"></i></a></div>
                            </div>
                            <div class="overlay-content">
                                <h3><a href="javascript:void(0);">Oet Coaching</a></h3>
                                <p>Sed gravida nisl a porta tincidunt. Integer aliquam nisi sit amet magna.</p>
                                <div class="link"><a href="javascript:void(0);"><i class="icon-9"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 coaching-block">
                    <div class="coaching-block-one">
                        <div class="inner-box">
                            <div class="image-box clearfix">
                                <figure class="image"><img src="{{ asset('assets/site-assets/images/resource/coaching-3.jpg') }}" alt=""></figure>
                                <figure class="image"><img src="{{ asset('assets/site-assets/images/resource/coaching-4.jpg') }}" alt=""></figure>
                            </div>
                            <div class="static-content">
                                <h3>Pte <br />Coaching</h3>
                                <div class="link"><a href="javascript:void(0);"><i class="icon-9"></i></a></div>
                            </div>
                            <div class="overlay-content">
                                <h3><a href="javascript:void(0);">Pte Coaching</a></h3>
                                <p>Sed gravida nisl a porta tincidunt. Integer aliquam nisi sit amet magna.</p>
                                <div class="link"><a href="javascript:void(0);"><i class="icon-9"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 coaching-block">
                    <div class="coaching-block-one">
                        <div class="inner-box">
                            <div class="image-box clearfix">
                                <figure class="image"><img src="{{ asset('assets/site-assets/images/resource/coaching-5.jpg') }}" alt=""></figure>
                                <figure class="image"><img src="{{ asset('assets/site-assets/images/resource/coaching-6.jpg') }}" alt=""></figure>
                            </div>
                            <div class="static-content">
                                <h3>Gre <br />Coaching</h3>
                                <div class="link"><a href="javascript:void(0);"><i class="icon-9"></i></a></div>
                            </div>
                            <div class="overlay-content">
                                <h3><a href="javascript:void(0);">Gre Coaching</a></h3>
                                <p>Sed gravida nisl a porta tincidunt. Integer aliquam nisi sit amet magna.</p>
                                <div class="link"><a href="javascript:void(0);"><i class="icon-9"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- coaching-section end -->


    <!-- chooseus-section -->
    {{-- <section class="chooseus-section p_relative hrwa">
        <div class="auto-container">
            <div class="sec-title centred mb_60">
                <span class="sub-title">Why Choose Us</span>
                <h2>Offer custom-made services that <br />our customer needs.</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{ asset('assets/site-assets/images/icons/icon-1.png') }}" alt=""></div>
                            <h3><a href="javascript:void(0);">Direct Interviews</a></h3>
                            <p>Where did this incorrect belief that everyone dislikes praising happiness come from?</p>
                            <div class="link-btn">
                                <a href="javascript:void(0);"><span>Read More</span><i class="icon-9"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{ asset('assets/site-assets/images/icons/icon-2.png') }}" alt=""></div>
                            <h3><a href="javascript:void(0);">Faster Processing</a></h3>
                            <p>Where did this incorrect belief that everyone dislikes praising happiness come from?</p>
                            <div class="link-btn">
                                <a href="javascript:void(0);"><span>Read More</span><i class="icon-9"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{ asset('assets/site-assets/images/icons/icon-3.png') }}" alt=""></div>
                            <h3><a href="javascript:void(0);">Visa Assistance</a></h3>
                            <p>Where did this incorrect belief that everyone dislikes praising happiness come from?</p>
                            <div class="link-btn">
                                <a href="javascript:void(0);"><span>Read More</span><i class="icon-9"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                    <div class="chooseus-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{ asset('assets/site-assets/images/icons/icon-4.png') }}" alt=""></div>
                            <h3><a href="javascript:void(0);">Cost-Effective</a></h3>
                            <p>Where did this incorrect belief that everyone dislikes praising happiness come from?</p>
                            <div class="link-btn">
                                <a href="javascript:void(0);"><span>Read More</span><i class="icon-9"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- chooseus-section end -->


    

    <!-- education-section -->
    {{-- <section class="education-section alternat-2 p_relative">
        <div class="bg-layer-2" style="background-image: url({{ asset('assets/site-assets/images/banner/banner-2.jpg') }});"></div>
        <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url({{ asset('assets/site-assets/images/background/education-bg.jpg') }});"></div>
        <figure class="image-layer wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('assets/site-assets/images/resource/men-1.png') }}" alt=""></figure>
        <div class="shape">
            <div class="shape-2" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-19.png') }});"></div>
        </div>
        <div class="auto-container">
            <div class="content_block_three">
                <div class="content-box p_relative d_block">
                    <h2>Looking for Quality <span>Education In</span> Abroad?</h2>
                    <p>Where did this incorrect belief that everyone dislikes praising happiness come from? Explain to me how this erroneous theory ended up being devised.</p>
                    <ul class="country-list">
                        <li>
                            <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-1.png') }}" alt=""></div>
                            <span>United Kingdom</span>
                        </li>
                        <li>
                            <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-2.png') }}" alt=""></div>
                            <span>Canada</span>
                        </li>
                        <li>
                            <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-3.png') }}" alt=""></div>
                            <span>China</span>
                        </li>
                        <li>
                            <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-4.png') }}" alt=""></div>
                            <span>Australia</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- education-section end -->


    <!-- passport-section -->
    {{-- <section class="passport-section centred p_relative">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{ asset('assets/site-assets/images/banner/banner-3.jpg') }});"></div>
            <!-- <div class="pattern-2" style="background-image: url(assets/images/shape/shape-21.png);"></div>
            <div class="pattern-3" style="background-image: url(assets/images/shape/shape-22.png);"></div> -->
        </div>
        <!-- <div class="auto-container">
            <div class="inner-box p_relative">
                <figure class="image-box"><img src="assets/images/icons/passport-1.png" alt=""></figure>
            </div>
        </div> -->
    </section> --}}
    <!-- passport-section end -->


    


    <!-- news-section -->
    {{-- <section class="news-section sec-pad">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-23.png') }});"></div>
            <div class="pattern-2" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-24.png') }});"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title centred mb_50">
                <span class="sub-title">Article</span>
                <h2>World Immigration News & Updates</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="javascript:void(0);"><img src="{{ asset('assets/site-assets/images/news/news-1.jpg') }}" alt=""></a></figure>
                            <div class="lower-content">
                                <ul class="post-info clearfix">
                                    <li><i class="icon-27"></i><a href="javascript:void(0);">By author</a></li>
                                    <li><i class="icon-28"></i>Feb 6, 2022 </li>
                                </ul>
                                <h3><a href="javascript:void(0);">Unsatiable Entreaties May Collecting Power.</a></h3>
                                <p>Where did this incorrect belief that everyone dislikes praising happiness come from.</p>
                                <div class="link-btn">
                                    <a href="javascript:void(0);"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="javascript:void(0);"><img src="{{ asset('assets/site-assets/images/news/news-2.jpg') }}" alt=""></a></figure>
                            <div class="lower-content">
                                <ul class="post-info clearfix">
                                    <li><i class="icon-27"></i><a href="javascript:void(0);">By author</a></li>
                                    <li><i class="icon-28"></i>Feb 5, 2022 </li>
                                </ul>
                                <h3><a href="javascript:void(0);">Why You Should Plan Your 2022 Trip Abroad</a></h3>
                                <p>Where did this incorrect belief that everyone dislikes praising happiness come from.</p>
                                <div class="link-btn">
                                    <a href="javascript:void(0);"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="javascript:void(0);"><img src="{{ asset('assets/site-assets/images/news/news-3.jpg') }}" alt=""></a></figure>
                            <div class="lower-content">
                                <ul class="post-info clearfix">
                                    <li><i class="icon-27"></i><a href="javascript:void(0);">By author</a></li>
                                    <li><i class="icon-28"></i>Feb 4, 2022 </li>
                                </ul>
                                <h3><a href="javascript:void(0);">Going Digital Key to Small Business Success</a></h3>
                                <p>Where did this incorrect belief that everyone dislikes praising happiness come from.</p>
                                <div class="link-btn">
                                    <a href="javascript:void(0);"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- news-section end -->
    
@endsection