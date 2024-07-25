@extends('frontend.layouts.main')

@section('title', 'Register Event')

@section('main-container')
    <section class="page-title" style="background-image: url({{ asset('frontend/images/background/5.jpg') }})">
        <div class="auto-container">
            <h1>Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Register Event</li>
            </ul>
        </div>
    </section>

    <section class="register-section">
        <div class="auto-container">
            <div class="anim-icons full-width">
                <span class="icon icon-circle-3 wow zoomIn"></span>
            </div>

            <div class="outer-box">
                <div class="row no-gutters">
                    <div class="title-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="sec-title light">
                                <div class="icon-box">
                                    <span class="icon flaticon-rocket-ship"></span>
                                </div>
                                <h2>REGISTER NOW</h2>
                                <div class="text">
                                    Join us at the COMSATS Sahiwal event by registering now. Fill in the form below to
                                    reserve your spot.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="register-form col-lg-8 col-md-6 col-sm-12">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-block p-4 border-left-warning">
                                <strong>
                                    <h1 style="color:#e0139c">{{ $message }}</h1>
                                </strong>
                            </div>
                        @endif
                        @if ($message = Session::get('error'))
                            <div class="alert alert-block p-4 border-left-warning">
                                <strong>
                                    <h1 style="color:#d00a0a">{{ $message }}</h1>
                                </strong>
                            </div>
                        @endif

                        <div class="form-inner">
                            <form method="post" action="{{ url('/submitregisterform') }}">
                                @csrf
                                <div class="form-group">
                                    <span class="icon fa fa-list" style="padding-right: 20px;"></span>
                                    <select id="type-select" name="type" required style="padding-left: 45px;">
                                        <option value="" disabled selected>Select Event or Session</option>
                                        <option value="event">Event</option>
                                        <option value="session">Session</option>
                                    </select>
                                </div>

                                <div class="form-group" id="title-select-container" style="display: none;">
                                    <span class="icon fa fa-heading"></span>
                                    <select id="title-select" name="title" required style="padding-left: 45px;">
                                        <option value="" disabled selected>Select Title</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <span class="icon fa fa-user"></span>
                                    <input type="text" name="username" placeholder="Full name"
                                        value="{{ old('username') }}">
                                    @if ($errors->has('username'))
                                        <span class="text-danger">
                                            {{ $errors->first('username') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <span class="icon fa fa-envelope"></span>
                                    <input type="email" name="email" placeholder="Email address"
                                        value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <span class="icon fa fa-phone"></span>
                                    <input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}">
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">
                                            {{ $errors->first('phone') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <span class="icon fa fa-edit"></span>
                                    <textarea name="message" placeholder="Additional Message">{{ old('message') }}</textarea>
                                    @if ($errors->has('message'))
                                        <span class="text-danger">
                                            {{ $errors->first('message') }}
                                        </span>
                                    @endif
                                </div>

                                <input type="hidden" name="session_id" id="session_id" value="">
                                <input type="hidden" name="event_id" id="event_id" value="">

                                <div class="form-group text-right">
                                    <button type="submit" class="theme-btn btn-style-four">
                                        <span class="btn-title">Register Now</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const typeSelect = document.getElementById('type-select');
            const titleSelectContainer = document.getElementById('title-select-container');
            const titleSelect = document.getElementById('title-select');

            const events = @json($allevents);
            const sessions = @json($allsessions);

            function populateTitleSelect(type) {
                titleSelect.innerHTML = '<option value="" disabled selected>Select Title</option>';

                if (type === 'event') {
                    events.forEach(event => {
                        const option = document.createElement('option');
                        option.value = event.id;
                        option.text = `${event.title} - ${event.subtitle}`;
                        titleSelect.appendChild(option);
                    });
                } else if (type === 'session') {
                    sessions.forEach(session => {
                        const option = document.createElement('option');
                        option.value = session.id;
                        option.text = session.title;
                        titleSelect.appendChild(option);
                    });
                }
            }

            typeSelect.addEventListener('change', function() {
                const selectedType = typeSelect.value;
                titleSelectContainer.style.display = 'block';
                populateTitleSelect(selectedType);
            });

            titleSelect.addEventListener('change', function() {
                const selectedType = typeSelect.value;
                const selectedTitle = titleSelect.value;

                if (selectedType === 'event') {
                    document.getElementById('event_id').value = selectedTitle;
                    document.getElementById('session_id').value = 0;
                } else if (selectedType === 'session') {
                    document.getElementById('session_id').value = selectedTitle;
                    document.getElementById('event_id').value = 0;
                }
            });
        });
    </script>
@endsection
