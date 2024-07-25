@extends('backend.layouts.main1')
@section('title','Add Event')
@section('main-container')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Event Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Events</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

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
            <p>Discover upcoming events at CUI Sahiwal University, featuring workshops, seminars, and more. Stay informed about our latest events and activities.</p>
            <h5 class="card-title">Details of the New Event</h5>
            <form method="POST" action="{{ url('/admin/add-event') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="">
                @if($errors->has('title'))
                    <span class="text-danger">
                        {{$errors->first('title')}}
                    </span>
                @endif
                <label for="title">Title</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="subtitle" value="{{ old('subtitle') }}" placeholder="">
                @if($errors->has('subtitle'))
                    <span class="text-danger">
                        {{ $errors->first('subtitle') }}
                    </span>
                @endif
                <label for="subtitle">Subtitle</label>
              </div>
              <div class="form-floating mb-3">
                <input type="date" class="form-control" name="eventdate" value="{{ old('eventdate') }}" placeholder="">
                @if($errors->has('eventdate'))
                    <span class="text-danger">
                        {{ $errors->first('eventdate') }}
                    </span>
                @endif
                <label for="eventdate">Event Date</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="location" value="{{ old('location') }}" placeholder="">
                @if($errors->has('location'))
                    <span class="text-danger">
                        {{ $errors->first('location') }}
                    </span>
                @endif
                <label for="location">Location</label>
              </div>
              <div class="form-floating mb-3">
                <input type="number" class="form-control" name="seats" value="{{ old('seats') }}" placeholder="">
                @if($errors->has('seats'))
                    <span class="text-danger">
                        {{ $errors->first('seats') }}
                    </span>
                @endif
                <label for="seats">Seats</label>
              </div>
              <div class="form-floating mb-3">
                <input type="number" class="form-control" name="speakers" value="{{ old('speakers') }}" placeholder="">
                @if($errors->has('speakers'))
                    <span class="text-danger">
                        {{ $errors->first('speakers') }}
                    </span>
                @endif
                <label for="speakers">Speakers</label>
              </div>
              <div class="form-group mb-3">
                <div class="input-group">
                  <input type="file" class="form-control" name="imageurl" value="{{ old('imageurl') }}" accept=".png, .jpg, .jpeg">
                  @if($errors->has('imageurl'))
                    <span>
                        {{ $errors->first('imageurl') }}
                    </span>
                  @endif
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection
