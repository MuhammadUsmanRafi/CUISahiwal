@extends('backend.layouts.main1')
@section('title','Blogs')
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
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">CUI Blogs</h5>
                        <p>Discover CUI Sahiwal University's vibrant blog platform, featuring engaging articles, campus updates, and student perspectives. Stay informed about academic achievements, events, and more as we showcase the dynamic spirit of our community.</p>
                        <div class="text-right mb-3">
                            <button class="btn btn-primary justify-content-end"><a style="color: white" href="{{ url('/admin/add-blogs') }}">Add New Blog</a></button>
                        </div>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Uploaded By</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($results as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($row->title, 30, '...') }}</td>
                                    <td>{{ $row->uploadedby }}</td>
                                    <td><img src="../{{ $row->imageurl }}" style="max-width: 70px; max-height: 70px;" alt="Image"></td>
                                    <td>
                                        @if($row->status == 1)
                                        <a href="{{ url('/admin/disable-blog/' . $row->id) }}" class="btn btn-success">Enable</a>
                                        @else
                                        <a href="{{ url('/admin/enable-blog/' . $row->id) }}" class="btn btn-warning">Disable</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('/admin/edit-blog/' . $row->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ url('/admin/delete-blog/' . $row->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

@endsection
