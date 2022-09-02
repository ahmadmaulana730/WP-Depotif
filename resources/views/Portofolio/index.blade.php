@extends('layouts.main')

@section('title')
<title>Difotip</title>
@endsection

@section('content')
 <!-- Banner Section -->
 <section class="page-banner">
    <div class="image-layer" style="background-image:url(images/background/banner-image-1.jpg);"></div>

    <div class="banner-inner">
        <div class="faded-text light"><div class="f-text"><span>Portfolio</span></div></div>
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Portfolio</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<section class="portfolio-section-four">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Gallery Item-->
            <div class="gallery-item-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image">
                            <a class="lightbox-image" href="{{ asset('assets/images/gallery/33.jpg') }}"><img src="{{ asset('assets/images/gallery/33.jpg') }}" alt=""></a>
                        </figure>
                        <div class="hover-box">
                            <div class="hover-inner">
                                <div class="content">
                                    <h4><a href="#">Galactica Super Nova</a></h4>
                                    <div class="separator"><span class="dot"></span></div>
                                    <div class="category">Adventure</div>
                                </div>
                            </div>
                            <div class="zoom-btn">
                                <a class="lightbox-image zoom-link" href="{{ asset('assets/images/gallery/33.jpg') }}" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                            </div>
                            <div class="link-btn">
                                <a href="portfolio-single.html"><span class="icon flaticon-link-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Item-->
            <div class="gallery-item-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image">
                            <a class="lightbox-image" href="{{ asset('assets/images/gallery/34.jpg') }}"><img src="{{ asset('assets/images/gallery/34.jpg') }}" alt=""></a>
                        </figure>
                        <div class="hover-box">
                            <div class="hover-inner">
                                <div class="content">
                                    <h4><a href="#">Galactica Super Nova</a></h4>
                                    <div class="separator"><span class="dot"></span></div>
                                    <div class="category">Adventure</div>
                                </div>
                            </div>
                            <div class="zoom-btn">
                                <a class="lightbox-image zoom-link" href="{{ asset('assets/images/gallery/34.jpg') }}" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                            </div>
                            <div class="link-btn">
                                <a href="portfolio-single.html"><span class="icon flaticon-link-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Item-->
            <div class="gallery-item-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image">
                            <a class="lightbox-image" href="{{ asset('assets/images/gallery/35.jpg') }}"><img src="{{ asset('assets/images/gallery/35.jpg') }}" alt=""></a>
                        </figure>
                        <div class="hover-box">
                            <div class="hover-inner">
                                <div class="content">
                                    <h4><a href="#">Galactica Super Nova</a></h4>
                                    <div class="separator"><span class="dot"></span></div>
                                    <div class="category">Adventure</div>
                                </div>
                            </div>
                            <div class="zoom-btn">
                                <a class="lightbox-image zoom-link" href="{{ asset('assets/images/gallery/35.jpg') }}" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                            </div>
                            <div class="link-btn">
                                <a href="portfolio-single.html"><span class="icon flaticon-link-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Item-->
            <div class="gallery-item-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image">
                            <a class="lightbox-image" href="{{ asset('assets/images/gallery/36.jpg') }}"><img src="{{ asset('assets/images/gallery/36.jpg') }}" alt=""></a>
                        </figure>
                        <div class="hover-box">
                            <div class="hover-inner">
                                <div class="content">
                                    <h4><a href="#">Galactica Super Nova</a></h4>
                                    <div class="separator"><span class="dot"></span></div>
                                    <div class="category">Adventure</div>
                                </div>
                            </div>
                            <div class="zoom-btn">
                                <a class="lightbox-image zoom-link" href="{{ asset('assets/images/gallery/36.jpg') }}" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                            </div>
                            <div class="link-btn">
                                <a href="portfolio-single.html"><span class="icon flaticon-link-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Item-->
            <div class="gallery-item-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image">
                            <a class="lightbox-image" href="{{ asset('assets/images/gallery/37.jpg') }}"><img src="{{ asset('assets/images/gallery/37.jpg') }}" alt=""></a>
                        </figure>
                        <div class="hover-box">
                            <div class="hover-inner">
                                <div class="content">
                                    <h4><a href="#">Galactica Super Nova</a></h4>
                                    <div class="separator"><span class="dot"></span></div>
                                    <div class="category">Adventure</div>
                                </div>
                            </div>
                            <div class="zoom-btn">
                                <a class="lightbox-image zoom-link" href="{{ asset('assets/images/gallery/37.jpg') }}" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                            </div>
                            <div class="link-btn">
                                <a href="portfolio-single.html"><span class="icon flaticon-link-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Item-->
            <div class="gallery-item-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image">
                            <a class="lightbox-image" href="{{ asset('assets/images/gallery/38.jpg') }}"><img src="{{ asset('assets/images/gallery/38.jpg') }}" alt=""></a>
                        </figure>
                        <div class="hover-box">
                            <div class="hover-inner">
                                <div class="content">
                                    <h4><a href="#">Galactica Super Nova</a></h4>
                                    <div class="separator"><span class="dot"></span></div>
                                    <div class="category">Adventure</div>
                                </div>
                            </div>
                            <div class="zoom-btn">
                                <a class="lightbox-image zoom-link" href="{{ asset('assets/images/gallery/38.jpg') }}" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                            </div>
                            <div class="link-btn">
                                <a href="portfolio-single.html"><span class="icon flaticon-link-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
   <!--Contact Section-->
    <section class="info-section">
        <div class="bubble-dotted">
            <span class="dotted dotted-1"></span>
            <span class="dotted dotted-2"></span>
            <span class="dotted dotted-3"></span>
            <span class="dotted dotted-4"></span>
            <span class="dotted dotted-5"></span>
            <span class="dotted dotted-6"></span>
            <span class="dotted dotted-7"></span>
            <span class="dotted dotted-8"></span>
            <span class="dotted dotted-9"></span>
            <span class="dotted dotted-10"></span>
        </div>
        <div class="image-layer" style="background-image: url(images/background/image-5.jpg);"></div>
        <div class="faded-text style-two light"><div class="f-text"><span>contact</span></div></div>
        <div class="auto-container">
            <div class="sec-title-three light centered">
                <div class="sub-title">contact</div>
                <h2>get in touch</h2>
            </div>
            <div class="info">
                <div class="row clearfix">
                    <!--Info Block-->
                    <div class="info-box col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner hvr-bob">
                            <div class="icon-box"><span class="flaticon-call"></span></div>
                            <h4>phone number</h4>
                            <ul>
                                <li><a href="tel:+8767676575498">+8767 6765 7549 8</a></li>
                                <li><a href="tel:+8767676575498">+8(098) 6765 7549 8</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Info Block-->
                    <div class="info-box col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner hvr-bob">
                            <div class="icon-box"><span class="flaticon-envelope"></span></div>
                            <h4>email address</h4>
                            <ul>
                                <li><a href="mailto:info@webmail.com">info@webmail.com</a></li>
                                <li><a href="mailto:example@mail.co">example@mail.co</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Info Block-->
                    <div class="info-box col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner hvr-bob">
                            <div class="icon-box"><span class="flaticon-worldwide-1"></span></div>
                            <h4>web address</h4>
                            <ul>
                                <li><a href="http://www.exapmple.com">exapmple.com</a></li>
                                <li><a href="http://www.jobs.exapmple.com">jobs.exapmple.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Info Block-->
                    <div class="info-box col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner hvr-bob">
                            <div class="icon-box"><span class="flaticon-placeholder-3"></span></div>
                            <h4>office address</h4>
                            <ul>
                                <li>14/A, Kiroban City,</li>
                                <li>London, UK</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="call-to-box">
                <div class="sec-title-three light centered">
                    <div class="sub-title">call to action</div>
                    <h2>anything on your mind <br>let us know.</h2>
                    <div class="link-box clearfix">
                        <a href="contact.html" class="theme-btn btn-style-three"><span class="btn-title">get a quote</span></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection