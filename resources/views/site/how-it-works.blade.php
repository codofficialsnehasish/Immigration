@extends('layouts.web')

@section('title', 'How It Works')

@section('css')
<link href="{{ asset('assets/site-assets/css/elements-css/page-title.css') }}" rel="stylesheet">
<link href="{{ asset('assets/site-assets/css/elements-css/chooseus.css') }}" rel="stylesheet">
<link href="{{ asset('assets/site-assets/css/elements-css/team.css') }}" rel="stylesheet">
@endsection

@section('content')
    
    <!-- page-title -->
    <section class="page-title centred p_relative"> {{--  gered --}}
        <div class="bg-layer" style="background-image: url({{ asset('assets/site-assets/images/resource/how-it-works.jpg') }});"></div>
        <!-- <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-67.png') }});"></div> -->
        <div class="auto-container">
            <div class="content-box">
                <!-- <h1>How It Works</h1> -->
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>How It Works</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- chooseus-section -->
    <section class="chooseus-section p_relative hrwa gred_1">
        <div class="auto-container">
            <div class="sec-title centred mb_60">
                <span class="sub-title">Step By Step Process</span>
                <h2>Your Chancenkarte Success, Powered by Expertise.</h2>
                <p>Guiding you from initial consultation to a successful migration. Here's a step-by-step breakdown of our approach:</p>
            </div>
            <div class="row clearfix">
                
                <div class="col-lg-2 col-md-2 col-sm-12 chooseus-block"></div>
                    
                <div class="col-lg-8 col-md-8 col-sm-12 chooseus-block">
                    
                    
                    
                    <div class="chooseus-block-one wow fadeInUp animated fg" data-wow-delay="00ms" data-wow-duration="1500ms">
                        
                        <div class="inner-box">
                             <div class="col-lg-2 col-md-2 col-sm-12 chooseus-block">
                            <div class="icon-box d-flex justify-content-center"><img src="{{ asset('assets/site-assets/images/icons/new-site-icon/icon-1.png') }}" alt=""></div>
                            </div>
                             <div class="col-lg-10 col-md-10 col-sm-12 chooseus-block">
                            <h3><a href="javascript:void(0);">Consultation & Eligibility Check</a></h3>
                            <p>Begin with a personalized assessment to confirm your Chancenkarte
                                eligibility based on Germany’s criteria, ensuring you’re aligned for 
                                success.</p>


                             
                           <!--   <div class="btn-box ddew">
                               <a href="javascript:void(0);" class="theme-btn btn-one"><span>Check Your Eligibility Now</span></a>
                            </div>
 -->


                            </div>
                            
                        </div>
                    </div>
                    
                    
                    
                          <div class="chooseus-block-one wow fadeInUp animated fg" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="col-lg-2 col-md-2 col-sm-12 chooseus-block">
                            <div class="icon-box d-flex justify-content-center"><img src="{{ asset('assets/site-assets/images/icons/new-site-icon/icon-2.png') }}" alt=""></div>
                            </div>
                             <div class="col-lg-10 col-md-10 col-sm-12 chooseus-block">
                            <h3><a href="javascript:void(0);">Document Preparation & Verification</a></h3>
                            <p>Receive a custom document checklist and expert guidance on Anabin and 
                                ZAB qualification verification, ensuring your credentials meet German 
                                standards.</p>
                            {{-- <div class="link-btn">
                                <a href="javascript:void(0);"><span>Read More</span><i class="icon-9"></i></a>
                            </div> --}}
                        </div>
                        </div>
                    </div>
                    
                    
                    
                     <div class="chooseus-block-one wow fadeInUp animated fg" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                             <div class="col-lg-2 col-md-2 col-sm-12 chooseus-block">
                            <div class="icon-box d-flex justify-content-center"><img src="{{ asset('assets/site-assets/images/icons/new-site-icon/icon-3.png') }}" alt=""></div>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12 chooseus-block">
                            <h3><a href="javascript:void(0);">Profile Enhancement</a></h3>
                            <p>Refine your CV and LinkedIn profile with our experts, helping you stand 
                                out in Germany’s job market.</p>
                            {{-- <div class="link-btn">
                                <a href="javascript:void(0);"><span>Read More</span><i class="icon-9"></i></a>
                            </div> --}}
                        </div>
                        </div>
                    </div>
                    
                    
                    
                    
                     <div class="chooseus-block-one wow fadeInUp animated fg" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="col-lg-2 col-md-2 col-sm-12 chooseus-block">
                            <div class="icon-box d-flex justify-content-center"><img src="{{ asset('assets/site-assets/images/icons/new-site-icon/icon-4.png') }}" alt=""></div></div>
                            <div class="col-lg-10 col-md-10 col-sm-12 chooseus-block">
                            <h3><a href="javascript:void(0);">Application Submission</a></h3>
                            <p>We’ll assist in submitting your application with complete compliance for 
                                the best possible outcome.
                                </p>
                            {{-- <div class="link-btn">
                                <a href="javascript:void(0);"><span>Read More</span><i class="icon-9"></i></a>
                            </div> --}}
                        </div>
                        </div>
                    </div>
                    
                    
                     <div class="chooseus-block-one wow fadeInUp animated fg" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="col-lg-2 col-md-2 col-sm-12 chooseus-block">
                            <div class="icon-box d-flex justify-content-center"><img src="{{ asset('assets/site-assets/images/icons/new-site-icon/icon-5.png') }}" alt=""></div>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12 chooseus-block">
                            <h3><a href="javascript:void(0);">Post-Approval Support</a></h3>
                            <p>Benefit from resources to support your transition, including guidance on 
                                local registration and integration into German society.</p>
                            {{-- <div class="link-btn">
                                <a href="javascript:void(0);"><span>Read More</span><i class="icon-9"></i></a>
                            </div> --}}
                        </div>
                        </div>
                    </div>
                    
                </div>
            
                </div>
               

            </div>
            
            
            
            
            
            
            
            
            {{-- <div class="row">
                <div class="btn-box">
                    <a href="{{ route('service') }}" class="theme-btn btn-one"><span>Ready to Begin? Choose Your Package</span></a>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- chooseus-section end -->

    <!-- about-style-three -->
    <section class="about-section p_relative hrwa fufdg">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/banner/banner-6.jpg') }});"></div>
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4 col-sm-12 image-column">
                    <div class="image_block_one">
                       <!--  <div class="image-box p_relative d_block">
                            <figure class="image image-1"><img src="{{ asset('assets/site-assets/images/resource/about-1.jpg') }}" alt=""></figure>
                            <figure class="image image-2"><img src="{{ asset('assets/site-assets/images/resource/about-2.jpg') }}" alt=""></figure>
                            <figure class="certificate-box"><img src="{{ asset('assets/site-assets/images/icons/certificate-1.png') }}" alt=""></figure>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 content-column fhto">
                    <div class="content_block_one">
                        <div class="content-box p_relative ml_110">
                            <div class="sec-title dfew">
                                {{-- <span class="sub-title">We are looking for</span> --}}
                                <h2>Ready to Begin?</h2>
                            </div>
                            <div class="btn-box">
                                <a href="{{ route('service') }}" class="theme-btn btn-one"><span>Choose Your Package</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-three end -->
    
@endsection