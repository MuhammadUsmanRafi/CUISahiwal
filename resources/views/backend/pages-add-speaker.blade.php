@extends('backend.layouts.main1')
@section('title','Add Speaker')
@section('main-container')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Blog Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Speakers</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">CUI Speaker</h5>
            <p>Discover CUI Sahiwal University's vibrant blog platform, featuring engaging articles, campus updates, and student perspectives. Stay informed about academic achievements, events, and more as we showcase the dynamic spirit of our community.</p>
            <h5 class="card-title">Details of the New Blog</h5>
            <form method="POST" action="{{ url('/admin/add-speaker') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="">
                @if($errors->has('name'))
                    <span class="text-danger">
                        {{$errors->first('name')}}
                    </span>
                @endif
                <label for="name">Name</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="designation" value="{{ old('designation') }}" placeholder="">
                @if($errors->has('designation'))
                    <span class="text-danger">
                        {{ $errors->first('designation') }}
                    </span>
                @endif
                <label for="designation">Designation</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="furl" value="{{ old('furl') }}" placeholder="">
                @if($errors->has('furl'))
                    <span class="text-danger">
                        {{ $errors->first('furl') }}
                    </span>
                @endif
                <label for="furl">Facebook URL</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="purl" value="{{ old('purl') }}" placeholder="">
                @if($errors->has('purl'))
                    <span class="text-danger">
                        {{ $errors->first('purl') }}
                    </span>
                @endif
                <label for="purl">Pinterest URL</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="turl" value="{{ old('turl') }}" placeholder="">
                @if($errors->has('turl'))
                    <span class="text-danger">
                        {{ $errors->first('turl') }}
                    </span>
                @endif
                <label for="turl">Twitter URL</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="durl" value="{{ old('durl') }}" placeholder="">
                @if($errors->has('durl'))
                    <span class="text-danger">
                        {{ $errors->first('durl') }}
                    </span>
                @endif
                <label for="durl">Demo URL</label>
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
