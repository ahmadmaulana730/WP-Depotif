@extends('layouts.main')

@section('title')
<title>Difotip</title>
@endsection

@section('content')
 <!-- Banner Section -->
 <section class="page-banner">
    <div class="image-layer" style="background-image:url(images/background/banner-image-1.jpg);"></div>

    <div class="banner-inner">
        <div class="faded-text light"><div class="f-text"><span>contact</span></div></div>
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>contact us</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-section">
    <div class="auto-container">

        <div class="row clearfix">

            <div class="form-column col-lg-6 col-md-12">
                <div class="inner">
                    <div class="sec-title left-aligned">
                        <div class="sub-title">get in touch</div>
                        <h2>drop us a line with estimate</h2>
                    </div>
                    <div class="form-box">
                        <div class="default-form contact-form">
                            {{-- <form method="post" action="sendemail.php" id="contact-form" novalidate="novalidate"> --}}
                                <div class="service-select clearfix">
                                    <div class="radio-block">
                                        <input type="radio" name="service" id="radio-1">
                                        <label for="radio-1">Web Design</label>
                                    </div>
                                    <div class="radio-block">
                                        <input checked="" type="radio" name="service" id="radio-2">
                                        <label for="radio-2">UIx Design</label>
                                    </div>
                                    <div class="radio-block">
                                        <input type="radio" name="service" id="radio-3">
                                        <label for="radio-3">Game Design</label>
                                    </div>
                                    <div class="radio-block">
                                        <input type="radio" name="service" id="radio-4">
                                        <label for="radio-4">Icon Design</label>
                                    </div>
                                    <div class="radio-block">
                                        <input type="radio" name="service" id="radio-5">
                                        <label for="radio-5">consultacny</label>
                                    </div>
                                </div>                       
                                <div class="form-group">
                                    <div class="field-inner">
                                        <input type="text" name="name" placeholder="Enter your name" required="" value="">
                                        <div class="field-icon"><span class="flaticon-people"></span></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="field-inner">
                                        <input type="email" name="email" placeholder="Enter your email" required="" value="">
                                        <div class="field-icon"><span class="flaticon-envelope"></span></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="field-inner">
                                        <textarea name="message" placeholder="Type your message" required=""></textarea>
                                        <div class="field-icon"><span class="flaticon-edit"></span></div>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <div class="btn-box">
                                        <button type="submit" class="theme-btn btn-style-two"><span class="btn-title">Submit Now</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

             <div class="map-column col-lg-6 col-md-12"> 
                <div class="inner">
                    <!--Map Box-->
                    <div class="map-box">
                        {{-- <div class="map-canvas"
                            data-zoom="12"
                            data-lat="-37.817085"
                            data-lng="144.955631"
                            data-type="roadmap"
                            data-hue="#ffc400"
                            data-title="Singapore"
                            data-icon-path="images/icons/map-marker.png"
                            data-content="Singapore VIC 3000, USA<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                        </div> --}}
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56211042157!2d107.64315755!3d-6.90344945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1660171318112!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div> 

        </div>
    </div>
</section>
@endsection 
