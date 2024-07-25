@extends('backend.layouts.main2')
@section('title','Edit Speaker')
@section('main-container')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Speaker Page</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Edit Speakers</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">CUI Speakers</h5>
                        <p>Discover CUI Sahiwal University's vibrant blog platform, featuring engaging articles, campus updates, and student perspectives. Stay informed about academic achievements, events, and more as we showcase the dynamic spirit of our community.</p>
                        <h5 class="card-title">Details of the Blog</h5>
                        <form method="POST" action="{{ url('/admin/edit-speaker/'. $speaker->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" value="{{ $speaker->sname }}" placeholder="">
                                <label for="name">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="designation" value="{{ $speaker->designation }}" placeholder="">
                                <label for="designation">Designation</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="furl" value="{{ $speaker->furl }}" placeholder="">
                                <label for="furl">Facebook URL</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="purl" value="{{ $speaker->purl }}" placeholder="">
                                <label for="purl">Pinterest URL</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="turl" value="{{ $speaker->turl }}" placeholder="">
                                <label for="turl">Twitter URL</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="durl" value="{{ $speaker->durl }}" placeholder="">
                                <label for="durl">Demo URL</label>
                            </div>
                            <div class="form-group mb-3">
                                <input type="hidden" name="current_image_url" value="{{ $speaker->imageurl }}">
                                @if($speaker->imageurl)
                                    <div class="m-5">
                                        <img src="{{ asset($speaker->imageurl) }}" style="width: 150px; height: 120px" alt="Current Image">
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
