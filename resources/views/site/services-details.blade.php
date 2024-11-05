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
                <h1>Services Details</h1>
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
    <section class="visa-section sec-pad">
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
    </section>
    <!-- visa-section end -->
    
@endsection