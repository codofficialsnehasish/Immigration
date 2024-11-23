<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title') | {{ config('app.name') }}</title>

        <!-- Fav Icon -->
        <!-- <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> -->

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('assets/dashboard_asset/assets/plugins/notifications/css/lobibox.min.css') }}">
        
        <!-- Stylesheets -->
        <link href="{{ asset('assets/site-assets/css/font-awesome-all.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/site-assets/css/flaticon.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/site-assets/css/owl.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/site-assets/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/site-assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/site-assets/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/site-assets/css/nice-select.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/site-assets/css/elpath.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/site-assets/css/style.css') }}" rel="stylesheet">
        
        <link href="{{ asset('assets/site-assets/css/elements-css/banner.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/site-assets/css/elements-css/feature.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/site-assets/css/elements-css/about.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/site-assets/css/elements-css/coaching.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/site-assets/css/elements-css/help.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/site-assets/css/elements-css/countries.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/site-assets/css/elements-css/education.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/site-assets/css/elements-css/skills.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/site-assets/css/elements-css/dream.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/site-assets/css/elements-css/clients.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/site-assets/css/elements-css/news.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/site-assets/css/responsive.css') }}" rel="stylesheet">
        
        @yield('css')
        
    </head>


    <!-- page wrapper -->
    <body>

        <div class="boxed_wrapper">

            @include('layouts.web-include.header')

            @yield('content')

            @include('layouts.web-include.footer')
            
        </div>


        <!-- jequery plugins -->
        <script src="{{ asset('assets/site-assets/js/jquery.js') }}"></script>
        <script src="{{ asset('assets/site-assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/site-assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/site-assets/js/owl.js') }}"></script>
        <script src="{{ asset('assets/site-assets/js/wow.js') }}"></script>
        <script src="{{ asset('assets/site-assets/js/validation.js') }}"></script>
        <script src="{{ asset('assets/site-assets/js/jquery.fancybox.js') }}"></script>
        <script src="{{ asset('assets/site-assets/js/appear.js') }}"></script>
        <script src="{{ asset('assets/site-assets/js/scrollbar.js') }}"></script>
        <script src="{{ asset('assets/site-assets/js/isotope.js') }}"></script>
        <script src="{{ asset('assets/site-assets/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/site-assets/js/parallax-scroll.js') }}"></script>

        <!-- main-js -->
        <script src="{{ asset('assets/site-assets/js/script.js') }}"></script>

        <script src="{{ asset('assets/dashboard_asset/assets/plugins/notifications/js/lobibox.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard_asset/assets/plugins/notifications/js/notifications.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard_asset/assets/plugins/notifications/js/notification-custom-script.js') }}"></script>

        @include('layouts.notification')

        @yield('script')

    </body>
    <!-- End of .page_wrapper -->
</html>
