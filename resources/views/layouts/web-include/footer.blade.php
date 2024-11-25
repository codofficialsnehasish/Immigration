<!-- main-footer -->
<footer class="main-footer style-two style-three">
    <div class="widget-section p_relative">
        <div class="bg-layer" style="background-image: url({{ asset('assets/site-assets/images/banner/banner-4.jpg') }});"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget logo-widget">
                        <figure class="footer-logo"><a href="{{ route('home') }}"><img src="{{ optional(general_settings())->getFirstMediaUrl('logo') ?? '' }}" alt=""></a></figure>
                        {{-- <figure class="footer-logo"><a href="{{ route('home') }}">{{ config('app.name') }}</a></figure> --}}
                        <div class="text">
                            <p>Your Partner in Achieving <br>Career Success in Germany.</p>
                            <ul class="social-links clearfix">
                                <li><a href="{{ optional(general_settings())->facebook_link ?? '' }}"><i class="icon-4"></i></a></li>
                                <li><a href="{{ optional(general_settings())->instagram_link ?? '' }}"><i class="icon-5"></i></a></li>
                                <li><a href="{{ optional(general_settings())->twitter_link ?? '' }}"><i class="icon-6"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3>Explore Link</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('how-it-works') }}">How It Works</a></li>
                                <li><a href="{{ route('service') }}">Our Services</a></li>
                                <li><a href="{{ route('blogs-resources.index') }}">Blog & Resources</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3>Services</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="#">Tourist Visa</a></li>
                                <li><a href="#">Commercial Visa</a></li>
                                <li><a href="#">Student Visa</a></li>
                                <li><a href="#">Residence Visa</a></li>
                                <li><a href="#">Working Visa</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}

                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3>Legal Information</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                                {{-- <li><a href="{{ route('data-security-measures') }}">Data Security Measures</a></li> --}}
                                <li><a href="{{ route('terms-conditions') }}">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list foor_linj clearfix">
                                <li><a href="#"><img src="{{ asset('assets/site-assets/images/ph_icon.png') }}" alt=""> {{ optional(general_settings())->primary_phone ?? '' }}</a></li>
                                <li><a href="#"><img src="{{ asset('assets/site-assets/images/cal_icon.png') }}" alt=""> {{ optional(general_settings())->primary_email ?? '' }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright">
                <div class="rio"><p>{{ optional(general_settings())->copyright ?? '' }}</p></div>
                <div class="rio2"><img src="{{ asset('assets/site-assets/images/payment.png') }}" alt=""></div>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->



<!--Scroll to top-->
<div class="scroll-to-top">
    <div>
        <div class="scroll-top-inner">
            <div class="scroll-bar">
                <div class="bar-inner"></div>
            </div>
            <div class="scroll-bar-text">Go To Top</div>
        </div>
    </div>
</div>
<!-- Scroll to top end -->