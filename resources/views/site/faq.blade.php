@extends('layouts.web')

@section('title', 'FAQ')

@section('css')
<link href="{{ asset('assets/site-assets/css/elements-css/page-title.css') }}" rel="stylesheet">
<link href="{{ asset('assets/site-assets/css/elements-css/faq.css') }}" rel="stylesheet">
@endsection

@section('content')

    <!-- page-title -->
    <section class="page-title centred p_relative">
        <div class="bg-layer" style="background-image: url({{ asset('assets/site-assets/images/background/page-title.jpg') }});"></div>
        <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-67.png') }});"></div>
        <div class="container">
            <div class="content-box">
                <h1>FAQ</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>FAQ</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- help-section -->
    {{-- <section class="help-section alternat-2 p_relative">
        <div class="container">
            <div class="sec-title mb_60">
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
    </section> --}}
    <!-- help-section end -->


    @if($faqs->isNotEmpty())
    <!-- faq-section -->
    <section class="faq-section pb_150">
        <div class="container">
            {{-- <div class="sec-title mb_60">
                <span class="sub-title">Expert Team Members</span>
                <h2>Get Every Able Answers</h2>
                <p>Sed gravida nisl a porta tincidunt. Integer aliquam nisi sit amet magna suscipit, fermentum mattis erat rutrum.Porta semper lacus cursus, feugiat primis ultrice and ligula risus auctor tempus feugiat dolor and lacinia</p>
            </div> --}}
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 faq-column">
                    <div class="faq-content">
                        <h3>General Questions</h3>
                        <ul class="accordion-box">
                            @foreach($faqs as $faqs)
                            <li class="accordion block @if($loop->iteration == 1) active-block @endif">
                                <div class="acc-btn @if($loop->iteration == 1) active @endif">
                                    <div class="icon-box"></div>
                                    <h5>{{ $faqs->question }}</h5>
                                </div>
                                <div class="acc-content @if($loop->iteration == 1) current @endif">
                                    <div class="text">
                                        <p>{!! $faqs->answer !!}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-lg-6 col-md-12 col-sm-12 faq-column">
                    <div class="faq-content">
                        <h3>Tourist & Visitor Visa</h3>
                        <ul class="accordion-box">
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-box"></div>
                                    <h5>Flipper lives in a world brimming with amazement?</h5>
                                </div>
                                <div class="acc-content">
                                    <div class="text">
                                        <p>Donec ornare sem at tincidunt pharetra. Nam viverra fringilla sem ac molestie. Sed varius scelerisque quam pellentesque porttitor. Suspendisse fermentum luctus dui, vitae cursus turpis. Etiam non tempus orci.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-box"></div>
                                    <h5>A break commando unit was shipped off jail?</h5>
                                </div>
                                <div class="acc-content">
                                    <div class="text">
                                        <p>Donec ornare sem at tincidunt pharetra. Nam viverra fringilla sem ac molestie. Sed varius scelerisque quam pellentesque porttitor. Suspendisse fermentum luctus dui, vitae cursus turpis. Etiam non tempus orci.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-box"></div>
                                    <h5>Mauris ac tempor sem. Nullam et porta urna ?</h5>
                                </div>
                                <div class="acc-content">
                                    <div class="text">
                                        <p>Donec ornare sem at tincidunt pharetra. Nam viverra fringilla sem ac molestie. Sed varius scelerisque quam pellentesque porttitor. Suspendisse fermentum luctus dui, vitae cursus turpis. Etiam non tempus orci.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-box"></div>
                                    <h5>Nam congue a nisl non auctor Interdum  ?</h5>
                                </div>
                                <div class="acc-content">
                                    <div class="text">
                                        <p>Donec ornare sem at tincidunt pharetra. Nam viverra fringilla sem ac molestie. Sed varius scelerisque quam pellentesque porttitor. Suspendisse fermentum luctus dui, vitae cursus turpis. Etiam non tempus orci.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- faq-section -->
    @endif
    
@endsection