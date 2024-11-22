@extends('layouts.web')

@section('title', 'Blog & Resources')

@section('css')
<link href="{{ asset('assets/site-assets/css/elements-css/page-title.css') }}" rel="stylesheet">
<link href="{{ asset('assets/site-assets/css/elements-css/blog.css') }}" rel="stylesheet">
<link href="{{ asset('assets/site-assets/css/elements-css/sidebar.css') }}" rel="stylesheet">
@endsection

@section('content')

    <!-- page-title -->
    <section class="page-title centred p_relative">
        <div class="bg-layer" style="background-image: url({{ asset('assets/site-assets/images/background/blog.jpg') }});"></div>
        <!-- <div class="pattern-layer" style="background-image: url({{ asset('assets/site-assets/images/shape/shape-67.png') }});"></div> -->
        <div class="auto-container">
            <div class="content-box">
                <!-- <h1>Blog & Resources</h1> -->
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Blog & Resources</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- sidebar-page-container -->
    <section class="sidebar-page-container blog-standard p_relative">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-standard-content">

                        @foreach($blogs as $blog)
                        <div class="news-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="{{ route('blogs-resources.details',$blog->slug) }}"><img src="{{ $blog->getFirstMediaUrl() }}" alt=""></a></figure>
                                <div class="lower-content">
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-27"></i><a href="{{ route('blogs-resources.details',$blog->slug) }}">{{ $blog->author_name }}</a></li>
                                        <li><i class="icon-56"></i>{{ format_datetime($blog->created_at) }} </li>
                                    </ul>
                                    <h3><a href="{{ route('blogs-resources.details',$blog->slug) }}">{{ $blog->title }}</a></h3>
                                    {!! $blog->short_content !!}
                                    <div class="link-btn">
                                        <a href="{{ route('blogs-resources.details',$blog->slug) }}"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="news-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="{{ route('blogs-resources.details') }}"><img src="{{ asset('assets/site-assets/images/news/news-7.jpg') }}" alt=""></a></figure>
                                <div class="lower-content">
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-27"></i><a href="{{ route('blogs-resources.details') }}">Admin</a></li>
                                        <li><i class="icon-56"></i>Feb 6, 2022 </li>
                                        <li><i class="icon-57"></i><a href="{{ route('blogs-resources.details') }}">03 Comments</a></li>
                                    </ul>
                                    <h3><a href="{{ route('blogs-resources.details') }}">What is the Chancenkarte Visa? A Step-by-Step Guide to Germany’s Opportunity Card</a></h3>
                                    <p>Germany, known for its booming economy, world-class infrastructure, and rich cultural 
                                        heritage, is one of the top destinations for professionals seeking global career opportunities. In 
                                        2024, the German government introduced a game-changing immigration initiative — the 
                                        Chancenkarte Visa, or the Germany Opportunity Card. Think of it as your golden ticket to 
                                        unlock the door to endless career prospects, a high standard of living, and the chance to become 
                                        a part of one of Europe’s strongest job markets. But what exactly is the Chancenkarte Visa? 
                                        How can you apply for it? And what makes it different from other visas like the German Job 
                                        Seeker Visa?
                                    </p>
                                    <div class="link-btn">
                                        <a href="{{ route('blogs-resources.details') }}"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="news-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="{{ route('blogs-resources.details') }}"><img src="{{ asset('assets/site-assets/images/news/news-8.jpg') }}" alt=""></a></figure>
                                <div class="lower-content">
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-27"></i><a href="{{ route('blogs-resources.details') }}">Admin</a></li>
                                        <li><i class="icon-56"></i>Feb 5, 2022 </li>
                                        <li><i class="icon-57"></i><a href="{{ route('blogs-resources.details') }}">08 Comments</a></li>
                                    </ul>
                                    <h3><a href="{{ route('blogs-resources.details') }}">Customers Applying for Priority Visas.</a></h3>
                                    <p>Nemo ipsam egestas volute turpis dolores and aliquam quaerat in which toil and pain procure him some great foresee the pain and trouble that are bound not know how to pursue pleasure rationally.</p>
                                    <div class="link-btn">
                                        <a href="{{ route('blogs-resources.details') }}"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="news-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="{{ route('blogs-resources.details') }}"><img src="{{ asset('assets/site-assets/images/news/news-9.jpg') }}" alt=""></a></figure>
                                <div class="lower-content">
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-27"></i><a href="{{ route('blogs-resources.details') }}">Admin</a></li>
                                        <li><i class="icon-56"></i>Feb 4, 2022 </li>
                                        <li><i class="icon-57"></i><a href="{{ route('blogs-resources.details') }}">02 Comments</a></li>
                                    </ul>
                                    <h3><a href="{{ route('blogs-resources.details') }}">Travelling to Australia for Tourism or Business?</a></h3>
                                    <p>Nemo ipsam egestas volute turpis dolores and aliquam quaerat in which toil and pain procure him some great foresee the pain and trouble that are bound not know how to pursue pleasure rationally.</p>
                                    <div class="link-btn">
                                        <a href="{{ route('blogs-resources.details') }}"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-wrapper pt_40">
                            <ul class="pagination">
                                <li><a href="blog.html" class="current">1</a></li>
                                <li><a href="blog.html">2</a></li>
                                <li><a href="blog.html">3</a></li>
                                <li><a href="blog.html"><i class="icon-58"></i></a></li>
                                <li><a href="blog.html">5</a></li>
                                <li><a href="blog.html"><i class="icon-59"></i></a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="default-sidebar blog-sidebar ml_10">
                        <div class="sidebar-widget search-widget">
                            <div class="widget-title">
                                <h3>Search</h3>
                            </div>
                            <div class="search-form">
                                <form action="">
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

                        {{-- <div class="sidebar-widget post-widget">
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
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sidebar-page-container end -->
    
@endsection