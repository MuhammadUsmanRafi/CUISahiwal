@extends('frontend.layouts.main1')
@section('title', 'Blog Detail')
@section('main-container')
    <section class="page-title" style="background-image:url(../frontend/images/background/5.jpg);">
        <div class="auto-container">
            <h1>Blog Single</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Blog Single</li>
            </ul>
        </div>
    </section>
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-single">
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="../{{ $singleblogdetail->imageurl }}" alt="">
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-info">
                                        <li><span class="far fa-user"></span> {{ $singleblogdetail->uploadedby }}</li>
                                        <li><span class="far fa-comments"></span> Comment
                                            0{{ $singleblogdetail->totalcomment }}</li>
                                    </ul>
                                    <h2>{{ $singleblogdetail->title }}</h2>
                                    <p>{{ $singleblogdetail->shortdescription }}</p>
                                    <blockquote>
                                        <span class="icon fa fa-quote-left"></span>
                                        <p>It's crazy, but the things you love, prospective buyers might hate—and
                                            that means you might have a hard time unloading your home when it comes
                                            time to sell. Here's how to choose wisely</p>
                                        <cite> {{ $singleblogdetail->uploadedby }}</cite>
                                    </blockquote>
                                    <p>{{ $singleblogdetail->longdescription }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="comments-area">
                            <div class="group-title">
                                <h3>Comments 0{{ $singleblogdetail->totalcomment }}</h3>
                            </div>
                            @foreach ($singleblogcomments as $comment)
                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb"><img src="../{{ $comment->imageurl }}" alt="">
                                        </div>
                                        <div class="comment-info">
                                            <div class="name">{{ $comment->commentatorname }}</div> -
                                            <div class="date">{{ strftime('%e %B, %Y', strtotime($comment->date)) }}
                                            </div>
                                        </div>
                                        <div class="text">
                                            {{ $comment->cmessage }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="comment-form">
                            <div class="group-title">
                                <h3>Leave a comment</h3>
                            </div>
                            <form method="post" action="{{ url('commentpost/' . $singleblogdetail->id) }}">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Name"
                                            value="{{ old('username') }}">
                                    </div>
                                    @if ($errors->has('username'))
                                        <span class="text-danger">
                                            {{ $errors->first('username') }}
                                        </span>
                                    @endif
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email"
                                            value="{{ old('email') }}">
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Your Comments"></textarea>
                                    </div>
                                    @if ($errors->has('message'))
                                        <span class="text-danger">
                                            {{ $errors->first('message') }}
                                        </span>
                                    @endif
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit"><span
                                                class="btn-title">Post
                                                Comment</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar padding-left">
                        <div class="sidebar-widget categories">
                            <h4 class="sidebar-title">Categories</h4>
                            <div class="widget-content">
                                <ul class="blog-categories">
                                    <li><a href="#">Insight <span>03</span></a></li>
                                    <li><a href="#">Web Design <span>07</span></a></li>
                                    <li><a href="#">Travel <span>06</span></a></li>
                                    <li><a href="#">Technology <span>02</span></a></li>
                                    <li><a href="#">Buisiness <span>06</span></a></li>
                                    <li><a href="#">UI/UX <span>09</span></a></li>
                                    <li><a href="#">Eventa <span>12</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget popular-tags">
                            <h4 class="sidebar-title">Tags</h4>
                            <div class="widget-content">
                                <a href="#">Event</a>
                                <a href="#">Meetup</a>
                                <a href="#">Conference</a>
                                <a href="#">Meeting</a>
                                <a href="#">Business</a>
                                <a href="#">Seminar</a>
                                <a href="#">Workshop</a>
                                <a href="#">Professionals</a>
                                <a href="#">Eventa</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
