@extends('layouts.main')

@section('title')
<title>Difotip</title>
@endsection

@section('content')



<!-- Banner Section -->
<section class="banner-section banner-one">
    {{-- <div class="image-layer" style="background-image: url(images/main-slider/1.jpg);"></div> --}}
    <div class="image-layer" style="background-image: url('{{ asset('assets/images/main-slider/1.jpg')}}');"></div>
    <div class="auto-container">
        <div class="content-box">
            <div class="content clearfix">
                <div class="inner">
                    <div class="services-title">IT Development &nbsp;- &nbsp;Digital Marketing  &nbsp;-&nbsp; Branding Activation</div>
                    <h1>Dipotif <br>Indonesia</h1>
                </div>
            </div>
        </div>  
    </div>
    <div class="scroll-down"><div class="scroll-to-target" data-target="#scroll-section"><span class="icon flaticon-right-arrow"></span></div></div>
</section>
<!--End Banner Section -->

<!--Services Section-->
<section class="services-section" id="scroll-section">
    <div class="faded-text light"><div class="f-text"><span>services</span></div></div>
    <div class="auto-container">
        <div class="sec-title light centered">
            <div class="sub-title">services</div>
            <h2>What We Do</h2>
        </div>

        <div class="row clearfix">
            <!--Block-->
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow flipInY" data-wow-delay="0ms">
                    <div class="hover-curve"></div>
                    <div class="bg-icon-box"><span class="flaticon-vector-1"></span></div>
                    <div class="count">01</div>
                    <h3>Branding Activation</h3>
                    <div class="icon-box"><span class="flaticon-vector-1"></span></div>
                    <div class="text">Product Development, Product Consultation, Architecture Design, UX Design</div>
                </div>
            </div>
            <!--Block-->
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow flipInY" data-wow-delay="300ms">
                    <div class="hover-curve"></div>
                    <div class="bg-icon-box"><span class="flaticon-data"></span></div>
                    <div class="count">02</div>
                    <h3>IT Development</h3>
                    <div class="icon-box"><span class="flaticon-data"></span></div>
                    <div class="text">Product Development, Product Consultation, Architecture Design, UX Design</div>
                </div>
            </div>
            <!--Block-->
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow flipInY" data-wow-delay="600ms">
                    <div class="hover-curve"></div>
                    <div class="bg-icon-box"><span class="flaticon-bullhorn"></span></div>
                    <div class="count">03</div>
                    <h3>digital marketing</h3>
                    <div class="icon-box"><span class="flaticon-bullhorn"></span></div>
                    <div class="text">Product Development, Product Consultation, Architecture Design, UX Design</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--About Section-->
<section class="about-section">
    <div class="auto-container">

        <div class="row clearfix">
            <!--Text Column-->
            <div class="text-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner wow fadeInLeft">
                    <div class="sec-title left-aligned">
                        <div class="sub-title">about us</div>
                        <h3>We create the world more better with Technology </h3>
                        <div class="lower-text">Technology is more bigger than the world itself</div>
                        <div class="link-box">
                            <a href="{{ route('contact.index') }}" class="theme-btn btn-style-one"><span class="btn-title">contact us</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Image Column-->
            <div class="image-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner">
                    <figure class="image wow fadeInRight">
                        <img src="images/resource/featured-image-1.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=AT6oSIDbGkw" class="over-link lightbox-image"><span class="icon flaticon-ui"></span></a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Portfolio Section-->
