@extends('frontend.layouts.main')
@section('title', 'About Us')
@section('main-container')
    <!--Page Title-->

    <section class="page-title" style="background-image: url(frontend/images/background/5.jpg)">
        <div class="auto-container">
            <h1>About Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </section>
    <section class="about-section">
        <div class="anim-icons full-width">
            <span class="icon icon-circle-blue wow fadeIn"></span>

            <span class="icon icon-dots wow fadeInleft"></span>

            <span class="icon icon-circle-1 wow zoomIn"></span>
        </div>

        <div class="auto-container">
            <div class="row">

                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">ABOUT EVENT</span>

                            <h2>Welcome to the COMSATS Sahiwal Annual Symposium 2024</h2>

                            <div class="text">
                                Join us at COMSATS University Islamabad, Sahiwal Campus, for an enriching experience at our
                                Annual Symposium 2024. Engage with experts and explore cutting-edge research and innovations
                                in various fields.
                            </div>
                        </div>

                        <ul class="list-style-one">
                            <li>Multiple announcements during the event.</li>
                            <li>Logo & company details featured prominently.</li>
                            <li>Dedicated blog post thanking each sponsor.</li>
                            <li>Acknowledgment during the opening and closing ceremonies.</li>
                        </ul>

                        <div class="btn-box">
                            <a href="contact.html" class="theme-btn btn-style-three"><span class="btn-title">Register
                                    Now</span></a>
                        </div>
                    </div>
                </div>

                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure class="image wow fadeIn">
                            <img src="frontend/images/resource/about-img-1.jpg" alt />
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="fun-fact-section style-two" style="background-image: url(frontend/images/background/9.jpg)">
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row clearfix">
                    <!-- Column -->
                    @foreach ($facts as $fact)
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="{{ $loop->first ? '0' : $loop->iteration * 400 . 'ms' }}">
                            <div class="count-box">
                                <span class="icon {{ $fact->icon }}"></span>
                                <span class="count-text" data-speed="3000" data-stop="{{ $fact->count }}">0</span>
                                <h4 class="counter-title">{{ $fact->basetitle }}</h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <section class="features-section-two">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon twist-line-1 wow zoomIn"></span>
                <span class="icon twist-line-2 wow zoomIn" data-wow-delay="1s"></span>
                <span class="icon twist-line-3 wow zoomIn" data-wow-delay="2s"></span>
            </div>

            <div class="row">
                <div class="title-block col-lg-4 col-md-12 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="sec-title">
                            <span class="title">Features</span>
                            <h2>Our Features</h2>
                        </div>
                    </div>
                </div>
                @foreach ($features as $feature)
                    <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp"
                        data-wow-delay="{{ $loop->iteration * 400 . 'ms' }}">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon {{ $feature->icon }}"></span>
                            </div>
                            <h4>
                                <a href="#">{{ $feature->title }}</a>
                            </h4>
                            <div class="text">
                                {{ $feature->description }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="call-to-action" style="background-image: url(frontend/images/background/11.jpg)">
        <div class="auto-container">
            <div class="content-box">
                <div class="text">WE'RE A LEADING EDUCATIONAL INSTITUTION</div>

                <h2>
                    We Are Always at The Forefront <br />
                    of Educational Excellence !
                </h2>

                <div class="btn-box">
                    <a href="{{ url('/contact-us') }}" class="theme-btn btn-style-one"><span class="btn-title">Contact
                            Us</span></a>
                </div>
            </div>
        </div>
    </section>


    <section class="event-info-section">
        <div class="auto-container">
            <div class="row">
                <div class="info-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Find Us</span>
                            <h2>Directions to the Venue</h2>
                        </div>

                        <div class="event-info-tabs tabs-box">
                            <ul class="tab-buttons clearfix">
                                <li class="tab-btn active-btn" data-tab="#tab1">Date & Time</li>
                                <li class="tab-btn" data-tab="#tab2">Venue</li>
                                <li class="tab-btn" data-tab="#tab3">Directions</li>
                            </ul>

                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab1">
                                    <h4><span class="icon far fa-calendar"></span> January 20, 2023</h4>
                                    <div class="text">9:00 AM - 4:00 PM</div>
                                    <ul class="info-list">
                                        <li><span class="icon icon_profile"></span> Muhammad Usman</li>
                                        <li><span class="icon icon_phone"></span> <a href="tel:+923075995078">+92307
                                                5995078</a></li>
                                        <li><span class="icon icon_mail"></span> <a
                                                href="mailto:musmanrajputt490@gmail.com">musmanrajputt490@gmail.com</a></li>
                                    </ul>
                                </div>

                                <div class="tab" id="tab2">
                                    <h4><span class="icon fa fa-map-marker-alt"></span> COMSATS Institute of Information
                                        Technology</h4>
                                    <div class="text">
                                        Islamabad, Pakistan
                                    </div>
                                </div>

                                <div class="tab" id="tab3">
                                    <h4><span class="icon fa fa-directions"></span> How to Get There</h4>
                                    <div class="text">
                                        Detailed directions will be provided closer to the event date.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="map-column col-lg-6 col-md-12 col-sm-12">
                    <div class="map-outer">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13730.916000118563!2d73.1493516!3d30.641594200000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b6e4dde0c501%3A0xc37ea3d85326203!2sCOMSATS%20University%20Islamabad%20-%20Sahiwal%20Campus!5e0!3m2!1sen!2s!4v1718206812395!5m2!1sen!2s"
                            height="435"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="newsletter-section">
        <div class="anim-icons full-width">
            <span class="icon icon-shape-3 wow fadeIn"></span>
            <span class="icon icon-line-1 wow fadeIn"></span>
        </div>

        <div class="auto-container">
            <div class="subscribe-form wow fadeInUp" data-wow-delay="500ms">
                <div class="envelope-image"></div>
                <div class="form-inner">
                    <div class="upper-box">
                        <div class="sec-title text-center">
                            <div class="icon-box">
                                <span class="fa fa-envelope"></span>
                            </div>
                            <h2>Subscribe to Our Newsletter</h2>
                            <div class="text">
                                Stay updated with the latest news and events from COMSATS Institute.
                            </div>
                        </div>
                    </div>
                    <center>
                        <div class="btn-box">
                            <a href="{{ url('/contact-us') }}" class="theme-btn btn-style-one"><span class="btn-title">Contact
                                    Us</span></a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </section>



@endsection
