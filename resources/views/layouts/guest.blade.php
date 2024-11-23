<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="semi-dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login | {{ config('app.name') }}</title>
    <!--favicon-->
	<link rel="icon" href="{{ asset('assets/dashboard_asset/assets/images/favicon-32x32.png') }}" type="image/png">
    <!-- loader-->
	<link href="{{ asset('assets/dashboard_asset/assets/css/pace.min.css') }}" rel="stylesheet">
	<script src="{{ asset('assets/dashboard_asset/assets/js/pace.min.js') }}"></script>

    <!--plugins-->
    <link href="{{ asset('assets/dashboard_asset/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard_asset/assets/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard_asset/assets/plugins/metismenu/mm-vertical.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/dashboard_asset/assets/plugins/notifications/css/lobibox.min.css') }}">
    
    <!--bootstrap css-->
    <link href="{{ asset('assets/dashboard_asset/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{ asset('assets/dashboard_asset/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard_asset/sass/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard_asset/sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard_asset/sass/blue-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard_asset/sass/responsive.css') }}" rel="stylesheet">

    <style>
        .full-screen-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('{{ asset('assets/site-assets/images/banner/banner-1.jpg') }}') no-repeat center center;
            background-size: cover;
            /* z-index: -1; */
            /* Adjust opacity if needed */
        }
    </style>

    @yield('style')
</head>

<body>

    <!--authentication-->
    <div class="auth-basic-wrapper d-flex align-items-center justify-content-center">
        <div class="full-screen-background"></div>
        <div class="container-fluid my-5 my-lg-0">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
                    <div class="card rounded-4 mb-0 border-top border-4 border-primary" style="background-color: #ffffffb0 !important;">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <img src="{{ asset('assets/site-assets/images/resource/Chancenkarte.png') }}" class="mb-1" width="145" alt="">
                            </div>
                            {{-- <h1 class="text-center">{{ config('app.name') }}</h1> --}}
        
                            <div class="form-body my-2">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
    <!--authentication-->
    


    <!--plugins-->
    <script src="{{ asset('assets/dashboard_asset/assets/js/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/dashboard_asset/assets/plugins/notifications/js/lobibox.min.js') }}"></script>
	<script src="{{ asset('assets/dashboard_asset/assets/plugins/notifications/js/notifications.min.js') }}"></script>
	<script src="{{ asset('assets/dashboard_asset/assets/plugins/notifications/js/notification-custom-script.js') }}"></script>
    
    {{-- @include('admin.include.notification') --}}

    <script>
        $(document).ready(function () {
            $("#show_hide_password a").on('click', function (event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bi-eye-slash-fill");
                    $('#show_hide_password i').removeClass("bi-eye-fill");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bi-eye-slash-fill");
                    $('#show_hide_password i').addClass("bi-eye-fill");
                }
            });
        });
    </script>

    @yield('script')

</body>

</html>
