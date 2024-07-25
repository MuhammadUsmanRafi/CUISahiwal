@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')

    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">
            @foreach ($commingsoonevents as $event)
                <div class="slide-item" style="background-image: url({{ $event->imageurl }})">
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="title">{{ \Carbon\Carbon::parse($event->eventdate)->format('F d, Y') }}</span>
                            <h2>{{ $event->title }} <br> {{ $event->subtitle }}</h2>
                            <ul class="info-list">
                                <li><span class="icon fa fa-chair"></span> {{ $event->seats }} Seats</li>
                                <li><span class="icon fa fa-user-alt"></span> {{ $event->speakers }} Speakers</li>
                                <li><span class="icon fa fa-map-marker-alt"></span> {{ $event->location }}</li>
                            </ul>
                            <div class="btn-box">
                                <a href="{{ url('/register') }}" class="theme-btn btn-style-two">
                                    <span class="btn-title">Register Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="coming-soon-section">
        <div class="auto-container">
            <div class="outer-box">
                <div class="time-counter">
                    <div class="time-countdown clearfix"
                        data-countdown="{{ \Carbon\Carbon::parse($counterdate)->format('m/d/Y') }}"></div>
                </div>
            </div>
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
                            <a href="{{ url('register') }}" class="theme-btn btn-style-three"><span class="btn-title">Register
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

    <section class="speakers-section-three">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Speakers</span>
                <h2>Todays Performers</h2>
            </div>

            <div class="row">
                @foreach ($speakers as $speaker)
            <div class="speaker-block-three col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="speakers-detail.html"><img src="{{ $speaker->imageurl }}" alt="image not found" /></a>
                        </figure>
                    </div>

                    <div class="info-box">
                        <h4 class="name">
                            <a href="speakers-detail.html">{{ $speaker->sname }}</a>
                        </h4>

                        <span class="designation">{{ $speaker->designation }}</span>
                    </div>

                    <div class="social-box">
                        <ul class="social-links social-icon-colored">
                            <li>
                                <a href="{{ $speaker->furl }}"><i class="fab fa-facebook-f"></i></a>
                            </li>

                            <li>
                                <a href="{{ $speaker->turl }}"><i class="fab fa-twitter"></i></a>
                            </li>

                            <li>
                                <a href="{{ $speaker->purl }}"><i class="fab fa-pinterest"></i></a>
                            </li>

                            <li>
                                <a href="{{ $speaker->durl }}"><i class="fab fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </section>

    <section class="fun-fact-section">
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row clearfix">
                    @foreach ($facts as $fact)
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="{{ $loop->first ? '0' : $loop->iteration * 400 . 'ms' }}">
                            <div class="count-box">
                                <span class="icon {{ $fact->icon }}"></span>
                                <span class="count-text" data-speed="3000"
                                    data-stop="{{ $fact->count }}">0</span>
                                <h4 class="counter-title">{{ $fact->basetitle }}</h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="schedule-section">
        <div class="anim-icons">
            <span class="icon icon-circle-4 wow zoomIn"></span>

            <span class="icon icon-circle-3 wow zoomIn"></span>
        </div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">About Conference</span>

                <h2>Schedule Plan</h2>
            </div>

            <div class="schedule-tabs tabs-box">
                <div class="btns-box">
                    <ul class="tab-buttons clearfix">
                        @foreach ($schedules as $schedule)
                        <li class="tab-btn {{ $loop->first ? 'active-btn' : '' }}" data-tab="#tab-{{ $loop->iteration }}">
                            <span class="day">Day {{ $schedule->day }}</span>
                            <span class="date">{{ $schedule->dd }}</span>
                            <span class="month">{{ $schedule->mm }} {{ $schedule->yyyy }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="tabs-content">
                    @foreach ($schedules as $schedule)
                    <div class="tab {{ $loop->first ? 'active-tab' : '' }}" id="tab-{{ $loop->iteration }}">
                        <div class="schedule-timeline">
                            @foreach ($schedule->events as $event)
                            <div class="schedule-block {{ $loop->even ? 'even' : '' }}">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">
                                            {{ $event->starttime }} <br />
                                            {{ $event->endtime }}
                                        </div>

                                        <div class="speaker-info">
                                            <figure class="thumb">
                                                <img src="{{ $event->imageurl }}" alt="" />
                                            </figure>

                                            <h5 class="name">{{ $event->speaker }}</h5>
                                            <span class="designation">{{ $event->designation }}</span>
                                        </div>

                                        <h4>{{ $event->title }}</h4>

                                        <div class="text">
                                            {{ $event->description }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="pricing-section">
        <div class="anim-icons">
            <span class="icon icon-circle-green wow fadeIn"></span>
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon icon-circle-pink wow fadeIn"></span>
        </div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Get Ticket</span>
                <h2>Choose a Ticket</h2>
            </div>

            <div class="outer-box">
                <div class="row">
                    @foreach ($pricings as $pricing)
                        <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <div class="icon-outer">
                                        <span class="icon {{ $pricing->icon_class }}"></span>
                                    </div>
                                </div>

                                <div class="price-box">
                                    <div class="title">{{ $pricing->title }}</div>
                                    <h4 class="price">Rs. {{ $pricing->price }}</h4>
                                </div>

                                <ul class="features">
                                    @foreach (json_decode($pricing->features, true) as $feature)
                                        <li class="{{ $feature['available'] ? 'true' : 'false' }}">{{ $feature['name'] }}
                                        </li>
                                    @endforeach
                                </ul>

                                <div class="btn-box">
                                    <a href="#" class="theme-btn">BUY Ticket</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="video-section" style="background-image: url(frontend/images/background/1.jpg)">
        <div class="auto-container">
            <div class="content-box">
                <div class="text">WE'RE A LEADING EDUCATIONAL INSTITUTION</div>
                <h2>
                    We Are Always at The <br />Forefront of Academic Excellence!
                </h2>
                <a href="https://www.youtube.com/embed/Xl6db-WMuE0" class="play-now" data-fancybox="gallery"
                    data-caption><i class="icon flaticon-play-button-3" aria-hidden="true"></i><span
                        class="ripple"></span></a>
            </div>
        </div>
    </section>

    <section class="why-choose-us">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">JOIN THE EVENT</span>
                            <h2>Why Choose COMSATS Sahiwal?</h2>
                            <div class="text">
                                Explore why COMSATS Sahiwal is your ideal choice for academic excellence and growth:
                            </div>
                        </div>
                        <ul class="list-style-one">
                            <li>High Quality Education</li>
                            <li>Diverse Learning Opportunities</li>
                            <li>Expert Faculty</li>
                            <li>Supportive Learning Environment</li>
                        </ul>
                        <div class="btn-box">
                            <a href="{{ url('/register') }}" class="theme-btn btn-style-two"><span class="btn-title">Get
                                    Tickets</span></a>
                        </div>
                    </div>
                </div>
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure class="image">
                            <img src="frontend/images/background/3.jpg" alt="COMSATS Sahiwal Campus" />
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section">
        <div class="anim-icons">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon twist-line-1 wow zoomIn"></span>
            <span class="icon twist-line-2 wow zoomIn"></span>
            <span class="icon twist-line-3 wow zoomIn"></span>
        </div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">News & Updates</span>
                <h2>Discover What's Happening</h2>
            </div>

            <div class="row">
                @foreach ($blogs as $blog)
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="{{ $loop->iteration * 400 . "ms" }}">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="{{ url('blog-detail/'. $blog->id )}}"><img src="{{ $blog->imageurl }}" alt="image not load" /></a>
                            </figure>
                        </div>

                        <div class="lower-content">
                            <ul class="post-info">
                                <li><span class="far fa-user"></span> {{ $blog->uploadedby }}</li>

                                <li><span class="far fa-comments"></span> Comment 0{{ $blog->totalcomment }}</li>
                            </ul>

                            <h4>
                                <a href="{{ url('blog-detail/'. $blog->id )}}">{{ $blog->title }}</a>
                            </h4>

                            <div class="btn-box">
                                <a href="{{ url('blog-detail/'. $blog->id )}}" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
