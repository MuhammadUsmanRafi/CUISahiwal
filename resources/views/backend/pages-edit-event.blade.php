@extends('backend.layouts.main2')
@section('title','Edit Event')
@section('main-container')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Event Page</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Edit Events</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <center>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-block p-4 border-left-warning">
                            <strong>
                                <h1 style="color:#354cc1">{{ $message }}</h1>
                            </strong>
                        </div>
                    @endif
                </center>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">CUI Events</h5>
                        <p>Discover CUI Sahiwal University's vibrant event platform, featuring engaging activities, campus updates, and community perspectives. Stay informed about academic achievements, events, and more as we showcase the dynamic spirit of our community.</p>
                        <h5 class="card-title">Details of the Event</h5>
                        <form method="POST" action="{{ url('/admin/edit-event/'. $event->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="title" value="{{ $event->title }}" placeholder="">
                                <label for="title">Title</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="subtitle" value="{{ $event->subtitle }}" placeholder="">
                                <label for="subtitle">Subtitle</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" name="eventdate" value="{{ $event->eventdate }}" placeholder="">
                                <label for="eventdate">Event Date</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="location" value="{{ $event->location }}" placeholder="">
                                <label for="location">Location</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="seats" value="{{ $event->seats }}" placeholder="">
                                <label for="seats">Seats</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="speakers" value="{{ $event->speakers }}" placeholder="">
                                <label for="speakers">Speakers</label>
                            </div>
                            <div class="form-group mb-3">
                                <input type="hidden" name="current_image_url" value="{{ $event->imageurl }}">
                                @if($event->imageurl)
                                    <div class="m-5">
                                        <img src="{{ asset($event->imageurl) }}" style="width: 150px; height: 120px" alt="Current Image">
                                    </div>
                                @endif
                                <input type="file" class="form-control" name="imageurl" accept=".png, .jpg, .jpeg">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
