@extends('frontend.layouts.main')
@section('title', 'FAQ\'s')
@section('main-container')
    <section class="page-title" style="background-image: url(frontend/images/background/5.jpg)">
        <div class="auto-container">
            <h1>FAQ's</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>FAQ's</li>
            </ul>
        </div>
    </section>
    <section class="faq-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">FAQ'S</span>
                <h2>General <span>Questions</span></h2>
            </div>
            <div class="accordion accordion-flush" id="accordionFAQ">
                @foreach ($faqs as $faq)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading{{ $loop->index }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse{{ $loop->index }}" aria-expanded="false"
                                aria-controls="flush-collapse{{ $loop->index }}">
                                {{ $faq->question }}
                            </button>
                        </h2>
                        <div id="flush-collapse{{ $loop->index }}" class="accordion-collapse collapse"
                            aria-labelledby="flush-heading{{ $loop->index }}" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                {{ $faq->answer }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="faq-form-section">
        <div class="auto-container">
            <div class="sec-title">
                <h2>Didn't Find Your Answer?</h2>
            </div>
            <div class="faq-form">
                @if ($message = Session::get('success'))
                    <div class="alert alert-block p-4 border-left-warning">
                        <strong>
                            <h1 style="color:#e0139c">{{ $message }}</h1>
                        </strong>
                    </div>
                @endif
                <form method="POST" action="{{ url('/contact-us') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-12 col-md-12">
                            <input type="text" name="username" placeholder="Name" value="{{ old('username') }}" />
                            @if ($errors->has('username'))
                                <span class="text-danger">
                                    {{ $errors->first('username') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-12 col-md-12">
                            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" />
                            @if ($errors->has('email'))
                                <span class="text-danger">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-12 col-md-12">
                            <input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}" />
                            @if ($errors->has('phone'))
                                <span class="text-danger">
                                    {{ $errors->first('phone') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-12 col-md-12">
                            <input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}" />
                            @if ($errors->has('subject'))
                                <span class="text-danger">
                                    {{ $errors->first('subject') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-12 col-md-12">
                            <textarea name="message" placeholder="Question Detail">{{ old('message') }}</textarea>
                            @if ($errors->has('message'))
                                <span class="text-danger">
                                    {{ $errors->first('message') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-12 col-md-12 text-right">
                            <button class="theme-btn btn-style-one" type="submit" name="submit-form">
                                <span class="btn-title">Get A Quote</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
