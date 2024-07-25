@extends('backend.layouts.main2')
@section('title','Edit Blog')
@section('main-container')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Blog Page</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Edit Blog</li>
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
                        <h5 class="card-title">Details of the Blog</h5>
                        <form method="POST" action="{{ url('/admin/edit-blog/'. $blog->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="title" value="{{ $blog->title }}" placeholder="">
                                <label for="title">Title</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="uploadedby" value="{{ $blog->uploadedby }}" placeholder="">
                                <label for="uploadedby">Uploaded By</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="totalcomment" value="{{ $blog->totalcomment }}" placeholder="">
                                <label for="totalcomment">Total Comments</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="shortdescription" rows="10" placeholder="">{{ $blog->shortdescription }}</textarea>
                                <label for="shortdescription">Short Description</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="longdescription" rows="10" placeholder="">{{ $blog->longdescription }}</textarea>
                                <label for="longdescription">Long Description</label>
                            </div>
                            <div class="form-group mb-3">
                                <input type="hidden" name="current_image_url" value="{{ $blog->imageurl }}">
                                @if($blog->imageurl)
                                    <div class="m-5">
                                        <img src="{{ asset($blog->imageurl) }}" style="width: 150px; height: 120px" alt="Current Image">
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
