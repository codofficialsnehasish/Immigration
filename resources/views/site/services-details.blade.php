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
        <!-- <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-67.png') }});"></div> -->
        <div class="auto-container">
            <div class="content-box">
                <!-- <h1>Services Details</h1> -->
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('service') }}">Services</a></li>
                    <li>Service Details</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->




    <!-- visa-section -->
    {{-- <section class="visa-section sec-pad">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-5.png') }});"></div>
        <div class="auto-container">
            <div class="row">
                <div class="col-md-6">
                    <figure class="image-box"><img src="{{ asset($service->image) }}" alt=""></figure>
                </div>
                <div class="col-md-6">
                    <p>{{ $service->name }}</p>
                    <p>{!! $service->description !!}</p>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- visa-section end -->

    

    @if($id == 1)

    <section class="visa-section sec-pad">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-5.png') }});"></div>
        <div class="auto-container">
            <div class="row">
                <div class="col-md-4">
                    <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/SERVICE-1.png') }}" alt=""></figure>
                </div>
                <div class="col-md-8 yter">
                    <h2><b>Essential Chancenkarte Guidance</b></h2>
                    <p>Our <b>Essential Chancenkarte Guidance</b> package provides the foundational 
                        support you need to create a strong visa application. From eligibility assessments 
                        to customized document checklists, we guide you through every step, ensuring 
                        your application meets Germany’s requirements. With tailored CV and LinkedIn 
                        reviews, job search strategies, and comprehensive financial and health insurance 
                        advice, this service is perfect for those just starting their Chancenkarte journey.
                    </p>
                    <ul class="list-style-one clearfix">
                        <li> <b>Eligibility & Points Assessment: </b> A precise evaluation of your profile 
                            against Germany’s Chancenkarte criteria.</li>
                        <li><b>Anabin & ZAB Guidance: </b>Step-by-step guidance on using Anabin for 
                            degree recognition and deep insights into ZAB processes.</li>
                        <li><b>Customized Document Checklist: </b>Comprehensive checklist of required 
                            documents, including any certification requirements for your educational 
                            background.</li>
                        <li><b>CV & LinkedIn Review: </b>Customized assistance to refine your CV and 
                            LinkedIn profile. We also create a concise interview summary to highlight 
                            your strengths for a competitive edge.</li>
                        <li><b>Job Search Strategy: </b>Insider recommendations on job boards and 
                            networking approaches in Germany.</li>
                        <li><b>Blocked Account Information: </b>Clear guidance on setting up a blocked 
                            account to meet financial requirements.</li>
                        <li><b>Health Insurance Overview: </b>Overview of compliant health insurance 
                            options.</li>
                        <li><b>Email Support: </b>Dedicated support throughout your journey.</li>
                    </ul>
                    <p style="font-style: italic;font-size: 16px;"><i><b>Ideal for:</b> Individuals in the initial stages of their Chancenkarte journey, seeking 
                        high-quality, expert guidance for a confident application.
                        </i></p>
                    {{-- <p>Kickstart your Chancenkarte journey with expert assistance.</p> --}}
                    <!--<p class="csi"><b>Price:</b> $999 – Start Now with Confidence.</p>-->
                    <p class="csi"><b>Price:</b> $999 </p>
                    <div class="btn-box ghse">
                        <a href="{{ route('contact') }}" class="theme-btn btn-two"><span>Get Started with Expert Guidance</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @elseif($id == 2)

    <section class="visa-section sec-pad yter">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-5.png') }});"></div>
        <div class="auto-container">
            <div class="row">
                <div class="col-md-4">
                    <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/SERVICE-2.png') }}" alt=""></figure>
                </div>
                <div class="col-md-8">
                    <h2><b>Comprehensive Chancenkarte Concierge</b></h2>
                    <p>For a flawless application and end-to-end solution, our <b>Comprehensive 
                        Chancenkarte Concierge</b> package offers exhaustive assistance throughout your 
                        application process. We provide personalized eligibility optimization, detailed 
                        Anabin and ZAB support, and job search strategies to help you succeed in 
                        Germany. Along with post-approval support for residency and integration, this 
                        premium service is ideal for those seeking full guidance from application to 
                        settling in Germany. <b>Eligibility Optimization:</b> Personalized strategies designed 
                        by our immigration specialists to maximize your Chancenkarte potential.
                    </p>
                    <ul class="list-style-one clearfix">
                        {{-- <li> <b>Eligibility Optimization: </b> Personalized strategies designed by our 
                            immigration specialists to maximize your Chancenkarte potential.</li> --}}
                        <li><b>Anabin, ZAB, and Vocational Qualification Recognition: </b>Comprehensive support for accurate qualification recognition.</li>
                        <li><b>Federal Employment Agency Registration: </b>Assistance with 
                            Bundesagentur für Arbeit registration for employment readiness.</li>
                        <li><b>CV, LinkedIn, Cover Letter & Interview Coaching: </b>Guided coaching 
                            and profile enhancements for professional success.</li>
                        <li><b>Custom Job Search Strategy: </b>Advanced networking strategies and 
                            employer connections.</li>
                        <li><b>Blocked Account & Health Insurance Assistance: </b>Guidance through 
                            financial and insurance processes.</li>
                        <li><b>Post-Approval Support: </b>Resources for residency registration and 
                            integration into German society.</li>
                    </ul>
                    <span><p ><b>Ideal for:</b> <i>Individuals seeking premium, end-to-end support through their 
                        Chancenkarte application journey and transition to Germany.
                        </i></p></span>
                    {{-- <p>Go all-in with premium support to make your move to Germany stress-free.</p> --}}
                    <!--<p class="csi"><b>Price:</b> $1799 – Your success starts here.</p>-->
                    <p class="csi"><b>Price:</b> $1799 </p>
 
                    <div class="btn-box ghse">
                        <a href="{{ route('contact') }}" class="theme-btn btn-two"><span>Choose Complete Care</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif 
    
@endsection