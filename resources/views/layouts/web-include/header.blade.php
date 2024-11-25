<!-- main header -->
<header class="main-header header-style-two header-style-three">
    <!-- header-top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner">
                <div class="top-left">
                    <ul class="info clearfix">
                        <li><i class="icon-31"></i><a href="mailto:{{ optional(general_settings())->primary_email ?? '' }}">{{ optional(general_settings())->primary_email ?? '' }}</a></li>
                    </ul>
                </div>
                <div class="top-right">
                    <ul class="social-links clearfix">
                        <li><a href="{{ optional(general_settings())->facebook_link ?? '' }}"><i class="icon-4"></i></a></li>
                        <li><a href="{{ optional(general_settings())->instagram_link ?? '' }}"><i class="icon-5"></i></a></li>
                        <li><a href="{{ optional(general_settings())->twitter_link ?? '' }}"><i class="icon-6"></i></a></li>
                    </ul>
                    <!-- <div class="search-form">
                        <form action="{{ route('home')}}" method="post">
                            <div class="form-group">
                                <input type="search" name="search-field" placeholder="Search ..." required>
                                <button type="submit"><i class="icon-8"></i></button>
                            </div>
                        </form>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="{{ route('home')}}"><img src="{{ optional(general_settings())->getFirstMediaUrl('logo') ?? '' }}" alt=""></a></figure>
                </div>
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li @if(request()->segment(1) == 'about') class="active" @endif><a href="{{ route('about') }}">About Us</a></li> 
                                <li @if(request()->segment(1) == 'how-it-works') class="active" @endif><a href="{{ route('how-it-works') }}">How It Works</a></li> 
                                <li @if(request()->segment(1) == 'service') class="active" @endif><a href="{{ route('service') }}">Our Services</a></li> 
                                <li @if(request()->segment(1) == 'blogs-resources' || request()->segment(1) == 'blogs-details') class="active" @endif><a href="{{ route('blogs-resources.index') }}">Blog & Resources</a></li> 
                                <li @if(request()->segment(1) == 'contact-us') class="active" @endif><a href="{{ route('contact') }}">Contact Us</a></li> 
                                @auth
                                <li>
                                    <a href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                                <form method="POST" action="{{ route('logout') }}" id="logout-form" style="display: none;">
                                    @csrf
                                </form>
                                @endauth
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="btn-box">
                    <a href="{{ route('login') }}" class="theme-btn btn-one" style="color: black !important;"><img src="{{ asset('assets/site-assets/images/user.png') }}" alt="">@auth {{ explode(' ', Auth::user()->name)[0] }} @endauth</a>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="{{ route('home')}}"><img src="{{ optional(general_settings())->getFirstMediaUrl('logo') ?? '' }}" alt=""></a></figure>
                    {{-- <figure class="logo"><a href="{{ route('home')}}">{{ config('app.name') }}</a></figure> --}}
                </div>
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                <div class="btn-box">
                    <a href="{{ route('login') }}" class="theme-btn btn-one" style="color: black !important;"><img src="{{ asset('assets/site-assets/images/user.png') }}" alt="">@auth {{ explode(' ', Auth::user()->name)[0] }} @endauth</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->


<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    
    <nav class="menu-box">
        <div class="nav-logo"><a href="{{ route('home')}}"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="{{ route('home')}}"><span class="fab fa-twitter"></span></a></li>
                <li><a href="{{ route('home')}}"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="{{ route('home')}}"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="{{ route('home')}}"><span class="fab fa-instagram"></span></a></li>
                <li><a href="{{ route('home')}}"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div>
<!-- End Mobile Menu -->