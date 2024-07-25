@extends('backend.layouts.main1')
@section('title', 'Features')
@section('main-container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Features</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Features</li>
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
                            <h5 class="card-title">Feature List</h5>
                            <div class="text-right mb-3">
                                <button class="btn btn-primary"><a style="color: white"
                                        href="{{ url('/admin/add-feature') }}">Add New Feature</a></button>
                            </div>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Icon</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($features as $feature)
                                        <tr>
                                            <td>{{ $feature->id }}</td>
                                            <td>{{ $feature->icon }}</td>
                                            <td>{{ $feature->title }}</td>
                                            <td>{{ \Illuminate\Support\Str::limit($feature->description, 20, '...') }}</td>
                                            <td>
                                                @if ($feature->status == 0)
                                                    <a class="btn btn-success"
                                                        href="{{ url('/admin/enable-feature/' . $feature->id) }}">Enable</a>
                                                @else
                                                    <a class="btn btn-warning"
                                                        href="{{ url('/admin/disable-feature/' . $feature->id) }}">Disable</a>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-primary"
                                                    href="{{ url('/admin/edit-feature/' . $feature->id) }}">Edit</a>
                                                <a class="btn btn-danger"
                                                    href="{{ url('/admin/delete-feature/' . $feature->id) }}">Delete</a>

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
