@extends('backend.layouts.main1')
@section('title', 'Events')
@section('main-container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Events</h1>
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
                            <h5 class="card-title">Upcoming Events</h5>
                            <p>Here you can manage all the events.</p>
                            <div class="text-right mb-3">
                                <button class="btn btn-primary justify-content-end">
                                    <a style="color: white" href="{{ url('/admin/add-event') }}">Add New Event</a>
                                </button>
                            </div>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Subtitle</th>
                                        <th>Location</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($events as $event)
                                        <tr>
                                            <td>{{ $event->id }}</td>
                                            <td>{{ $event->title }}</td>
                                            <td>{{ $event->subtitle }}</td>
                                            <td>{{ $event->location }}</td>
                                            <td>
                                                <img src="../{{ $event->imageurl }}" alt="Image not found"
                                                    style="width: 50px; height: 50px">
                                            </td>
                                            <td>
                                                @if ($event->status == 0)
                                                    <a class="btn btn-success"
                                                        href="{{ url('/admin/enable-event/' . $event->id) }}">Enable</a>
                                                @else
                                                    <a class="btn btn-warning"
                                                        href="{{ url('/admin/disable-event/' . $event->id) }}">Disable</a>
                                                @endif

                                            </td>
                                            <td>
                                                <a class="btn btn-primary"
                                                    href="{{ url('/admin/edit-event/' . $event->id) }}">Edit</a>
                                                <a class="btn btn-danger"
                                                    href="{{ url('/admin/delete-event/' . $event->id) }}">Delete</a>
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
