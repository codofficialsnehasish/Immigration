@extends('layouts.web')

@section('title', 'About')

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
                <h1>About Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>About Chancenkarte</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- about-style-three -->
    <section class="about-section p_relative hrwa">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-6.png') }});"></div>
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                    <div class="image_block_one">
                        <div class="image-box p_relative d_block">
                            <figure class="image image-1"><img src="{{ asset('assets/site-assets/images/resource/about-1.jpg') }}" alt=""></figure>
                            <figure class="image image-2"><img src="{{ asset('assets/site-assets/images/resource/about-2.jpg') }}" alt=""></figure>
                            <figure class="certificate-box"><img src="{{ asset('assets/site-assets/images/icons/certificate-1.png') }}" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-column abou_tm">
                    <div class="content_block_one">
                        <div class="content-box p_relative ml_110">
                            <div class="sec-title mb_30">
                                <!-- <span class="sub-title">About Us</span> -->
                                <h2>Welcome to Immigration — Your Trusted Partner to a New Life in Germany. </h2>
                            </div>
                            <div class="text mb_30">
                                <p>We specialize in helping skilled professionals obtain the Chancenkarte Visa (also 
                                    known as the Opportunity Card) to unlock exciting career opportunities in 
                                    Germany. With extensive expertise in German immigration policies and a 
                                    commitment to providing personalized visa guidance, we ensure a smooth and 
                                    efficient application process. Our team empowers job seekers by offering in-depth knowledge of the Chancenkarte visa application process, job market 
                                    insights, and settlement strategies in Germany. Whether you are applying for the 
                                    Opportunity Card or seeking advice on German work visas, we are your trusted 
                                    partners, providing reliable solutions for long-term career success in one of 
                                    Europe’s leading economies.
                                    </p>
                            </div>
                            {{-- <div class="list-inner mb_50 p_relative">
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
                            </div> --}}
                            <div class="btn-box">
                                <a href="{{ route('contact') }}" class="theme-btn btn-one"><span>Get an Expert Consultation Today</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-three end -->


    <!-- feature-section -->
    <section class="feature-section about-page alternat-3 pb_90">
        <div class="auto-container">
            <div class="inner-container">
                <div class="shape-2" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-41.png') }});"></div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box hsae">
                                <div class="icon-box"><i class="icon-17"></i></div>
                                <h3><a href="javascript:void(0);">Mission</a></h3>
                                <p>Our mission is to provide tailored, expert guidance that ensures an effortless, 
                                    results-driven journey for every client. We are committed to empowering skilled 
                                    professionals to accomplish their career and lifestyle goals in <b>Germany</b>, offering 
                                    clear, precise, and confident support throughout the <b>Chancenkarte Visa</b>
                                    procedure.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box hsae">
                                <div class="icon-box"><i class="icon-19"></i></div>
                                <h3><a href="javascript:void(0);">Vision</a></h3>
                                <p>Our vision is to be the most trusted and reliable partner in <b>German immigration 
                                    consulting</b>, setting the highest standard for excellence in <b>Chancenkarte 
                                    services</b>. We aim to empower our clients with transparent, professional guidance, 
                                    making their journey to <b>Germany</b> efficient, successful, and hassle-free. As a 
                                    strategic ally, we are dedicated to helping our clients turn their dreams into reality 
                                    with confidence and expertise.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-section end -->


    <!-- countries-style-three -->
    {{-- <section class="countries-style-three alternat-2 sec-pad">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-63.png') }});"></div>
        <div class="auto-container">
            <div class="sec-title mb_60 centred">
                <span class="sub-title">Countries We Offer</span>
                <h2>Immigration Officials approvals for foreign <br />citizens can vary by country.</h2>
            </div>
            <div class="tabs-box">
                <div class="tab-btn-box mb_50">
                    <div class="tab-btns tab-buttons">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 btn-column">
                                <div class="tab-btn active-btn" data-tab="#tab-4"><h3><i class="icon-33"></i>Education</h3></div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 btn-column">
                                <div class="tab-btn" data-tab="#tab-5"><h3><i class="icon-34"></i>Immigration</h3></div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 btn-column">
                                <div class="tab-btn" data-tab="#tab-6"><h3><i class="icon-14"></i>Business</h3></div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 btn-column">
                                <div class="tab-btn" data-tab="#tab-7"><h3><i class="icon-17"></i>Tourist</h3></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-4">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                                <div class="countries-block-four">
                                    <div class="inner-box">
                                        <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-13.png') }}" alt=""></div>
                                        <h3><a href="javascript:void(0);">United Kingdom</a></h3>
                                        <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget</p>
                                        <div class="text">Visa Type :</div>
                                        <span class="designation">Working Visa, Job Visa</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                                <div class="countries-block-four">
                                    <div class="inner-box">
                                        <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-14.png') }}" alt=""></div>
                                        <h3><a href="javascript:void(0);">Bahamas</a></h3>
                                        <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget</p>
                                        <div class="text">Visa Type :</div>
                                        <span class="designation">Eudcation Visa, Only System</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                                <div class="countries-block-four">
                                    <div class="inner-box">
                                        <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-15.png') }}" alt=""></div>
                                        <h3><a href="javascript:void(0);">Canada</a></h3>
                                        <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget</p>
                                        <div class="text">Visa Type :</div>
                                        <span class="designation">Resident Visa Job Visa</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                                <div class="countries-block-four">
                                    <div class="inner-box">
                                        <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-16.png') }}" alt=""></div>
                                        <h3><a href="javascript:void(0);">Brazil</a></h3>
                                        <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget</p>
                                        <div class="text">Visa Type :</div>
                                        <span class="designation">Student Visa & Admission, Visitor Visa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-5">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                                <div class="countries-block-four">
                                    <div class="inner-box">
                                        <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-14.png') }}" alt=""></div>
                                        <h3><a href="javascript:void(0);">Bahamas</a></h3>
                                        <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget</p>
                                        <div class="text">Visa Type :</div>
                                        <span class="designation">Eudcation Visa, Only System</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                                <div class="countries-block-four">
                                    <div class="inner-box">
                                        <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-13.png') }}" alt=""></div>
                                        <h3><a href="javascript:void(0);">United Kingdom</a></h3>
                                        <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget</p>
                                        <div class="text">Visa Type :</div>
                                        <span class="designation">Working Visa, Job Visa</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                                <div class="countries-block-four">
                                    <div class="inner-box">
                                        <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-15.png') }}" alt=""></div>
                                        <h3><a href="javascript:void(0);">Canada</a></h3>
                                        <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget</p>
                                        <div class="text">Visa Type :</div>
                                        <span class="designation">Resident Visa Job Visa</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                                <div class="countries-block-four">
                                    <div class="inner-box">
                                        <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-16.png') }}" alt=""></div>
                                        <h3><a href="javascript:void(0);">Brazil</a></h3>
                                        <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget</p>
                                        <div class="text">Visa Type :</div>
                                        <span class="designation">Student Visa & Admission, Visitor Visa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-6">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                                <div class="countries-block-four">
                                    <div class="inner-box">
                                        <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-15.png') }}" alt=""></div>
                                        <h3><a href="javascript:void(0);">Canada</a></h3>
                                        <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget</p>
                                        <div class="text">Visa Type :</div>
                                        <span class="designation">Resident Visa Job Visa</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                                <div class="countries-block-four">
                                    <div class="inner-box">
                                        <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-13.png') }}" alt=""></div>
                                        <h3><a href="javascript:void(0);">United Kingdom</a></h3>
                                        <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget</p>
                                        <div class="text">Visa Type :</div>
                                        <span class="designation">Working Visa, Job Visa</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                                <div class="countries-block-four">
                                    <div class="inner-box">
                                        <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-14.png') }}" alt=""></div>
                                        <h3><a href="javascript:void(0);">Bahamas</a></h3>
                                        <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget</p>
                                        <div class="text">Visa Type :</div>
                                        <span class="designation">Eudcation Visa, Only System</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                                <div class="countries-block-four">
                                    <div class="inner-box">
                                        <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-16.png') }}" alt=""></div>
                                        <h3><a href="javascript:void(0);">Brazil</a></h3>
                                        <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget</p>
                                        <div class="text">Visa Type :</div>
                                        <span class="designation">Student Visa & Admission, Visitor Visa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-7">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                                <div class="countries-block-four">
                                    <div class="inner-box">
                                        <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-13.png') }}" alt=""></div>
                                        <h3><a href="javascript:void(0);">United Kingdom</a></h3>
                                        <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget</p>
                                        <div class="text">Visa Type :</div>
                                        <span class="designation">Working Visa, Job Visa</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                                <div class="countries-block-four">
                                    <div class="inner-box">
                                        <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-16.png') }}" alt=""></div>
                                        <h3><a href="javascript:void(0);">Brazil</a></h3>
                                        <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget</p>
                                        <div class="text">Visa Type :</div>
                                        <span class="designation">Student Visa & Admission, Visitor Visa</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                                <div class="countries-block-four">
                                    <div class="inner-box">
                                        <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-14.png') }}" alt=""></div>
                                        <h3><a href="javascript:void(0);">Bahamas</a></h3>
                                        <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget</p>
                                        <div class="text">Visa Type :</div>
                                        <span class="designation">Eudcation Visa, Only System</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                                <div class="countries-block-four">
                                    <div class="inner-box">
                                        <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-15.png') }}" alt=""></div>
                                        <h3><a href="javascript:void(0);">Canada</a></h3>
                                        <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget</p>
                                        <div class="text">Visa Type :</div>
                                        <span class="designation">Resident Visa Job Visa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- countries-style-three end -->


    <!-- countries-style-five -->
    {{-- <section class="countries-style-five p_relative">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-61.png') }});"></div>
            <div class="pattern-2" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-62.png') }});"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title mb_60 light">
                <span class="sub-title">Countries We Offer</span>
                <h2>Apply For Quick Visa</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                    <div class="countries-block-five wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('assets/site-assets/images/resource/countries-9.jpg') }}" alt=""></figure>
                                <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-3.png') }}" alt=""></div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="javascript:void(0);">China <span>Visa</span></a></h5>
                                <span class="text">Avenue, Jersey</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                    <div class="countries-block-five wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('assets/site-assets/images/resource/countries-10.jpg') }}" alt=""></figure>
                                <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-5.png') }}" alt=""></div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="javascript:void(0);">United Kingdom <span>Visa</span></a></h5>
                                <span class="text">Asheville</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                    <div class="countries-block-five wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('assets/site-assets/images/resource/countries-11.jpg') }}" alt=""></figure>
                                <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-8.png') }}" alt=""></div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="javascript:void(0);">Brazil <span>Visa</span></a></h5>
                                <span class="text">Amsterdam</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 countries-block">
                    <div class="countries-block-five wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('assets/site-assets/images/resource/countries-12.jpg') }}" alt=""></figure>
                                <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-4.png') }}" alt=""></div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="javascript:void(0);">Australia <span>Visa</span></a></h5>
                                <span class="text">Queensland</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- countries-style-five end -->


    <!-- chooseus-section -->
    {{-- <section class="chooseus-section p_relative">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-71.png') }});"></div>
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
                                <a href="javascript:void(0);"><span>Read More</span></a>
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
                                <a href="javascript:void(0);"><span>Read More</span></a>
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
                                <a href="javascript:void(0);"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- chooseus-section end -->


    <!-- clients-section -->
    <!-- <section class="clients-section about-page alternat-2 p_relative">
        <div class="auto-container">
            <div class="inner-box p_relative pt_90">
                <ul class="clients-list">
                    <li class="clients-logo"><a href="javascript:void(0);"><img src="assets/images/clients/clients-1.png" alt=""></a></li>
                    <li class="clients-logo"><a href="javascript:void(0);"><img src="assets/images/clients/clients-2.png" alt=""></a></li>
                    <li class="clients-logo"><a href="javascript:void(0);"><img src="assets/images/clients/clients-3.png" alt=""></a></li>
                    <li class="clients-logo"><a href="javascript:void(0);"><img src="assets/images/clients/clients-4.png" alt=""></a></li>
                    <li class="clients-logo"><a href="javascript:void(0);"><img src="assets/images/clients/clients-5.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </section> -->
    <!-- clients-section end -->

    @if($teams->isNotEmpty())
    <!-- team-section -->
    <section class="team-section alternat-2 p_relative centred">
        <div class="pattern-layer">
            <div class="pattern-4" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-30.png') }});"></div>
            <div class="pattern-5" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-31.png') }});"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title mb_50 centred">
                <span class="sub-title">Our People</span>
                <h2>Meet the Experts Behind Your Chancenkarte Success</h2>
                <p>Our team comprises dedicated immigration specialists, career consultants, and regulatory experts who bring extensive knowledge of Germany’s immigration laws. With extensive experience in immigration and job market trends, our team offers personalized, reliable support tailored to your unique profile and goals. We’re committed to helping you succeed every step of the way.</p>
            </div>
            <div class="row clearfix">
                @foreach($teams as $team)
                <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset($team->image) }}" alt=""></figure>
                            <div class="lower-content">
                                <div class="share-box">
                                    <div class="share-icon"><i class="icon-26"></i></div>
                                    <ul class="social-links clearfix">
                                        <li><a href="javascript:void(0);"><i class="icon-7"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-6"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-4"></i></a></li>
                                    </ul>
                                </div>
                                <h3><a href="javascript:void(0);">{{ $team->name }}</a></h3>
                                <span class="designation">{{ $team->position }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- team-section end -->
    @endif
    
@endsection