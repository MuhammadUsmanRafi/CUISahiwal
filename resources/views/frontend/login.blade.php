<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>CUISAHIWAL | Login</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <link href="css/color-switcher-design.css" rel="stylesheet" />

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
</head>

<body>
    <div class="page-wrapper">
        <div class="preloader"></div>
        <span class="header-span"></span>
        <header class="main-header header-style-two">
            <div class="main-box">
                <div class="auto-container clearfix">
                    <div class="logo-box">
                        <div class="logo">
                            <a href="{{ url('/admin/login') }}"><img src="frontend/images/favicon/apple-touch-icon.png"
                                    alt="" title="" /></a>
                        </div>
                    </div>

                    <div class="nav-outer clearfix">
                        <div class="mobile-nav-toggler">
                            <span class="icon flaticon-menu"></span>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-button"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="dropdown">
                                        <a href="index-2.html">Home</a>
                                        <ul>
                                            <li><a href="index-2.html">Home Classic</a></li>
                                            <li><a href="index-3.html">Home Conference</a></li>
                                            <li><a href="index-4.html">Home Meetup</a></li>
                                            <li><a href="index-5.html">Home Page Four</a></li>
                                            <li><a href="index-6.html">Home Page Five</a></li>
                                            <li class="dropdown">
                                                <a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index-2.html">Header Style One</a></li>
                                                    <li><a href="index-3.html">Header Style Two</a></li>
                                                    <li>
                                                        <a href="index-4.html">Header Style Three</a>
                                                    </li>
                                                    <li><a href="index-5.html">Home Page Four</a></li>
                                                    <li><a href="index-6.html">Home Page Five</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="about-us.html">About</a>
                                        <ul>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li><a href="faqs.html">FAQ's</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="speakers.html">Speakers</a>
                                        <ul>
                                            <li><a href="speakers.html">Speakers</a></li>
                                            <li>
                                                <a href="speakers-detail.html">Speakers Detail</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="schedule.html">Schedule</a>
                                        <ul>
                                            <li><a href="schedule.html">Schedule</a></li>
                                            <li><a href="event-detail.html">Event Detail</a></li>
                                            <li><a href="buy-ticket.html">Buy Ticket</a></li>
                                        </ul>
                                    </li>
                                    <li class="current dropdown">
                                        <a href="blog-sidebar.html">Blog</a>
                                        <ul>
                                            <li>
                                                <a href="blog-sidebar.html">Blog With Sidebar</a>
                                            </li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-single.html">Blog Single</a></li>
                                            <li><a href="error-page.html">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Outer box -->
                        <div class="outer-box">
                            <!--Search Box-->
                            <div class="search-box-btn">
                                <span class="flaticon-search"></span>
                            </div>

                            <!-- Button Box -->
                            <div class="btn-box">
                                <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">Get
                                        Tickets</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn">
                    <span class="icon flaticon-cancel-1"></span>
                </div>

                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                <nav class="menu-box">
                    <div class="nav-logo">
                        <a href="index-2.html"><img src="images/logo-2.png" alt="" title="" /></a>
                    </div>

                    <ul class="navigation clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>
                </nav>
            </div>
            <!-- End Mobile Menu -->
        </header>
        <!--End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image: url(images/background/5.jpg)">
            <div class="auto-container">
                <h1>login</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>login</li>
                </ul>
            </div>
        </section>
        <!--End Page Title-->

        <!-- Register Section -->
        <section class="register-section">
            <div class="auto-container">
                <!-- Form Box -->
                <div class="form-box">
                    <div class="box-inner">
                        <h1>Login Now</h1>

                        <!--Login Form-->
                        <div class="styled-form login-form">
                            <form method="post" action="https://expert-themes.com/html/eventrox/index.html">
                                <div class="form-group">
                                    <span class="adon-icon"><span class="fa fa-user"></span></span>
                                    <input type="text" name="username" value=""
                                        placeholder="Your Name *" />
                                </div>
                                <div class="form-group">
                                    <span class="adon-icon"><span class="fa fa-envelope"></span></span>
                                    <input type="email" name="useremil" value=""
                                        placeholder="Emai Address*" />
                                </div>
                                <div class="form-group">
                                    <span class="adon-icon"><span class="fa fa-unlock"></span></span>
                                    <input type="password" name="userpassword" value=""
                                        placeholder="Enter Password" />
                                </div>
                                <div class="clearfix">
                                    <div class="form-group pull-left">
                                        <button type="button" class="theme-btn btn-style-two">
                                            <span class="btn-title">Login Now</span>
                                        </button>
                                    </div>
                                    <div class="form-group social-icon-one pull-right">
                                        Or login with &ensp;
                                        <li><a href="#" class="fab fa-facebook-f"></a></li>
                                        <li><a href="#" class="fab fa-twitter"></a></li>
                                        <li><a href="#" class="fab fa-google"></a></li>
                                    </div>
                                </div>

                                <div class="clearfix">
                                    <div class="pull-left">
                                        <input type="checkbox" id="remember-me" /><label class="remember-me"
                                            for="remember-me">&nbsp; Remember Me</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Register Section -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="auto-container">
                    <div class="row">
                        <!--Big Column-->
                        <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <!--Footer Column-->
                                <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget about-widget">
                                        <div class="logo">
                                            <a href="index-2.html"><img src="images/logo.png" alt="" /></a>
                                        </div>
                                        <div class="text">
                                            <p>
                                                We have very good strength in innovative technology
                                                and tools with over 35 years of experience. We makes
                                                long-term investments goal in global companies in
                                                different sectors, mainly in Europe and other
                                                countries.
                                            </p>
                                        </div>
                                        <ul class="social-icon-one social-icon-colored">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-dribbble"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget useful-links">
                                        <h2 class="widget-title">Useful Links</h2>
                                        <ul class="user-links">
                                            <li><a href="index-3.html">Home</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="projects.html">Projects</a></li>
                                            <li><a href="blog.html">Blogs</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Big Column-->
                        <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <!--Footer Column-->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <!--Footer Column-->
                                    <div class="footer-widget contact-widget">
                                        <h2 class="widget-title">Contact Us</h2>
                                        <!--Footer Column-->
                                        <div class="widget-content">
                                            <ul class="contact-list">
                                                <li>
                                                    <span class="icon flaticon-clock"></span>
                                                    <div class="text">Mon - Fri: 09:00 - 18:00</div>
                                                </li>

                                                <li>
                                                    <span class="icon flaticon-phone"></span>
                                                    <div class="text">
                                                        <a href="tel:+1-345-5678-77">+1-345-5678-77</a>
                                                    </div>
                                                </li>

                                                <li>
                                                    <span class="icon flaticon-paper-plane"></span>
                                                    <div class="text">
                                                        <a href="mailto:support@example.com">support@example.com</a>
                                                    </div>
                                                </li>

                                                <li>
                                                    <span class="icon flaticon-worldwide"></span>
                                                    <div class="text">
                                                        13005 Greenville Avenue<br />
                                                        California, TX 70240
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <!--Footer Column-->
                                    <div class="footer-widget instagram-widget">
                                        <h2 class="widget-title">Instagram Gallery</h2>
                                        <div class="widget-content">
                                            <div class="outer clearfix">
                                                <figure class="image">
                                                    <a href="images/gallery/1.jpg" class="lightbox-image"
                                                        title="Image Title Here"><img src="images/resource/gw-1.jpg"
                                                            alt="" /></a>
                                                </figure>

                                                <figure class="image">
                                                    <a href="images/gallery/2.jpg" class="lightbox-image"
                                                        title="Image Title Here"><img src="images/resource/gw-2.jpg"
                                                            alt="" /></a>
                                                </figure>

                                                <figure class="image">
                                                    <a href="images/gallery/3.jpg" class="lightbox-image"
                                                        title="Image Title Here"><img src="images/resource/gw-3.jpg"
                                                            alt="" /></a>
                                                </figure>

                                                <figure class="image">
                                                    <a href="images/gallery/4.jpg" class="lightbox-image"
                                                        title="Image Title Here"><img src="images/resource/gw-4.jpg"
                                                            alt="" /></a>
                                                </figure>

                                                <figure class="image">
                                                    <a href="images/gallery/5.jpg" class="lightbox-image"
                                                        title="Image Title Here"><img src="images/resource/gw-5.jpg"
                                                            alt="" /></a>
                                                </figure>

                                                <figure class="image">
                                                    <a href="images/gallery/1.jpg" class="lightbox-image"
                                                        title="Image Title Here"><img src="images/resource/gw-6.jpg"
                                                            alt="" /></a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Footer Bottom-->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <div class="copyright-text">
                            <p>
                                © Copyright 2023 All Rights Reserved by
                                <a href="index-2.html">Expert-Themes</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
    <!--End pagewrapper-->

    <!-- Color Palate / Color Switcher -->
    <div class="color-palate">
        <div class="color-trigger">
            <i class="fa fa-cog"></i>
        </div>
        <div class="color-palate-head">
            <h6>Choose Your Demo</h6>
        </div>
        <ul class="box-version option-box">
            <li>Full width</li>
            <li class="box">Boxed</li>
        </ul>
        <ul class="rtl-version option-box">
            <li>LTR Version</li>
            <li class="rtl">RTL Version</li>
        </ul>
        <div class="palate-foo">
            <span>You will find much more options for colors and styling in admin
                panel. This color picker is used only for demonstation purposes.</span>
        </div>
        <a href="#" class="purchase-btn">Purchase now</a>
    </div>
    <!-- End Color Switcher -->

    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn">
            <span class="fas fa-window-close"></span>
        </div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="https://expert-themes.com/html/eventrox/index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value=""
                                placeholder="Search Here" required />
                            <input type="submit" value="Search Now!" class="theme-btn" />
                        </fieldset>
                    </div>
                </form>

                <br />
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Seo</a></li>
                    <li><a href="#">Bussiness</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Digital</a></li>
                    <li><a href="#">Conferance</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html">
        <span class="fa fa-angle-double-up"></span>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>
    <!-- Color Setting -->
    <script src="js/color-settings.js"></script>
</body>

<!-- Mirrored from expert-themes.com/html/eventrox/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 May 2024 06:20:09 GMT -->

</html>
