@extends('layouts.web')

@section('title', 'How It Works')

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
                <h1>How It Works</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>How It Works</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- chooseus-section -->
    <section class="chooseus-section p_relative hrwa">
        <div class="auto-container">
            <div class="sec-title centred mb_60">
                <span class="sub-title">Step By Step Process</span>
                <h2>Your Chancenkarte Success, Powered by Expertise.</h2>
                <p>We spearhead your Chancenkarte journey, guiding you from initial consultation to a successful migration. Here's a step-by-step breakdown of our approach:</p>
            </div>
            <div class="row clearfix">
                
                <div class="col-lg-2 col-md-2 col-sm-12 chooseus-block"></div>
                    
                <div class="col-lg-8 col-md-8 col-sm-12 chooseus-block">
                    
                    
                    
                    <div class="chooseus-block-one wow fadeInUp animated fg" data-wow-delay="00ms" data-wow-duration="1500ms">
                        
                        <div class="inner-box">
                             <div class="col-lg-2 col-md-2 col-sm-12 chooseus-block">
                            <div class="icon-box d-flex justify-content-center"><img src="{{ asset('assets/site-assets/images/icons/icon-1.png') }}" alt=""></div>
                            </div>
                             <div class="col-lg-10 col-md-10 col-sm-12 chooseus-block">
                            <h3><a href="javascript:void(0);">Consultation & Eligibility Check</a></h3>
                            <p>Begin with a personalized assessment to verify your eligibility based on Germany's Chancenkarte criteria. We'll ensure you're aligned and ready to proceed.</p>
                            <div class="link-btn">
                                <a href="javascript:void(0);"><span>Check Your Eligibility Now</span></a>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    
                    
                          <div class="chooseus-block-one wow fadeInUp animated fg" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="col-lg-2 col-md-2 col-sm-12 chooseus-block">
                            <div class="icon-box d-flex justify-content-center"><img src="{{ asset('assets/site-assets/images/icons/icon-2.png') }}" alt=""></div>
                            </div>
                             <div class="col-lg-10 col-md-10 col-sm-12 chooseus-block">
                            <h3><a href="javascript:void(0);">Document Preparation & Verification</a></h3>
                            <p>Get a tailored document checklist and expert guidance on verifying your qualifications through Anabin and ZAB, ensuring your credentials are sound and watertight.</p>
                            {{-- <div class="link-btn">
                                <a href="javascript:void(0);"><span>Read More</span><i class="icon-9"></i></a>
                            </div> --}}
                        </div>
                        </div>
                    </div>
                    
                    
                    
                     <div class="chooseus-block-one wow fadeInUp animated fg" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                             <div class="col-lg-2 col-md-2 col-sm-12 chooseus-block">
                            <div class="icon-box d-flex justify-content-center"><img src="{{ asset('assets/site-assets/images/icons/icon-3.png') }}" alt=""></div>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12 chooseus-block">
                            <h3><a href="javascript:void(0);">Profile Enhancement</a></h3>
                            <p>Our specialists will refine your CV and LinkedIn profile, preparing you to stand out in the German job market.</p>
                            {{-- <div class="link-btn">
                                <a href="javascript:void(0);"><span>Read More</span><i class="icon-9"></i></a>
                            </div> --}}
                        </div>
                        </div>
                    </div>
                    
                    
                    
                    
                     <div class="chooseus-block-one wow fadeInUp animated fg" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="col-lg-2 col-md-2 col-sm-12 chooseus-block">
                            <div class="icon-box d-flex justify-content-center"><img src="{{ asset('assets/site-assets/images/icons/icon-4.png') }}" alt=""></div></div>
                            <div class="col-lg-10 col-md-10 col-sm-12 chooseus-block">
                            <h3><a href="javascript:void(0);">Application Submission</a></h3>
                            <p>With all documents in order, we assist you in the final submission, ensuring compliance.</p>
                            {{-- <div class="link-btn">
                                <a href="javascript:void(0);"><span>Read More</span><i class="icon-9"></i></a>
                            </div> --}}
                        </div>
                        </div>
                    </div>
                    
                    
                     <div class="chooseus-block-one wow fadeInUp animated fg" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="col-lg-2 col-md-2 col-sm-12 chooseus-block">
                            <div class="icon-box d-flex justify-content-center"><img src="{{ asset('assets/site-assets/images/icons/icon-2.png') }}" alt=""></div>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12 chooseus-block">
                            <h3><a href="javascript:void(0);">Post-Approval Support</a></h3>
                            <p>Once approved, we provide resources to augment your transition into Germany, including local registration and integration guidance.</p>
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
    <section class="about-section p_relative hrwa">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-6.png') }});"></div>
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4 col-sm-12 image-column">
                    <div class="image_block_one">
                        <div class="image-box p_relative d_block">
                            <figure class="image image-1"><img src="{{ asset('assets/site-assets/images/resource/about-1.jpg') }}" alt=""></figure>
                            <figure class="image image-2"><img src="{{ asset('assets/site-assets/images/resource/about-2.jpg') }}" alt=""></figure>
                            <!--<figure class="certificate-box"><img src="{{ asset('assets/site-assets/images/icons/certificate-1.png') }}" alt=""></figure>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 content-column">
                    <div class="content_block_one">
                        <div class="content-box p_relative ml_110">
                            <div class="sec-title mb_30">
                                {{-- <span class="sub-title">We are looking for</span> --}}
                                <h2>Ready to Begin?</h2>
                            </div>
                            <div class="text mb_30">
                                <p>Choose Your Package</p>
                            </div>
                            <div class="btn-box">
                                <a href="{{ route('service') }}" class="theme-btn btn-one"><span>Packages</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-three end -->
    
@endsection