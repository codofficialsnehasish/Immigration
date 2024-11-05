@extends('layouts.web')

@section('title', 'Data Security Measures')

@section('css')
<link href="{{ asset('assets/site-assets/css/elements-css/page-title.css') }}" rel="stylesheet">
<link href="{{ asset('assets/site-assets/css/elements-css/chooseus.css') }}" rel="stylesheet">
<link href="{{ asset('assets/site-assets/css/elements-css/team.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section class="about-section p_relative hrwa">
        <h1>Data Security Measures</h1>
        <p>{!! $data_security_measures !!}</p>
    </section>
    
@endsection