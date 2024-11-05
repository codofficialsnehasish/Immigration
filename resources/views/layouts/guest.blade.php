{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html> --}}






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

    {{-- <div class="section-authentication-cover">
        <div class="full-screen-background"></div>
        <div class="">
            <div class="row g-0">
                
                <div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex border-end bg-transparent">

                    <div class="card rounded-0 mb-0 border-0 shadow-none bg-transparent bg-none">
                        <div class="card-body" style="margin: 0;padding: 0;width: 99%;">
                            <img src="{{ asset('assets/site-assets/images/banner/banner-1.jpg') }}" class="img-fluid auth-img-cover-login"  id="rotateImage" width="450" alt="">
                        </div>
                    </div>

                </div>

                <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center border-top border-4 border-primary border-gradient-1">
                    <div class="card rounded-0 m-3 mb-0 border-0 shadow-none bg-none">
                        <div class="card-body p-sm-5">
                            <h1 class="text-center">Immigration</h1>
                            
                            <div class="form-body mt-4">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--end row-->
        </div>
    </div> --}}

    <!--authentication-->
    <div class="auth-basic-wrapper d-flex align-items-center justify-content-center">
        <div class="full-screen-background"></div>
        <div class="container-fluid my-5 my-lg-0">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
                    <div class="card rounded-4 mb-0 border-top border-4 border-primary" style="background-color: #ffffffb0 !important;">
                        <div class="card-body p-5">
                            {{-- <img src="assets/images/logo1.png" class="mb-4" width="145" alt=""> --}}
                            <h1 class="text-center">{{ config('app.name') }}</h1>
                            {{-- <h4 class="fw-bold">Get Started Now</h4>
                            <p class="mb-0">Enter your credentials to login your account</p> --}}
        
                            <div class="form-body my-5">
                                {{-- <form class="row g-3">
                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="inputEmailAddress" placeholder="jhon@example.com">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputChoosePassword" class="form-label">Password</label>
                                        <div class="input-group" id="show_hide_password">
                                            <input type="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password"> 
                                            <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-end">	<a href="auth-basic-forgot-password.html">Forgot Password ?</a>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-grd-primary">Login</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="text-start">
                                            <p class="mb-0">Don't have an account yet? <a href="auth-basic-register.html">Sign up here</a>
                                            </p>
                                        </div>
                                    </div>
                                </form> --}}
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
