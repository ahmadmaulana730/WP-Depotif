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

{{-- <section class="portfolio-section-three fullwidth portfolio-masonry">
    <!--Masonry Galery-->
    <div class="sortable-masonry filter-gallery">
        <div class="filters clearfix">
            <ul class="filter-tabs filter-btns clearfix">
                <li class="filter active" data-role="button" data-filter=".all">All Works</li>
                <li class="filter" data-role="button" data-filter=".web">Web Design</li>
                <li class="filter" data-role="button" data-filter=".uxui">UX Design</li>
                <li class="filter" data-role="button" data-filter=".game">Game Design</li>
                <li class="filter" data-role="button" data-filter=".seo">SEO</li>
            </ul>                     
        </div>

        <div class="items-container clearfix">
            <!--Gallery Item-->
            <div class="gallery-item-two masonry-item all game">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image">
                            <a class="lightbox-image" href="images/gallery/25.jpg"><img src="images/gallery/25.jpg" alt=""></a>
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
                                <a class="lightbox-image zoom-link" href="images/gallery/25.jpg" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                            </div>
                            <div class="link-btn">
                                <a href="portfolio-single.html"><span class="icon flaticon-link-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Item-->
            <div class="gallery-item-two masonry-item all seo">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image">
                            <a class="lightbox-image" href="images/gallery/27.jpg"><img src="images/gallery/27.jpg" alt=""></a>
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
                                <a class="lightbox-image zoom-link" href="images/gallery/27.jpg" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                            </div>
                            <div class="link-btn">
                                <a href="portfolio-single.html"><span class="icon flaticon-link-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Item-->
            <div class="gallery-item-two masonry-item width-50 all web uxui seo">
                <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image">
                            <a class="lightbox-image" href="images/gallery/28.jpg"><img src="images/gallery/28.jpg" alt=""></a>
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
                                <a class="lightbox-image zoom-link" href="images/gallery/28.jpg" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                            </div>
                            <div class="link-btn">
                                <a href="portfolio-single.html"><span class="icon flaticon-link-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Item-->
            <div class="gallery-item-two masonry-item all web game seo">
                <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image">
                            <a class="lightbox-image" href="images/gallery/26.jpg"><img src="images/gallery/26.jpg" alt=""></a>
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
                                <a class="lightbox-image zoom-link" href="images/gallery/26.jpg" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                            </div>
                            <div class="link-btn">
                                <a href="portfolio-single.html"><span class="icon flaticon-link-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Item-->
            <div class="gallery-item-two masonry-item width-50 all web uxui game">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image">
                            <a class="lightbox-image" href="images/gallery/29.jpg"><img src="images/gallery/29.jpg" alt=""></a>
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
                                <a class="lightbox-image zoom-link" href="images/gallery/29.jpg" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                            </div>
                            <div class="link-btn">
                                <a href="portfolio-single.html"><span class="icon flaticon-link-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Item-->
            <div class="gallery-item-two masonry-item all uxui game seo">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image">
                            <a class="lightbox-image" href="images/gallery/30.jpg"><img src="images/gallery/30.jpg" alt=""></a>
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
                                <a class="lightbox-image zoom-link" href="images/gallery/30.jpg" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                            </div>
                            <div class="link-btn">
                                <a href="portfolio-single.html"><span class="icon flaticon-link-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Item-->
            <div class="gallery-item-two masonry-item all seo">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image">
                            <a class="lightbox-image" href="images/gallery/31.jpg"><img src="images/gallery/31.jpg" alt=""></a>
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
                                <a class="lightbox-image zoom-link" href="images/gallery/31.jpg" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
                            </div>
                            <div class="link-btn">
                                <a href="portfolio-single.html"><span class="icon flaticon-link-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Item-->
            <div class="gallery-item-two masonry-item all web uxui seo">
                <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="image-box">
                        <figure class="image">
                            <a class="lightbox-image" href="images/gallery/32.jpg"><img src="images/gallery/32.jpg" alt=""></a>
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
                                <a class="lightbox-image zoom-link" href="images/gallery/32.jpg" data-fancybox="gallery"><span class="icon flaticon-expand"></span></a>
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
</section> --}}

<!--Testimonial Section-->
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

        </div>
    </div>
</section>

@endsection