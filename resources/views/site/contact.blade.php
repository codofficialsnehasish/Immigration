@extends('layouts.web')

@section('title', 'Contact Us')

@section('css')
<link href="{{ asset('assets/site-assets/css/elements-css/page-title.css') }}" rel="stylesheet">
<link href="{{ asset('assets/site-assets/css/elements-css/contact.css') }}" rel="stylesheet">
@endsection

@section('content')


    <!-- page-title -->
    <section class="page-title centred p_relative">
        <div class="bg-layer" style="background-image: url({{ asset('assets/site-assets/images/background/page-title.jpg') }});"></div>
        <!-- <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-67.png') }});"></div> -->
        <div class="auto-container">
            <div class="content-box">
                <!-- <h1>Contact Us</h1> -->
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->




    <section class="contact-style-two p_relative gtbge">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column ghj">
                    <div class="content-box">
                        <div class="sec-title mb_30">
                            <span class="sub-title">{{ $content->title }}</span>
                            <h2>{!! $content->heading !!}</h2>
                        </div>
                        <div class="text mb_30">
                            {!! $content->description !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-column ghj2">
                    <div class="form-inner">
                        <div class="sec-title mb_40">
                            <span class="sub-title">{{ $content->form_title }}</span>
                            <h2>{{ $content->form_heading }}</h2>
                            <p>{!! $content->form_description !!}</p>
                        </div>
                        <form method="post" action="{{ route('contact.store') }}" id="contact-form" novalidate="novalidate" enctype="multipart/form-data"> 
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Name" required="" aria-required="true">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required="" aria-required="true">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone" required="" aria-required="true">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Subject" required="" aria-required="true">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input class="form-control form-control-lg" id="formFileLg" type="file" name="file"/>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Your message here">{{ old('message') }}</textarea>
                                </div>

                                {{-- <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <div class="custom-controls-stacked pb_20">
                                        <label class="custom-control material-checkbox">
                                            <input type="checkbox" class="material-control-input">
                                            <span class="material-control-indicator"></span>
                                            <span class="description">Save my name, email, and website in this browser for the next time I comment.</span>
                                        </label>
                                    </div>
                                </div> --}}

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button type="submit" class="theme-btn btn-two" name="submit-form"><span>Send Message</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="google-map-section p_relative">
        <div class="auto-container">
            <div class="map-inner p_relative d_block">
                {!! optional(general_settings())->google_map ?? '' !!}
            </div>
        </div>
    </section>
    
@endsection