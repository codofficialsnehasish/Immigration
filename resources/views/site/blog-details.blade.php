@extends('layouts.web')

@section('title', 'Blog Details')

@section('css')
<link href="{{ asset('assets/site-assets/css/elements-css/page-title.css') }}" rel="stylesheet">
<link href="{{ asset('assets/site-assets/css/elements-css/blog.css') }}" rel="stylesheet">
<link href="{{ asset('assets/site-assets/css/elements-css/sidebar.css') }}" rel="stylesheet">
@endsection

@section('content')

    <!-- page-title -->
    <section class="page-title centred p_relative">
        <div class="bg-layer" style="background-image: url({{ asset('assets/site-assets/images/background/page-title-3.jpg') }});"></div>
        <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-67.png') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Kickstart Your Visa ApprovalWith 4 <br />Easy Steps</h1>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- sidebar-page-container -->
    <section class="sidebar-page-container blog-standard p_relative">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-details-content">
                        <div class="content-one mb_40">
                            <figure class="image-box"><img src="{{ asset('assets/site-assets/images/news/news-10.jpg') }}" alt=""></figure>
                            <ul class="post-info clearfix">
                                <li><i class="icon-27"></i><a href="{{ route('blogs-resources.details') }}">Admin</a></li>
                                <li><i class="icon-56"></i>Feb 6, 2022 </li>
                                <li><i class="icon-57"></i><a href="{{ route('blogs-resources.details') }}">03 Comments</a></li>
                            </ul>
                            <div class="text">
                                <p> Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget. Vivamus venenatis turpis lacinia, congue massa in, accumsan orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque vestibulum id risus sit amet faucibus. Vestibulum sodales lacus eros, sed maximus sapien mollis ultrices. In odio mi, scelerisque a libero et, pulvinar pulvinar enim. Etiam at volutpat augue, eu hendrerit nunc. Sed eleifend risus diam, quis iaculis elit imperdiet sit amet. Suspendisse scelerisque eros odio, sed malesuada felis semper eu. Fusce laoreet justo ac risus feugiat venenatis. Curabitur imperdiet efficitur feugiat. Curabitur lacinia rhoncus sapien sit amet pulvinar. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque ut velit ut enim porta pellentesque vel vel ex. Pellentesque sollicitudin ac tortor vel euismod.</p>
                                <p>Donec eu volutpat dolor. Ut aliquam nisi tincidunt urna sollicitudin ornare. Etiam sagittis faucibus eros imperdiet tincidunt. Sed interdum posuere gravida. Sed at aliquet sapien.  nec, auctor in odio.</p>
                                <h3>Semper lacus cursus porta, feugiat primis</h3>
                                <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget. Vivamus venenatis turpis lacinia, congue massa in, accumsan orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque vestibulum id risus sit amet faucibus. Vestibulum sodales lacus eros, sed maximus sapien mollis ultrices. In odio mi, scelerisque a libero et, pulvinar pulvinar enim. . </p>
                                <ul class="list-item clearfix">
                                    <li>Phasellus tempor sapien eu velit porta egestas posuere a turpis.</li>
                                    <li>Aliquam blandit tellus lobortis mollis faucibus.</li>
                                    <li>Integer mollis sapien vitae magna pellentesque, in placerat odio tempor.</li>
                                    <li>Etiam dignissim turpis a lorem finibus pellentesque.</li>
                                    <li>Aenean convallis leo et magna egestas, ut tincidunt nunc suscipit.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-two mb_40">
                            <figure class="image-box"><img src="{{ asset('assets/site-assets/images/news/news-11.jpg') }}" alt=""></figure>
                            <div class="text">
                                <h3>Requirements for Citizenship</h3>
                                <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget. Vivamus venenatis turpis lacinia, congue massa in, accumsan orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque vestibulum id risus sit amet faucibus. Vestibulum sodales lacus eros, sed maximus sapien mollis ultrices. In odio mi, scelerisque a libero et, pulvinar pulvinar enim. . </p>
                            </div>
                        </div>
                        <div class="post-share-option mb_65">
                            <ul class="post-tags clearfix">
                                <li><h5>Tags :</h5></li>
                                <li><a href="{{ route('blogs-resources.details') }}">#Agent</a>,</li>
                                <li><a href="{{ route('blogs-resources.details') }}">#Business</a>,</li>
                                <li><a href="{{ route('blogs-resources.details') }}">#Career</a></li>
                            </ul>
                            <ul class="share-links clearfix">
                                <li><a href="index.html"><i class="icon-4"></i></a></li>
                                <li><a href="index.html"><i class="icon-5"></i></a></li>
                                <li><a href="index.html"><i class="icon-6"></i></a></li>
                                <li><a href="index.html"><i class="icon-7"></i></a></li>
                            </ul>
                        </div>
                        <div class="comments-box mb_60">
                            <div class="group-title pb_40">
                                <h3>Comments(02)</h3>
                            </div>
                            <div class="comment-inner">
                                <div class="comment">
                                    <figure class="comment-thumb"><img src="{{ asset('assets/site-assets/images/news/comment-1.jpg') }}" alt=""></figure>
                                    <h5>Farrel Collins <span>March 19, 2022</span></h5>
                                    <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget. Vivamus venenatis turpis lacinia, congue massa in, accumsan orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque vestibulum id risus sit amet faucibus. </p>
                                    <a href="{{ route('blogs-resources.details') }}" class="reply-btn"><img src="{{ asset('assets/site-assets/images/icons/icon-16.png') }}" alt=""></a>
                                </div>
                                <div class="comment replay-comment">
                                    <figure class="comment-thumb"><img src="{{ asset('assets/site-assets/images/news/comment-2.jpg') }}" alt=""></figure>
                                    <h5>Haris Gulati <span>March 19, 2022</span></h5>
                                    <p>Vivamus ac ultricies ex. Donec lacinia lacus libero, sed feugiat diam laoreet eget. Vivamus venenatis turpis lacinia, congue massa in, accumsan orci. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                                    <a href="{{ route('blogs-resources.details') }}" class="reply-btn"><img src="{{ asset('assets/site-assets/images/icons/icon-16.png') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="comments-form-area">
                            <div class="group-title pb_20">
                                <h3>Leave a Reply</h3>
                            </div>
                            <div class="form-inner">
                                <form action="{{ route('blogs-resources.details') }}" method="post">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <input type="text" name="name" placeholder="Website" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="message" placeholder="Your Text Here"></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <div class="custom-controls-stacked pb_20">
                                                <label class="custom-control material-checkbox">
                                                    <input type="checkbox" class="material-control-input">
                                                    <span class="material-control-indicator"></span>
                                                    <span class="description">Save my name, email, and website in this browser for the next time I comment.</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                            <button type="submit" class="theme-btn btn-two"><span>Post Comment</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="default-sidebar blog-sidebar ml_10">
                        <div class="sidebar-widget search-widget">
                            <div class="widget-title">
                                <h3>Search</h3>
                            </div>
                            <div class="search-form">
                                <form action="blog.html" method="post">
                                    <div class="form-group">
                                        <input type="search" name="search-field" placeholder="Keyword ..." required>
                                        <button type="submit"><i class="icon-8"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Search</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list-two clearfix">
                                    <li><a href="{{ route('blogs-resources.details') }}">Immigration</a></li>
                                    <li><a href="{{ route('blogs-resources.details') }}">Application</a></li>
                                    <li><a href="{{ route('blogs-resources.details') }}">Business Visa</a></li>
                                    <li><a href="{{ route('blogs-resources.details') }}">Spouse/Family Visas</a></li>
                                    <li><a href="{{ route('blogs-resources.details') }}">Working Visas</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget post-widget">
                            <div class="widget-title">
                                <h3>Popular Post</h3>
                            </div>
                            <div class="post-inner">
                                <div class="post">
                                    <figure class="post-thumb"><a href="{{ route('blogs-resources.details') }}"><img src="{{ asset('assets/site-assets/images/news/post-1.jpg') }}" alt=""></a></figure>
                                    <h5><a href="{{ route('blogs-resources.details') }}">Kickstart Your Visa ApprovalWith 4 Easy Steps</a></h5>
                                    <span class="post-date">December 30, 2020</span>
                                </div>
                                <div class="post">
                                    <figure class="post-thumb"><a href="{{ route('blogs-resources.details') }}"><img src="{{ asset('assets/site-assets/images/news/post-2.jpg') }}" alt=""></a></figure>
                                    <h5><a href="{{ route('blogs-resources.details') }}">Customers Applying for Priority Visas.</a></h5>
                                    <span class="post-date">December 25, 2020</span>
                                </div>
                                <div class="post">
                                    <figure class="post-thumb"><a href="{{ route('blogs-resources.details') }}"><img src="{{ asset('assets/site-assets/images/news/post-3.jpg') }}" alt=""></a></figure>
                                    <h5><a href="{{ route('blogs-resources.details') }}">Travelling to Australia for Tourism or Business?</a></h5>
                                    <span class="post-date">December 22, 2020</span>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget gallery-widget">
                            <div class="widget-title">
                                <h3>Our Gallery</h3>
                            </div>
                            <div class="widget-content p_relative">
                                <ul class="image-list clearfix">
                                    <li>
                                        <figure class="image-box"><a href="{{ asset('assets/site-assets/images/news/gallery-1.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/site-assets/images/news/gallery-1.jpg') }}" alt=""></a></figure>
                                    </li>
                                    <li>
                                        <figure class="image-box"><a href="{{ asset('assets/site-assets/images/news/gallery-2.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/site-assets/images/news/gallery-2.jpg') }}" alt=""></a></figure>
                                    </li>
                                    <li>
                                        <figure class="image-box"><a href="{{ asset('assets/site-assets/images/news/gallery-3.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/site-assets/images/news/gallery-3.jpg') }}" alt=""></a></figure>
                                    </li>
                                    <li>
                                        <figure class="image-box"><a href="{{ asset('assets/site-assets/images/news/gallery-4.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/site-assets/images/news/gallery-4.jpg') }}" alt=""></a></figure>
                                    </li>
                                    <li>
                                        <figure class="image-box"><a href="{{ asset('assets/site-assets/images/news/gallery-5.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/site-assets/images/news/gallery-5.jpg') }}" alt=""></a></figure>
                                    </li>
                                    <li>
                                        <figure class="image-box"><a href="{{ asset('assets/site-assets/images/news/gallery-6.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/site-assets/images/news/gallery-6.jpg') }}" alt=""></a></figure>
                                    </li>
                                    <li>
                                        <figure class="image-box"><a href="{{ asset('assets/site-assets/images/news/gallery-7.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/site-assets/images/news/gallery-7.jpg') }}" alt=""></a></figure>
                                    </li>
                                    <li>
                                        <figure class="image-box"><a href="{{ asset('assets/site-assets/images/news/gallery-8.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/site-assets/images/news/gallery-8.jpg') }}" alt=""></a></figure>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget travel-widget">
                            <div class="widget-content p_relative">
                                <figure class="image-box"><img src="{{ asset('assets/site-assets/images/resource/travel-1.jpg') }}" alt=""></figure>
                                <div class="content-box">
                                    <h3>Travel Pass</h3>
                                    <ul class="list-item clearfix">
                                        <li>Application Form</li>
                                        <li>Checklist</li>
                                        <li>Guidelines</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget tags-widget">
                            <div class="widget-title">
                                <h3>Popular Tags</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="tags-list clearfix">
                                    <li><a href="{{ route('blogs-resources.details') }}"># Agents</a></li>
                                    <li><a href="{{ route('blogs-resources.details') }}"># Business</a></li>
                                    <li><a href="{{ route('blogs-resources.details') }}"># Career</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sidebar-page-container end -->
    
@endsection