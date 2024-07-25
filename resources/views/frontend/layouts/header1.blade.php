<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') | CUISAHIWAL</title>
    <link href="../frontend/css/bootstrap.css" rel="stylesheet" />
    <link href="../frontend/css/bootstrrap.min.css" rel="stylesheet" />
    <link href="../frontend/css/style.css" rel="stylesheet" />
    <link href="../frontend/css/responsive.css" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="180x180" href="../frontend/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../frontend/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../frontend/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
</head>

<body>
    <div class="page-wrapper">
        <header class="main-header">
            <div class="main-box">
                <div class="auto-container clearfix">
                    <div class="logo-box">
                        <div class="logo" style="height: 50px; width: 50px">
                            <a href="{{ url('/') }}"><img src="../frontend/images/favicon/apple-touch-icon.png" alt
                                    title /></a>
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
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/speakers') }}">Speakers</a></li>
                                    <li><a href="{{ url('/schedule') }}">Schedule</a></li>
                                    <li><a href="{{ url('/blogs') }}">Blog</a></li>
                                    <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                    <li><a href="{{ url('/faqs') }}">FAQ's</a></li>
                                    <li><a href="{{ url('/contact-us') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>



                        <div class="outer-box">
                            <div class="btn-box">
                                <a href="{{ url('/register') }}" class="theme-btn btn-style-one"><span
                                        class="btn-title">Get
                                        Registered</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>

                <div class="close-btn">
                    <span class="icon flaticon-cancel-1"></span>
                </div>
                <nav class="menu-box">
                    <div class="nav-logo">
                        <a href="index-2.html"><img src="../frontend/images/logo-2.png" alt title /></a>
                    </div>

                    <ul class="navigation clearfix">
                    </ul>
                </nav>
            </div>
        </header>
