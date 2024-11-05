<!-- main header -->
<header class="main-header header-style-two header-style-three">
    <!-- header-top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner">
                <div class="top-left">
                    <ul class="info clearfix">
                        <li><i class="icon-31"></i><a href="mailto:info@yourmail.com">info@yourmail.com</a></li>
                    </ul>
                </div>
                <div class="top-right">
                    <ul class="social-links clearfix">
                        <li><a href="{{ route('home') }}"><i class="icon-4"></i></a></li>
                        <li><a href="{{ route('home') }}"><i class="icon-5"></i></a></li>
                        <li><a href="{{ route('home') }}"><i class="icon-6"></i></a></li>
                        <li><a href="{{ route('home') }}"><i class="icon-7"></i></a></li>
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
                    <!-- <figure class="logo"><a href="{{ route('home')}}"><img src="assets/images/logo.png" alt=""></a></figure> -->
                    <figure class="logo"><a href="{{ route('home')}}">{{ config('app.name') }} <span></span></a></figure>
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
                                <!-- <li class="current dropdown"><a href="{{ route('home')}}">Home</a>
                                    <ul>
                                        <li><a href="{{ route('home')}}">Home Page 01</a></li>
                                        <li><a href="javascript:void(0);">Home Page 02</a></li>
                                        <li><a href="javascript:void(0);">Home Page 03</a></li>
                                        <li><a href="javascript:void(0);">Home Page 04</a></li>
                                        <li><a href="javascript:void(0);">OnePage Home</a></li>
                                        <li><a href="javascript:void(0);">RTL Home</a></li>
                                        <li class="dropdown"><a href="{{ route('home')}}">Header Style</a>
                                            <ul>
                                                <li><a href="{{ route('home')}}">Header Style 01</a></li>
                                                <li><a href="javascript:void(0);">Header Style 02</a></li>
                                                <li><a href="javascript:void(0);">Header Style 03</a></li>
                                                <li><a href="javascript:void(0);">Header Style 04</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{ route('home')}}">About</a>
                                    <ul>
                                        <li class="dropdown"><a href="{{ route('home')}}">Team</a>
                                            <ul>
                                                <li><a href="team.html">Our Team</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="faq.html">Faq’s</a></li>
                                        <li><a href="error.html">404</a></li>
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="{{ route('home')}}">Coaching</a>
                                    <ul>
                                        <li><a href="coaching.html">Coaching Overview</a></li>
                                        <li><a href="coaching-details.html">IELTS Coaching</a></li>
                                        <li><a href="coaching-details-2.html">PTE Coaching</a></li>
                                        <li><a href="coaching-details-3.html">OET Coaching</a></li>
                                        <li><a href="coaching-details-4.html">GRE Coaching</a></li>
                                        <li><a href="coaching-details-5.html">GMAT Coaching</a></li>
                                        <li><a href="coaching-details-6.html">SAT Coaching</a></li>
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="{{ route('home')}}">Countries</a>
                                    <ul>
                                        <li><a href="countries.html">Countries Overview</a></li>
                                        <li><a href="countries-details.html">United States</a></li>
                                        <li><a href="countries-details-2.html">United Kingdom</a></li>
                                        <li><a href="countries-details-3.html">Canada</a></li>
                                        <li><a href="countries-details-4.html">China</a></li>
                                        <li><a href="countries-details-5.html">Bahamas</a></li>
                                        <li><a href="countries-details-6.html">Australia</a></li>
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="{{ route('home')}}">Visa</a>
                                    <ul>
                                        <li><a href="visa.html">Visa Overview</a></li>
                                        <li><a href="visa-details.html">Business Visa</a></li>
                                        <li><a href="visa-details-2.html">Working Visas</a></li>
                                        <li><a href="visa-details-3.html">Residence Visas</a></li>
                                        <li><a href="visa-details-4.html">Student Visas</a></li>
                                        <li><a href="visa-details-5.html">Spouse/Family Visas</a></li>
                                        <li><a href="visa-details-6.html">Turist Visas</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{ route('home')}}">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>   -->

                                <li><a href="{{ route('about') }}">About Us</a></li> 
                                <li><a href="{{ route('how-it-works') }}">How It Works</a></li> 
                                <li><a href="{{ route('service') }}">OUR SERVICES</a></li> 
                                <li><a href="#">Blog & Resources</a></li> 
                                <li><a href="{{ route('contact') }}">Contact Us</a></li> 
                                @auth
                                {{-- <li><a href="{{ route('logout') }}">Logout</a></li>  --}}
                                {{-- <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                    @csrf
                                    <li>
                                        <a href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    </li> 
                                </form> --}}
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
                    <a href="{{ route('login') }}" class="theme-btn btn-one" style="color: black !important;"><img src="{{ asset('assets/site-assets/images/user.png') }}" alt="">@auth {{ Auth::user()->name }} @endauth</a>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box">
                <div class="logo-box">
                    <!-- <figure class="logo"><a href="{{ route('home')}}"><img src="assets/images/logo.png" alt=""></a></figure> -->
                    <figure class="logo"><a href="{{ route('home')}}">{{ config('app.name') }}</a></figure>
                </div>
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                <div class="btn-box">
                    <a href="javascript:void(0);" class="theme-btn btn-one"><span>Appointment</span></a>
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