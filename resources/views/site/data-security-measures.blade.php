@extends('layouts.web')

@section('title', 'Data Security Measures')

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
        <div class="container">
            <div class="content-box">
                <h1>Data Security Measures</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Data Security Measures</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->
    
    
    <section class="about-section p_relative hrwa gt_re">
        <div class="container">
            <div class="row">
  
                <h1>Data Security Measures</h1>
                <p>{!! $data_security_measures !!}</p>
        
            </div>
        </div>
    </section>
@endsection