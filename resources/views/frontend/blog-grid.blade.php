@extends('frontend.layouts.main')
@section('title', 'Blogs')
@section('main-container')
<!--Page Title-->

<section class="page-title" style="background-image: url(frontend/images/background/5.jpg)">
    <div class="auto-container">
        <h1>Blog Grid</h1>

        <ul class="bread-crumb clearfix">
            <li><a href="{{ url('/') }}">Home</a></li>

            <li>Blog Grid</li>
        </ul>
    </div>
</section>


<section class="news-section alternate">
    <div class="auto-container">
        <div class="row">
            @foreach ($results as $row)
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="{{ $loop->iteration * 400 . "ms" }}">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="blog-single.html"><img src="{{ $row->imageurl }}" alt="image not load" /></a>
                        </figure>
                    </div>

                    <div class="lower-content">
                        <ul class="post-info">
                            <li><span class="far fa-user"></span> {{ $row->uploadedby }}</li>

                            <li><span class="far fa-comments"></span> Comment 0{{ $row->totalcomment }}</li>
                        </ul>

                        <h4>
                            <a href="blog-single.html">{{ $row->title }}</a>
                        </h4>

                        <div class="btn-box">
                            <a href="{{ url('blog-detail/'. $row->id )}}" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


        <ul class="styled-pagination text-center">
            <li><a href="#" class="active">1</a></li>

            <li><a href="#">2</a></li>

            <li><a href="#">3</a></li>

            <li>
                <a href="#"><span class="icon fa fa-angle-right"></span></a>
            </li>
        </ul>

        <!--End Styled Pagination-->
    </div>
</section>

<!--End News Section -->
@endsection
