@extends('layouts.web')

@section('title', 'Home')

@section('content')
    <section class="about-section p_relative hrwa sadfwq">
        <div class="pattern-layer"></div>
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12 col-sm-12 image-column">
                    <div class="image_block_one">
                        <div class="image-box p_relative d_block grio_r">
                            <figure class="image image-2"><img src="{{ $banner->getFirstMediaUrl() }}" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 content-column abou_tm">
                    <div class="content_block_one">
                        <div class="content-box p_relative">
                            <div class="sec-title mb_30">
                                <h2>{{ $banner->title }}</h2>
                            </div>
                            <div class="text mb_30">
                                <p>{!! $banner->description !!} </p>
                            </div>
                            
                            <div class="btn-box">
                                <a href="{{ route('contact') }}" class="theme-btn btn-two">Request a Consultation Today</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- feature-section -->
    <section class="feature-section alternat-3 mnbvz">
        <div class="outer-container">
            <div class="inner-container hfrp">
                <!-- <div class="shape-2" style="background-image: url(assets/images/shape/shape-41.png);"></div> -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box cvfr">
                                <p style="text-align: justify !important;">
                                    {!! $home_about->description !!}
                                </p>
                                
                                
                                <div class="res_m">
                                <h1>{{ $home_about->title }}</h1>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        {!! $home_about->left_description !!}
                                    </div>
                                 
                                
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        {!! $home_about->right_description !!}
                                    </div>
                                </div>
                                
                              
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
    <section class="about-style-three p_relative home_about">
        <div class="pattern-layer">
            <div class="pattern-2" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-43.png') }});"></div>
            <div class="pattern-1" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-42.png') }});"></div>
        </div>
        <!--<figure class="image-layer"><img src="{{ asset('assets/site-assets/images/resource/men-2.png') }}" alt=""></figure>-->
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div class="content_block_six">
                        <div class="content-box mr_20">
                            <div class="sec-title frei_6">
                                {{-- <span class="sub-title">Why Choose Us ?</span> --}}
                                <h2>Why Choose Us ?</h2>
                            </div>
                            {{-- <div class="text mb_30">
                                <p>Sed gravida nisl a porta tincidunt. Integer aliquam nisi sit amet magna suscipit, fermentum mattis erat rutrum.Porta semper lacus cursus.</p>
                            </div> --}}
                            <div class="inner-box mb_40">
                                @foreach($why_choose_us as $why_choose)
                                <div class="single-item">
                                    <div class="icon-box"><img src="{{ asset('assets/site-assets/images/icons/icon-13.png') }}" alt=""></div>
                                    <h5>{{ $why_choose->title }}</h5>
                                    <p style="font-size:17px;">{!! $why_choose->description !!}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 image-column ghsw">
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
                        <div class="sec-title light tywq">
                            <span class="sub-title">{{ $ourservices->heading }}</span>
                            <h2>{{ $ourservices->title }}</h2>
                        </div>
                        <div class="text mb_25">
                            <p>{!! $ourservices->description !!}</p>
                        </div>
                        <div class="btn-box">
                            <a href="{{ route('service') }}" class="theme-btn"><span>Know More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- dream-style-two end -->


    <!-- help-section -->
    <section class="help-section p_relative dfgfg frae_5">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-45.png') }});"></div>
            <div class="pattern-2" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-46.png') }});"></div>
            <div class="pattern-3" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-47.png') }});"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title light mb_60">
                {{-- <span class="sub-title">HOW WE HELP CLIENTS</span> --}}

                <h2>Eligibility Assessment Section</h2>
                <p>The Opportunity Card operates on a points-based system, designed to assess candidates across 
                    various criteria, such as age, qualifications, professional experience, and language proficiency. 
                    Chancenkarte Points System Overview</p>
            </div>
            <div class="row clearfix xsep">


                <div class="col-lg-6 col-md-6 col-sm-12 single-column gjuq_p">

                    <div class="single-item gse_r">
                        <div class="inner-box">
                            <div class="icon-box">
                                <!-- <div class="icon mb_18"><i class="icon-42"></i></div> -->
                                <!--<span class="count-text">01</span>-->
                            </div>
                            <h3><a href="javascript:void(0);">Basic Requirements</a></h3>
                            {{-- <p> Applicants must demonstrate sufficient German (A1) or English (B2) language skills and at least two years of vocational training, compliant with standards in their home country. Adequate financial means are also required, such as an employment contract for a part-time position (up to 20 hours weekly).</p> --}}
                                <ul>
                                    <li> Applicants must demonstrate sufficient German (A1) or English (B2) language skills and 
                                        at least two years of vocational training, compliant with standards in their home country. </li>
                                    <li>Adequate financial means are also required, such as an employment contract for a part-time position (up to 20 hours weekly).</li>
                                </ul>
                            </p>
                        </div>
                    </div>


                      <div class="single-item gse_r">
                        <div class="inner-box">
                            <div class="icon-box">
                                <!--<span class="count-text">02</span>-->
                                <!-- <div class="icon mt_18"><i class="icon-43"></i></div> -->
                            </div>
                            <h3><a href="javascript:void(0);">4 Points</a></h3>
                            <ul><li>Awarded for partial recognition of foreign professional qualifications or permission to practice a regulated profession (e.g., teacher, nurse, engineer). These criteria are met by a select number of applicants.</li></ul>
                        </div>
                    </div>

                        <div class="single-item gse_r">
                        <div class="inner-box">
                            <div class="icon-box">
                                <!-- <div class="icon mb_13"><i class="icon-44"></i></div> -->
                                <!--<span class="count-text">03</span>-->
                            </div>
                            <h3><a href="javascript:void(0);">3 Points</a></h3>
                            {{-- <p>EThese points are available to those with five years of professional experience (within the last seven years) in their field and two years of initial training according to home country standards. Alternatively, B2-level German language proficiency also earns three points.
                            </p> --}}
                            <p>
                                <ul>
                                    <li> These points are available to those with five years of professional experience (within the 
                                        last seven years) in their field and two years of initial training according to home country 
                                        standards. </li>
                                    <li>Alternatively, B2-level German language proficiency also earns three points.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>











                <div class="col-lg-6 col-md-6 col-sm-12 single-column hje_1">
                    <div class="single-item gse_r">
                        <div class="inner-box">
                            <div class="icon-box">
                                <!-- <div class="icon mb_13"><i class="icon-44"></i></div> -->
                                <!--<span class="count-text">04</span>-->
                            </div>
                            <h3><a href="javascript:void(0);">2 Points</a></h3>
                            {{-- <p>Awarded for two years of recent work experience preceded by vocational training (within the last five years). Applicants under 35 or with B1-level German skills also qualify for two points.
                            </p> --}}
                            <p>
                                <ul>
                                    <li>Awarded for two years of recent work experience preceded by vocational training (within 
                                        the last five years). </li>
                                    <li>Applicants under 35 or with B1-level German skills also qualify for two points.</li>
                                </ul>
                            </p>
                        </div>
                    </div>

                       <div class="single-item gse_r">
                        <div class="inner-box">
                            <div class="icon-box">
                                <!-- <div class="icon mb_13"><i class="icon-44"></i></div> -->
                                <!--<span class="count-text">05</span>-->
                            </div>
                            <h3><a href="javascript:void(0);">1 Point</a></h3>
                            {{-- <p>Given to applicants under 40 or those with documented prior stays in Germany (minimum six months; tourist visits excluded). Additional points are awarded for:
                                - High-level English proficiency (C1) or moderate German skills (A2).
                         - A degree or vocational training in an area identified as a labor shortage in Germany.
                                - Applying for the Opportunity Card jointly with a spouse.
                            </p> --}}
                            <p>
                                <ul>
                                    <li>Given to applicants under 40 or those with documented prior stays in Germany (minimum 
                                        six months; tourist visits excluded). </li>
                                    <li>
                                        Additional points are awarded for: -
                                        <ol>
                                            <li>High-level English proficiency (C1) or moderate German skills (A2). </li>
                                            <li>A degree or vocational training in an area identified as a labor shortage in Germany.</li>
                                            <li>Applying for the Opportunity Card jointly with a spouse.</li>
                                        </ol>
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </section>
    <!-- help-section end -->


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
                    <h2>Check your eligibility for the Chancenkarte instantly.</h2>
                    <p>Our experts will help you determine your eligibility for Chancenkarte Visa and provide you with the guidance you need.</p>
                    {{-- <ul class="country-list">
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
                    </ul> --}}
                    <div class="btn-box">
                        <a href="{{ route('contact') }}" class="theme-btn"><span>Get in Touch With Our Experts Today </span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- education-section end -->

    @if($testimonials->isNotEmpty())
    <section class="testimonial-style-three">
        <div class="auto-container">
            <div class="sec-title">
                <!-- <h6>Client Reviews</h6> -->
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
                                        @if(!empty($testimonial->image))
                                        <figure class="author-thumb"><img src="{{ asset($testimonial->image) }}" alt=""></figure>
                                        @endif
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