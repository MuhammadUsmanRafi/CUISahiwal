@extends('frontend.layouts.main')
@section('title', 'Speakers')
@section('main-container')
<!--Page Title-->
<section class="page-title" style="background-image: url(frontend/images/background/5.jpg)">
    <div class="auto-container">
        <h1>Speakers</h1>

        <ul class="bread-crumb clearfix">
            <li><a href="index-2.html">Home</a></li>

            <li>Speakers</li>
        </ul>
    </div>
</section>

<!--End Page Title-->

<!-- Speakers Section -->

<section class="speakers-section-three">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Speakers</span>

            <h2>Todays Performers</h2>
        </div>

        <div class="row">
            <!-- Speaker Block -->
            @foreach ($result as $row)
            <div class="speaker-block-three col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <img src="{{ $row->imageurl }}" alt="image not found" />
                        </figure>
                    </div>

                    <div class="info-box">
                        <h4 class="name">
                            {{ $row->sname }}
                        </h4>

                        <span class="designation">{{ $row->designation }}</span>
                    </div>

                    <div class="social-box">
                        <ul class="social-links social-icon-colored">
                            <li>
                                <a href="{{ $row->furl }}"><i class="fab fa-facebook-f"></i></a>
                            </li>

                            <li>
                                <a href="{{ $row->turl }}"><i class="fab fa-twitter"></i></a>
                            </li>

                            <li>
                                <a href="{{ $row->purl }}"><i class="fab fa-pinterest"></i></a>
                            </li>

                            <li>
                                <a href="{{ $row->durl }}"><i class="fab fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
