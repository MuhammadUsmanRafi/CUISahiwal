@extends('frontend.layouts.main')
@section('title', 'Contact Us')
@section('main-container')
    <section class="page-title" style="background-image: url(frontend/images/background/5.jpg)">
        <div class="auto-container">
            <h1>Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="contact-column col-lg-4 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Contact Info</h2>
                        </div>
                        <ul class="contact-info">
                            <li>
                                <span class="icon fa fa-map-marker-alt"></span>
                                <p><strong>COMSATS Institute of Information Technology,</strong></p>
                                <p>Near Chichawatni Road, Sahiwal, Punjab, Pakistan</p>
                            </li>

                            <li>
                                <span class="icon fa fa-phone-volume"></span>
                                <p><strong>Call Us</strong></p>
                                <a href="tel:+92307599078">+92307599078</a>
                            </li>

                            <li>
                                <span class="icon fa fa-envelope"></span>
                                <p><strong>Mail Us</strong></p>
                                <p>
                                    <a href="mailto:musmanrajputt490@gmail.com">musmanrajputt490@gmail.com</a>
                                </p>
                            </li>

                            <li>
                                <span class="icon fa fa-clock"></span>
                                <p><strong>Opening Time</strong></p>
                                <p>Mon - Sat: 08:30am to 4:30pm</p>
                            </li>
                        </ul>

                        <ul class="social-icon-two social-icon-colored">
                            <li>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="contact-form">
                            <div class="sec-title">
                                <h2>Get in Touch</h2>
                            </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-block p-4 border-left-warning">
                                    <strong>
                                        <h1 style="color:#e0139c">{{ $message }}</h1>
                                    </strong>
                                </div>
                            @endif
                            <form method="POST" action="{{ url('/contact-us') }}" id="contact-form">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Name"
                                            value="{{ old('username') }}" />
                                    </div>
                                    @if ($errors->has('username'))
                                        <span class="text-danger">
                                            {{ $errors->first('username') }}
                                        </span>
                                    @endif

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone"
                                            value="{{ old('phone') }}" />
                                    </div>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">
                                            {{ $errors->first('phone') }}
                                        </span>
                                    @endif
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email"
                                            value="{{ old('email') }}" />
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="subject" placeholder="Subject"
                                            value="{{ old('subject') }}" />
                                    </div>
                                    @if ($errors->has('subject'))
                                        <span class="text-danger">
                                            {{ $errors->first('subject') }}
                                        </span>
                                    @endif

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Message" value="{{ old('message') }}"></textarea>
                                    </div>
                                    @if ($errors->has('message'))
                                        <span class="text-danger">
                                            {{ $errors->first('message') }}
                                        </span>
                                    @endif

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit">
                                            <span class="btn-title">Submit Now</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map-section">
        <div class="auto-container">
            <div class="map-outer">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13730.916000118563!2d73.1493516!3d30.641594200000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b6e4dde0c501%3A0xc37ea3d85326203!2sCOMSATS%20University%20Islamabad%20-%20Sahiwal%20Campus!5e0!3m2!1sen!2s!4v1718206812395!5m2!1sen!2s"
                    height="540"></iframe>
            </div>
        </div>
    </section>

@endsection
