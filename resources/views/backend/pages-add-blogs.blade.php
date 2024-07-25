@extends('backend.layouts.main1')
@section('title','Add Blogs')
@section('main-container')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Blog Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Blogs</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">CUI Blogs</h5>
            <p>Discover CUI Sahiwal University's vibrant blog platform, featuring engaging articles, campus updates, and student perspectives. Stay informed about academic achievements, events, and more as we showcase the dynamic spirit of our community.</p>
            <h5 class="card-title">Details of the New Blog</h5>
            <form method="POST" action="{{ url('/admin/add-blogs') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="">
                @if($errors->has('title'))
                    <span class="text-danger">
                        {{$errors->first('name')}}
                    </span>
                @endif
                <label for="title">Title</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="uploadedby" value="{{ old('uploadedby') }}" placeholder="">
                @if($errors->has('uploadedby'))
                    <span class="text-danger">
                        {{ $errors->first('uploadedby') }}
                    </span>
                @endif
                <label for="uploadedby">Uploaded By</label>
              </div>
              <div class="form-floating mb-3">
                <input type="number" class="form-control" name="totalcomment" value="{{ old('totalcomment') }}" placeholder="">
                @if($errors->has('totalcomment'))
                    <span class="text-danger">
                        {{ $errors->first('totalcomment') }}
                    </span>
                @endif
                <label for="totalcomment">Total Comments</label>
              </div>
              <div class="form-floating mb-3">
                <textarea class="form-control" name="shortdescription" rows="5" value="{{ old('shortdescription') }}" placeholder=""></textarea>
                @if($errors->has('shortdescription'))
                    <span class="text-danger">
                        {{ $errors->first('shortdescription') }}
                    </span>
                @endif
                <label for="shortdescription">Short Description</label>
              </div>
              <div class="form-floating mb-3">
                <textarea class="form-control" name="longdescription" rows="5" value="{{ old('longdescription') }}" placeholder=""></textarea>
                @if($errors->has('longdescription'))
                    <span class="text-danger">
                        {{ $errors->first('longdescription') }}
                    </span>
                @endif
                <label for="longdescription">Long Description</label>
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