<section class="portfolio-section">
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
    <div class="faded-text"><div class="f-text"><span>Portfolio</span></div></div>
    <div class="auto-container">

        <div class="sec-title centered">
            <div class="sub-title">Portfolio</div>
            <h2>Our Works</h2>
        </div>
    </div>

    <!--Porfolio Tabs-->
    <div class="project-tab">
        <div class="auto-container">
            <div class="tab-btns-box">
                <!--Tabs Header-->
                <div class="tabs-header">
                    <ul class="product-tab-btns clearfix">
                        <li class="p-tab-btn active-btn" data-tab="#p-tab-1">All works</li>
                        <li class="p-tab-btn" data-tab="#p-tab-2">IT Development</li>
                        <li class="p-tab-btn" data-tab="#p-tab-3">Branding Activation</li>
                        <li class="p-tab-btn" data-tab="#p-tab-5">Digital Markeeting</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Tabs Content-->  
        <div class="p-tabs-content">
            <!--Portfolio Tab / Active Tab-->
            <div class="p-tab active-tab" id="p-tab-1">
                <div class="project-carousel owl-theme owl-carousel">
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/1.jpg" alt="">
                            </figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="caption-box">    
                                    <h4><a href="portfolio-single.html">Retina Ready</a></h4>
                                    <span>Web Development</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/2.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Retina Ready</a></h4>
                                        <span>Web Development</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/3.jpg" alt="">
                                <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="caption-box">    
                                    <h4><a href="portfolio-single.html">Retina Ready</a></h4>
                                    <span>Web Development</span>
                                </div>
                            </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/4.jpg" alt="">
                                <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="caption-box">    
                                    <h4><a href="portfolio-single.html">Pixel Perfect</a></h4>
                                    <span>Web Design</span>
                                </div>
                            </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/1.jpg" alt="">
                                <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="caption-box">    
                                    <h4><a href="portfolio-single.html">Pixel Perfect</a></h4>
                                    <span>Web Design</span>
                                </div>
                            </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/2.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Pixel Perfect</a></h4>
                                        <span>Web Design</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/3.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Retina Ready</a></h4>
                                        <span>Web Development</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/4.jpg" alt="">
                                <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="caption-box">    
                                    <h4><a href="portfolio-single.html">Pixel Perfect</a></h4>
                                    <span>Web Design</span>
                                </div>
                            </div>
                            </figure>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!--Portfolio Tabb-->
            <div class="p-tab" id="p-tab-2">
                <div class="project-carousel owl-theme owl-carousel">
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/1.jpg" alt="">
                                <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="caption-box">    
                                    <h4><a href="portfolio-single.html">Pixel Perfect</a></h4>
                                    <span>Web Design</span>
                                </div>
                            </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/2.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Retina Ready</a></h4>
                                        <span>Web Development</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/3.jpg" alt="">
                                <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="caption-box">    
                                    <h4><a href="portfolio-single.html">Retina Ready</a></h4>
                                    <span>Web Development</span>
                                </div>
                            </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/4.jpg" alt="">
                                <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="caption-box">    
                                    <h4><a href="portfolio-single.html">Pixel Perfect</a></h4>
                                    <span>Web Design</span>
                                </div>
                            </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/1.jpg" alt="">
                                <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="caption-box">    
                                    <h4><a href="portfolio-single.html">Pixel Perfect</a></h4>
                                    <span>Web Design</span>
                                </div>
                            </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/2.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Retina Ready</a></h4>
                                        <span>Web Development</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/3.jpg" alt="">
                                <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="caption-box">    
                                    <h4><a href="portfolio-single.html">Retina Ready</a></h4>
                                    <span>Web Development</span>
                                </div>
                            </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/4.jpg" alt="">
                                <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="caption-box">    
                                    <h4><a href="portfolio-single.html">Pixel Perfect</a></h4>
                                    <span>Web Design</span>
                                </div>
                            </div>
                            </figure>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!--Portfolio Tab-->
            <div class="p-tab" id="p-tab-3">
                <div class="project-carousel owl-theme owl-carousel">
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/1.jpg" alt="">
                                <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="caption-box">    
                                    <h4><a href="portfolio-single.html">Pixel Perfect</a></h4>
                                    <span>Web Design</span>
                                </div>
                            </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/2.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Retina Ready</a></h4>
                                        <span>Web Development</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/3.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Retina Ready</a></h4>
                                        <span>Web Development</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/4.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Pixel Perfect</a></h4>
                                        <span>Web Design</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/1.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Pixel Perfect</a></h4>
                                        <span>Web Design</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/2.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Retina Ready</a></h4>
                                        <span>Web Development</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/3.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Retina Ready</a></h4>
                                        <span>Web Development</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/4.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Pixel Perfect</a></h4>
                                        <span>Web Design</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!--Portfolio Tab-->
            <div class="p-tab" id="p-tab-4">
                <div class="project-carousel owl-theme owl-carousel">
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/1.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Pixel Perfect</a></h4>
                                        <span>Web Design</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/2.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Retina Ready</a></h4>
                                        <span>Web Development</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/3.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Retina Ready</a></h4>
                                        <span>Web Development</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/4.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Pixel Perfect</a></h4>
                                        <span>Web Design</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/1.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Pixel Perfect</a></h4>
                                        <span>Web Design</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/2.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Retina Ready</a></h4>
                                        <span>Web Development</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/3.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Retina Ready</a></h4>
                                        <span>Web Development</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/4.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Pixel Perfect</a></h4>
                                        <span>Web Design</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!--Portfolio Tab-->
            <div class="p-tab" id="p-tab-5">
                <div class="project-carousel owl-theme owl-carousel">
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/1.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Pixel Perfect</a></h4>
                                        <span>Web Design</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/2.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Retina Ready</a></h4>
                                        <span>Web Development</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/3.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Retina Ready</a></h4>
                                        <span>Web Development</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/4.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Pixel Perfect</a></h4>
                                        <span>Web Design</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/1.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Pixel Perfect</a></h4>
                                        <span>Web Design</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/2.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Retina Ready</a></h4>
                                        <span>Web Development</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/3.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Retina Ready</a></h4>
                                        <span>Web Development</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/4.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="caption-box">    
                                        <h4><a href="portfolio-single.html">Pixel Perfect</a></h4>
                                        <span>Web Design</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
            
    </div>
    <div class="auto-container">
        <div class="lower-links">
            <a href="about.html" class="theme-btn btn-style-two wow fadeInLeft" data-wow-delay="0ms"><span class="btn-title"><span class="icon flaticon-briefcase"></span> hire us</span></a>
            <a href="contact.html" class="theme-btn btn-style-one wow fadeInRight" data-wow-delay="0ms"><span class="btn-title">contact us</span></a>
        </div>
    </div>
