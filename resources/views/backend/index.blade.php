@extends('backend.layouts.main')

@section('title', 'Home')

@section('main-container')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">

                <!-- Blogs -->
                <div class="col-xxl-6 col-md-6">
                    <a href="{{ url('/admin/blogs') }}" class="card info-card sales-card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Blogs</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-journal-text"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $blogs->count() }}</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Speakers -->
                <div class="col-xxl-6 col-md-6">
                    <a href="{{ url('/admin/speakers') }}" class="card info-card revenue-card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Speakers</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-mic"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $speakers->count() }}</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Events -->
                <div class="col-xxl-6 col-md-6">
                    <a href="{{ url('/admin/events') }}" class="card info-card customers-card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Events</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-calendar-event"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $events->count() }}</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Features -->
                <div class="col-xxl-6 col-md-6">
                    <a href="{{ url('/admin/features') }}" class="card info-card faqs-card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Features</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-lightbulb"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $features->count() }}</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Contacts -->
                <div class="col-xxl-6 col-md-6">
                    <a href="{{ url('/admin/contacts') }}" class="card info-card customers-card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Contacts</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person-circle"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $contacts->count() }}</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Sessions -->
                <div class="col-xxl-6 col-md-6">
                    <a href="{{ url('/admin/sessions') }}" class="card info-card sales-card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Sessions</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $sessions->count() }}</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- FAQs -->
                <div class="col-xxl-6 col-md-6">
                    <a href="{{ url('/admin/faqs') }}" class="card info-card faqs-card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">FAQs</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-question-circle"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $faqs->count() }}</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- User Register -->
                <div class="col-xxl-6 col-md-6">
                    <a href="{{ url('/admin/user-register') }}" class="card info-card revenue-card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">User Register</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person-check"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $userRegisters->count() }}</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </section>
    </main>
@endsection
