@extends('layouts.web')

@section('title', 'Privacy Policy')

@section('css')
<link href="{{ asset('assets/site-assets/css/elements-css/page-title.css') }}" rel="stylesheet">
<link href="{{ asset('assets/site-assets/css/elements-css/chooseus.css') }}" rel="stylesheet">
<link href="{{ asset('assets/site-assets/css/elements-css/team.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section class="about-section p_relative hrwa gt_re">
        <div class="container">
            <div class="row">
  
        <h1>Privacy Policy</h1>
        <p>{!! $privacy_policy !!}</p>
        
        </div>
        </div>
    </section>
    
@endsection