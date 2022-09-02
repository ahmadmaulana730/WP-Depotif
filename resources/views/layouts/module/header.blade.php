<header class="main-header header-style-one">
    <!-- Header Upper -->
    <div class="bg-white header-upper ">
        <div class=" auto-container clearfix">
            <div class=" inner clearfix ">
               
                <!--Logo-->
                <div class="logo-box ml-5">
                    <div class="logo"><a href="index.html" title=""><img src="{{ asset('assets/images/logo/logo.png') }}" alt="" title="" width="100px" height="30px"></a></div>
                </div>
                <div class="nav-content clearfix">
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="/">Home</a>
                                        {{-- <ul>
                                            <li><a href="index.html">Homepage 01</a></li>
                                            <li><a href="index-2.html">Homepage 02</a></li>
                                            <li><a href="index-3.html">Homepage 03</a></li>
                                            <li><a href="index-4.html">Homepage 04</a></li>
                                            <li><a href="index-5.html">Homepage 05</a></li>
                                        </ul> --}}
                                    </li>
                                    <li class="dropdown"><a href="/about" class="text-dark">About</a>
                                        <ul>
                                            <li><a href="/about" >About Us</a></li>
                                           
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#" class="text-dark" >Services</a>
                                        <ul>
                                            <li><a href="/services">Services Type 01</a></li>
                                            <li><a href="/services-2">Services Type 02</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#" class="text-dark">Portfolio</a>
                                        <ul>
                                            <li><a href="/portofolio">Portfolio Default</a></li>
                                            <li><a href="/portofolio-2">Portfolio Masonry</a></li>
                                            <li><a href="/portofolio-3">Portfolio Single</a></li>
                                        </ul>
                                    </li>
                                    {{-- <li class="dropdown"><a href="blog.html">News</a>
                                        <ul>
                                            <li><a href="blog.html">News Default</a></li>
                                            <li><a href="blog-masonry.html">News Masonry</a></li>
                                            <li><a href="blog-single.html">News Details</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="{{ route('contact.index') }}" class="text-dark">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>

                <!--Other Links-->
                <div class="other-links clearfix">
                    <!--Nav Toggler-->
                    <div class="max-nav-toggler">
                        <button class="theme-btn toggle-btn"><span class="flaticon-menu-2"></span></button>
                    </div>

                    <!--Search Btn-->
                    <div class="search-btn">
                        <button type="button" class="theme-btn search-toggler"><span class="icon flaticon-loupe-2"></span></button>
                    </div>

                    

                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-targeting-cross"></span></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->
     <!--Search Popup-->
     <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-targeting-cross"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
                
                <br>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Idea</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Growth</a></li>
                    <li><a href="#">Plan</a></li>
                </ul>
            
            </div>
            
        </div>
    </div>

    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar right-align">
        
        <div class="hidden-bar-closer">
            <button><span class="flaticon-letter-x"></span></button>
        </div>
        
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
            
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" alt="" /></a>
            </div>
            <div class="content-box">
                <h3>Get In Touch</h3>
                <div class="text">We must explain to you how all seds this mistakens idea off denouncing pleasures and praising pain was born and I will give you a completed accounts..</div>
                <a href="about.html" class="theme-btn btn-style-two"><div class="btn-title">Consultation</div></a>
            </div>
            <div class="contact-info">
                <h2>Contact Info</h2>
                <ul class="list-style-two">
                    <li><span class="icon fa fa-map-marker-alt"></span>Jln.Karawitan No.117A Kota Bandung Kota Bandung Jawa Barat</li>
                    <li><span class="icon fa fa-phone-alt"></span><a href="tel:555626-0234">+62-8211-6823-986</a></li>
                    <li><span class="icon fa fa-envelope-open"></span> <a href="mailto:support@sailing.com">info@dipotif.com</a></li>
                    
                </ul>
            </div>
        </div><!-- / Hidden Bar Wrapper -->
        
    </section>
    <!-- End / Hidden Bar -->


</header>