</section>


<!--Why Us Section-->
<section class="why-choose-section">
    <div class="auto-container">

        <div class="row clearfix">
            <!--Text Column-->
            <div class="text-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title left-aligned">
                        <div class="sub-title">why choose us</div>
                        <h2>Experience</h2>
                    </div>
                    <div class="text-content">
                        <div class="text-block">
                            <div class="title">
                                <h4>Government Project</h4>
                            </div>
                            <div class="icon"><span class="flaticon-display"></span></div>
                            <div class="text">
                                We already create a hundred Project in Government sector, as the Government need the IT Itself, more than hundred works we already create it</div>
                        </div>
                        <div class="text-block">
                            <div class="title">
                                <h4>Company Project</h4>
                            </div>
                            <div class="icon"><span class="flaticon-art"></span></div>
                            <div class="text">As the Corporate work needs the IoT, so we already have a lot of projects based On Erp, Application, Front-End, Back-end, Machine learning, Etc</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Image Column-->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner clearfix">
                    <figure class="image paroller"
                            data-paroller-factor="-0.05"
                            data-paroller-factor-lg="-0.05"
                            data-paroller-factor-md="-0.05"
                            data-paroller-factor-sm="-0.05"
                            data-paroller-type="foreground"
                            data-paroller-direction="horizontal"><img src="images/resource/featured-image-3.jpg" alt=""></figure>
                    <figure class="image paroller"
                            data-paroller-factor="0.05"
                            data-paroller-factor-lg="0.05"
                            data-paroller-factor-md="0.05"
                            data-paroller-factor-sm="0.05"
                            data-paroller-type="foreground"
                            data-paroller-direction="horizontal"><img src="images/resource/featured-image-4.jpg" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Counter Section-->
{{-- <section class="counter-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Counter Block -->
            <div class="counter-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="graph-outer">
                        <input type="text" class="dial" data-fgColor="#ff6000" data-bgColor="none" data-width="200" data-height="200" data-linecap="normal"  value="73" data-thickness="0.02">
                        <div class="inner-text count-box"><span class="count-text" data-stop="73" data-speed="2000"></span><span class="sign">%</span></div>
                    </div>
                    <h5>Client Satifaction</h5>
                </div>
            </div>
            <!-- Counter Block -->
            <div class="counter-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="graph-outer">
                        <input type="text" class="dial" data-fgColor="#ff6000" data-bgColor="none" data-width="200" data-height="200" data-linecap="normal"  value="56" data-thickness="0.02">
                        <div class="inner-text count-box"><span class="count-text" data-stop="56" data-speed="2000"></span><span class="sign">%</span></div>
                    </div>
                    <h5>cup of coffee</h5>
                </div>
            </div>
            <!-- Counter Block -->
            <div class="counter-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="graph-outer">
                        <input type="text" class="dial" data-fgColor="#ff6000" data-bgColor="none" data-width="200" data-height="200" data-linecap="normal"  value="65" data-thickness="0.02">
                        <div class="inner-text count-box"><span class="count-text" data-stop="65" data-speed="2000"></span><span class="sign">%</span></div>
                    </div>
                    <h5>productivity</h5>
                </div>
            </div>
            <!-- Counter Block -->
            <div class="counter-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="graph-outer">
                        <input type="text" class="dial" data-fgColor="#ff6000" data-bgColor="none" data-width="200" data-height="200" data-linecap="normal"  value="39" data-thickness="0.02">
                        <div class="inner-text count-box"><span class="count-text" data-stop="39" data-speed="2000"></span><span class="sign">%</span></div>
                    </div>
                    <h5>country cover</h5>
                </div>
            </div>
        </div>
    </div>
</section> --}}

