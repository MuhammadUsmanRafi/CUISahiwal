@extends('frontend.layouts.main')
@section('title', 'Schedule')
@section('main-container')

    <section class="page-title" style="background-image: url(frontend/images/background/5.jpg)">
        <div class="auto-container">
            <h1>Schedule</h1>

            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>

                <li>Schedule</li>
            </ul>
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
                                Stay updated with the latest news and events at COMSATS Institute.
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
