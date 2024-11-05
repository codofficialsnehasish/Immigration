@extends('layouts.web')

@section('title', 'Home')

@section('content')

    <!-- banner-style-three -->
    <section class="banner-style-three p_relative">
        <div class="pattern-layer">
            <!-- <div class="pattern-1" style="background-image: url(assets/images/shape/shape-38.png);"></div>
            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-39.png);"></div> -->
            @if(!empty($banner->image))
            <div class="pattern-3" style="background-image: url({{ asset($banner->image) }});"></div>
            @else
            <div class="pattern-3" style="background-image: url({{ asset('assets/site-assets/images/banner/banner-1.jpg') }});"></div>
            @endif
        </div>
        <!-- <figure class="image-layer"><img src="assets/images/banner/banner-img-2.png" alt=""></figure> -->
        <!-- <div class="auto-container">
            <div class="content-box">
                <h2>People Immigration <span>Confidently...</span></h2>
                <p>MCS has been recruiting and prepping talented professionals for over twenty years. We provide a unique value proposition.</p>
                <div class="btn-box">
                    <a href="{{ route('home') }}" class="theme-btn btn-two"><span>View The Categories</span></a>
                </div>
            </div> 
        </div> -->
    </section>
    <!-- banner-style-three end -->


    <!-- feature-section -->
    <section class="feature-section alternat-3">
        <div class="auto-container">
            <div class="inner-container">
                <!-- <div class="shape-2" style="background-image: url(assets/images/shape/shape-41.png);"></div> -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <!-- <div class="icon-box"><i class="icon-17"></i></div> -->
                                <h3><a href="{{ route('home') }}">People Immigration Confidently...</a></h3>
                                <p>MCS has been recruiting and prepping talented professionals for over twenty years. We provide a unique value proposition.</p>
                                <div class="btn-box">
                                    <a href="{{ route('home') }}" class="theme-btn btn-two"><span>View The Categories</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </section>
    <!-- feature-section end -->


    <!-- about-style-three -->
    <section class="about-style-three p_relative">
        <div class="pattern-layer">
            <div class="pattern-2" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-43.png') }});"></div>
            <div class="pattern-1" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-42.png') }});"></div>
        </div>
        <figure class="image-layer"><img src="{{ asset('assets/site-assets/images/resource/men-2.png') }}" alt=""></figure>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 content-column offset-lg-3">
                    <div class="content_block_six">
                        <div class="content-box mr_20">
                            <div class="sec-title mb_20">
                                <span class="sub-title">Who we are?</span>
                                <h2>Leading firm for immigration services.</h2>
                            </div>
                            <div class="text mb_30">
                                <p>Sed gravida nisl a porta tincidunt. Integer aliquam nisi sit amet magna suscipit, fermentum mattis erat rutrum.Porta semper lacus cursus.</p>
                            </div>
                            <div class="inner-box mb_40">
                                <div class="single-item">
                                    <div class="icon-box"><img src="assets/images/icons/icon-13.png" alt=""></div>
                                    <h5>Overseas education and study visa consultants.</h5>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><img src="assets/images/icons/icon-14.png" alt=""></div>
                                    <h5>Top-ranked universities guarantee admissions.</h5>
                                </div>
                            </div>
                            <div class="btn-box">
                                <a href="{{ route('about') }}" class="theme-btn btn-two"><span>More Details</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                    <div class="image-inner clearfix">
                        <!-- <div class="image-shape" style="background-image: url(assets/images/shape/shape-44.png);"></div> -->
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('assets/site-assets/images/resource/about-3.jpg') }}" alt=""></figure>
                        </div>
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('assets/site-assets/images/resource/about-4.jpg') }}" alt=""></figure>
                            <figure class="image"><img src="{{ asset('assets/site-assets/images/resource/about-5.jpg') }}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-three end -->


    <!-- coaching-style-three -->
    <section class="coaching-style-three">
        <div class="outer-container clearfix">
            <div class="coaching-block-three">
                <div class="inner-box">
                    <div class="static-content">
                        <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/coaching-7.jpg') }}" alt=""></figure>
                        <div class="content-box">
                            <div class="icon-box"><i class="icon-38"></i></div>
                            <h3><a href="javascript:void(0);">TOEFL Coaching</a></h3>
                            <p>Equaly blame belongs those fail their all duty through weak shrinking.</p>
                        </div>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/coaching-7.jpg') }}" alt=""></figure>
                        <div class="content-box">
                            <div class="icon-box"><i class="icon-38"></i></div>
                            <h3><a href="javascript:void(0);">TOEFL Coaching</a></h3>
                            <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget. Vivamus venenatis turpis lacinia, congue massa in, accumsan orci.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coaching-block-three">
                <div class="inner-box">
                    <div class="static-content">
                        <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/coaching-8.jpg') }}" alt=""></figure>
                        <div class="content-box">
                            <div class="icon-box"><i class="icon-39"></i></div>
                            <h3><a href="javascript:void(0);">Graduate Re-Exam</a></h3>
                            <p>Equaly blame belongs those fail their all duty through weak shrinking.</p>
                        </div>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/coaching-8.jpg') }}" alt=""></figure>
                        <div class="content-box">
                            <div class="icon-box"><i class="icon-39"></i></div>
                            <h3><a href="javascript:void(0);">Graduate Re-Exam</a></h3>
                            <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget. Vivamus venenatis turpis lacinia, congue massa in, accumsan orci.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coaching-block-three">
                <div class="inner-box">
                    <div class="static-content">
                        <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/coaching-9.jpg') }}" alt=""></figure>
                        <div class="content-box">
                            <div class="icon-box"><i class="icon-40"></i></div>
                            <h3><a href="javascript:void(0);">Scholastic Apti</a></h3>
                            <p>Equaly blame belongs those fail their all duty through weak shrinking.</p>
                        </div>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/coaching-9.jpg') }}" alt=""></figure>
                        <div class="content-box">
                            <div class="icon-box"><i class="icon-40"></i></div>
                            <h3><a href="javascript:void(0);">Scholastic Apti</a></h3>
                            <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget. Vivamus venenatis turpis lacinia, congue massa in, accumsan orci.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coaching-block-three">
                <div class="inner-box">
                    <div class="static-content">
                        <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/coaching-10.jpg') }}" alt=""></figure>
                        <div class="content-box">
                            <div class="icon-box"><i class="icon-41"></i></div>
                            <h3><a href="javascript:void(0);">Management Test</a></h3>
                            <p>Equaly blame belongs those fail their all duty through weak shrinking.</p>
                        </div>
                    </div>
                    <div class="overlay-content">
                        <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/coaching-10.jpg') }}" alt=""></figure>
                        <div class="content-box">
                            <div class="icon-box"><i class="icon-41"></i></div>
                            <h3><a href="javascript:void(0);">Management Test</a></h3>
                            <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget. Vivamus venenatis turpis lacinia, congue massa in, accumsan orci.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- coaching-style-three end -->


    <!-- help-section -->
    <section class="help-section p_relative">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-45.png') }});"></div>
            <div class="pattern-2" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-46.png') }});"></div>
            <div class="pattern-3" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-47.png') }});"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title light mb_60">
                <span class="sub-title">HOW WE HELP CLIENTS</span>
                <h2>Follow the steps on the website <br />to apply for the visa online.</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <div class="inner-box">
                            <div class="icon-box">
                                <div class="icon mb_18"><i class="icon-42"></i></div>
                                <span class="count-text">01</span>
                            </div>
                            <h3><a href="javascript:void(0);">Fill In The <br />Required Form</a></h3>
                            <p>Equaly blame belongs those fail their all duty through weak shrinking.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="count-text">02</span>
                                <div class="icon mt_18"><i class="icon-43"></i></div>
                            </div>
                            <h3><a href="javascript:void(0);">Submit All Your <br />Attested Documents</a></h3>
                            <p>Equaly blame belongs those fail their all duty through weak shrinking.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <div class="inner-box">
                            <div class="icon-box">
                                <div class="icon mb_13"><i class="icon-44"></i></div>
                                <span class="count-text">03</span>
                            </div>
                            <h3><a href="javascript:void(0);">Get Ready To <br />Receive your Visa</a></h3>
                            <p>Equaly blame belongs those fail their all duty through weak shrinking.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- help-section end -->


    <!-- countries-style-four end -->
    <section class="countries-style-four sec-pad">
        <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-48.png') }});"></div>
        <div class="auto-container">
            <div class="sec-title centred mb_60">
                <span class="sub-title">Countries We Offer</span>
                <h2>Immigration Officials approvals for foreign <br />citizens can vary by country.</h2>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                <div class="countries-block-four">
                    <div class="inner-box">
                        <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-13.png') }}" alt=""></div>
                        <h3><a href="javascript:void(0);">United Kingdom</a></h3>
                        <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget</p>
                        <div class="text">Visa Type :</div>
                        <span class="designation">Working Visa, Job Visa</span>
                    </div>
                </div>
                <div class="countries-block-four">
                    <div class="inner-box">
                        <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-14.png') }}" alt=""></div>
                        <h3><a href="javascript:void(0);">Bahamas</a></h3>
                        <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget</p>
                        <div class="text">Visa Type :</div>
                        <span class="designation">Eudcation Visa, Only System</span>
                    </div>
                </div>
                <div class="countries-block-four">
                    <div class="inner-box">
                        <div class="flag"><img src="{{ asset('assets/site-assets/images/icons/flag-15.png') }}" alt=""></div>
                        <h3><a href="javascript:void(0);">Canada</a></h3>
                        <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget</p>
                        <div class="text">Visa Type :</div>
                        <span class="designation">Resident Visa Job Visa</span>
                    </div>
                </div>
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
    </section>
    <!-- countries-style-four end -->


    <!-- education-section -->
    <section class="education-section alternat-2 p_relative">
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
    </section>
    <!-- education-section end -->


    <!-- skills-section -->
    <section class="skills-section alternat-2 pt_200 pb_150">
        <div class="pattern-layer-2" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-49.png') }});"></div>
        <!-- <div class="pattern-layer-3" style="background-image: url(assets/images/shape/shape-50.png);"></div> -->
        <figure class="image-layer"><img src="{{ asset('assets/site-assets/images/resource/travel-2.png') }}" alt=""></figure>
        <div class="auto-container">
            <div class="content_block_five">
                <div class="content-box">
                    <div class="sec-title mb_30">
                        <span class="sub-title">Open house invitations & event registration.</span>
                        <h2>Our competitive initiatives have impacted us.</h2>
                    </div>
                    <div class="text mb_30">
                        <p>Sed gravida nisl a porta tincidunt. Integer aliquam nisi sit amet magna suscipit, fermentum mattis erat rutrum.</p>
                    </div>
                    <div class="progress-inner mb_65">
                        <div class="progress-box mb_25">
                            <p>Student Visa</p>
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="90%"><div class="count-text">90%</div></div>
                            </div>
                        </div>
                        <div class="progress-box mb_25">
                            <p>Business Visa</p>
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="70%"><div class="count-text">70%</div></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <p>Residence Visa</p>
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="80%"><div class="count-text">80%</div></div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-box">
                        <a href="javascript:void(0)" class="theme-btn btn-two"><span>More Details</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- skills-section end -->


    <!-- dream-style-two -->
    <section class="dream-style-two sec-pad p_relative">
        <div class="outer-container clearfix">
            <div class="bg-layer" style="background-image: url({{ asset('assets/site-assets/images/background/dream-bg-2.jpg') }});"></div>
            <div class="content-column">
                <div class="pattern-layer">
                    <div class="pattern-1" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-51.png') }});"></div>
                    <div class="pattern-2" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-52.png') }});"></div>
                </div>
                <div class="content_block_two">
                    <div class="content-box p_relative d_block">
                        <div class="sec-title light mb_20">
                            <span class="sub-title">Reach Your Dream</span>
                            <h2>Get the Right Help</h2>
                        </div>
                        <div class="text mb_25">
                            <p>Where did this incorrect belief that everyone dislikes praising happiness come from? Explain to me how this erroneous theory ended up being devised.</p>
                        </div>
                        <ul class="list-item p_relative clearfix mb_50">
                            <li><a href="{{ route('home') }}">1. Entering & Leaving From Country <i class="icon-9"></i></a></li>
                            <li><a href="{{ route('home') }}">2. Help & Support <i class="icon-9"></i></a></li>
                            <li><a href="{{ route('home') }}">3. Country Citizenship <i class="icon-9"></i></a></li>
                        </ul>
                        <div class="btn-box">
                            <a href="javascript:void(0);" class="theme-btn"><span>More Details</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- dream-style-two end -->

    <!-- passport-section -->
    <section class="passport-section centred p_relative">
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
    </section>
    <!-- passport-section end -->


    <section class="skills-section alternat-2 gi_o">
        <div class="pattern-layer-2" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-49.png') }});"></div>
        <!-- <div class="pattern-layer-3" style="background-image: url(assets/images/shape/shape-50.png);"></div> -->
        <figure class="image-layer"><img src="{{ asset('assets/site-assets/images/banner/banner-5.jpg') }}" alt=""></figure>
        <div class="auto-container">
            <div class="content_block_five">
                <div class="content-box">
                    <div class="sec-title mb_30">
                        <!-- <span class="sub-title">Talk to us, we've got you covered!</span> -->
                        <h2>Talk to us, we've got you covered!</h2>
                    </div>
                    <div class="text mb_30">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                    </div>
            
                    <div class="btn-box">
                        <a href="javascript:void(0)" class="theme-btn btn-two"><span>More Details</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($testimonials->isNotEmpty())
    <section class="testimonial-style-three">
        <div class="auto-container">
            <div class="sec-title">
                <h6>Client Reviews</h6>
                <h2>Feedback From Our Clients</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-1209px, 0px, 0px); transition: 0.5s; width: 2821px;">
                        @foreach($testimonials as $testimonial)
                        <div class="owl-item" style="width: 373px; margin-right: 30px;">
                            <div class="testimonial-content">
                                <div class="inner-box">
                                    <div class="quote"><img src="" alt=""></div>
                                    <div class="author-box">
                                        <figure class="author-thumb"><img src="{{ asset($testimonial->image) }}" alt=""></figure>
                                        <h4>{{ $testimonial->name }}</h4>
                                        <span class="designation">{{ $testimonial->title }}</span>
                                    </div>
                                    <div class="text">
                                        <p>{!! $testimonial->description !!}</p>
                                    </div>
                                    <ul class="rating clearfix">
                                        @for($i=1;$i<=$testimonial->rating;$i++)
                                        <li><i class="fas fa-star text-warning"></i></li>
                                        @endfor
                                        @for($j=$i;$j<=5;$j++)
                                        <li><i class="fas fa-star"></i></li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="owl-nav">
                        <button type="button" role="presentation" class="owl-prev">
                            <span class="far fa-angle-left"></span>
                        </button>
                        <button type="button" role="presentation" class="owl-next">
                            <span class="far fa-angle-right"></span>
                        </button>
                    </div>
                    <div class="owl-dots">
                        <button role="button" class="owl-dot active"><span></span></button>
                        <button role="button" class="owl-dot"><span></span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif


@endsection