{{-- <!--Testimonial Section-->
<section class="testimonial-section">
    <div class="image-layer" style="background-image: url(images/background/image-1.jpg);"></div>
    <div class="auto-container">
        <div class="testimonial-carousel owl-theme owl-carousel">
            
            <div class="slide-item">
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="image"><img src="images/resource/author-image-1.jpg" alt="" title=""><div class="icon-box"><span class="flaticon-left-quote"></span></div></div>
                            <div class="info">
                                <h4>Rosalina D. WIlliam</h4>
                                <div class="designation">founder, kilix co.</div>
                            </div>
                            <div class="text">It's difficult to find quality Agency work and it's very expensive in uk. Engaging example was a masterstroke as I'm getting solutions.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide-item">
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="image"><img src="images/resource/author-image-14.jpg" alt="" title=""><div class="icon-box"><span class="flaticon-left-quote"></span></div></div>
                            <div class="info">
                                <h4>Jikiliki Boruna</h4>
                                <div class="designation">Developer, kilix co.</div>
                            </div>
                            <div class="text">It's difficult to find quality Agency work and it's very expensive in uk. Engaging example was a masterstroke as I'm getting solutions.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide-item">
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="image"><img src="images/resource/author-image-15.jpg" alt="" title=""><div class="icon-box"><span class="flaticon-left-quote"></span></div></div>
                            <div class="info">
                                <h4>Hilix Drawnik</h4>
                                <div class="designation">Manager, kilix co.</div>
                            </div>
                            <div class="text">It's difficult to find quality Agency work and it's very expensive in uk. Engaging example was a masterstroke as I'm getting solutions.</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> --}}

<!--Team Section-->
{{-- <section class="team-section">
    <div class="faded-text"><div class="f-text"><span>team</span></div></div>
    <div class="auto-container">
        <div class="sec-title centered">
            <div class="sub-title">Team</div>
            <h2>Our Team</h2>
        </div>

        <div class="team-carousel owl-theme owl-carousel">
            <!--Block-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="images/resource/team-1.jpg" alt="" title=""></figure>
                    </div>
                    <div class="lower-box">
                        <div class="count"><span>01</span></div>
                        <div class="designation">founder</div>
                        <h3 class="name">hilix drawnik</h3>
                        <div class="more-content">
                            <div class="more-btn">+</div>
                            <div class="share-list">
                                <ul>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Block-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="images/resource/team-2.jpg" alt="" title=""></figure>
                    </div>
                    <div class="lower-box">
                        <div class="count"><span>02</span></div>
                        <div class="designation">ceo</div>
                        <h3 class="name">Jikiliki boruna</h3>
                        <div class="more-content">
                            <div class="more-btn">+</div>
                            <div class="share-list">
                                <ul>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Block-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="images/resource/team-3.jpg" alt="" title=""></figure>
                    </div>
                    <div class="lower-box">
                        <div class="count"><span>03</span></div>
                        <div class="designation">developer</div>
                        <h3 class="name">kilix h. humble</h3>
                        <div class="more-content">
                            <div class="more-btn">+</div>
                            <div class="share-list">
                                <ul>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Block-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="images/resource/team-1.jpg" alt="" title=""></figure>
                    </div>
                    <div class="lower-box">
                        <div class="count"><span>01</span></div>
                        <div class="designation">founder</div>
                        <h3 class="name">hilix drawnik</h3>
                        <div class="more-content">
                            <div class="more-btn">+</div>
                            <div class="share-list">
                                <ul>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Block-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="images/resource/team-2.jpg" alt="" title=""></figure>
                    </div>
                    <div class="lower-box">
                        <div class="count"><span>02</span></div>
                        <div class="designation">ceo</div>
                        <h3 class="name">Jikiliki boruna</h3>
                        <div class="more-content">
                            <div class="more-btn">+</div>
                            <div class="share-list">
                                <ul>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Block-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="images/resource/team-3.jpg" alt="" title=""></figure>
                    </div>
                    <div class="lower-box">
                        <div class="count"><span>03</span></div>
                        <div class="designation">developer</div>
                        <h3 class="name">kilix h. humble</h3>
                        <div class="more-content">
                            <div class="more-btn">+</div>
                            <div class="share-list">
                                <ul>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Block-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="images/resource/team-1.jpg" alt="" title=""></figure>
                    </div>
                    <div class="lower-box">
                        <div class="count"><span>01</span></div>
                        <div class="designation">founder</div>
                        <h3 class="name">hilix drawnik</h3>
                        <div class="more-content">
                            <div class="more-btn">+</div>
                            <div class="share-list">
                                <ul>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Block-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="images/resource/team-2.jpg" alt="" title=""></figure>
                    </div>
                    <div class="lower-box">
                        <div class="count"><span>02</span></div>
                        <div class="designation">ceo</div>
                        <h3 class="name">Jikiliki boruna</h3>
                        <div class="more-content">
                            <div class="more-btn">+</div>
                            <div class="share-list">
                                <ul>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Block-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="images/resource/team-3.jpg" alt="" title=""></figure>
                    </div>
                    <div class="lower-box">
                        <div class="count"><span>03</span></div>
                        <div class="designation">developer</div>
                        <h3 class="name">kilix h. humble</h3>
                        <div class="more-content">
                            <div class="more-btn">+</div>
                            <div class="share-list">
                                <ul>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> --}}


@endsection
