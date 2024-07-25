@extends('backend.layouts.main1')
@section('title', 'Speakers')
@section('main-container')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Blank Page</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Speaker</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">CUI Speakers</h5>
              <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
              <div class="text-right mb-3">
                <button class="btn btn-primary justify-content-end"><a style="color: white" href="{{ url('/admin/add-speaker') }}">Add New Speaker</a></button>
                </div>
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($speakers as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->sname }}</td>
                        <td>{{ $row->designation }}</td>
                        <td>
                            <img src="../{{ $row->imageurl }}" alt="Image not found" style="width: 50px; height: 50px">
                        </td>
                        <td>
                            @if($row->status == 0)
                                <a class="btn btn-warning" href="{{ url('/admin/enable-speaker/'.$row->id) }}">Disable</a>
                            @else
                                <a class="btn btn-success" href="{{ url('/admin/disable-speaker/'.$row->id) }}">Enable</a>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ url('/admin/edit-speaker/'.$row->id) }}">Edit</a>
                            <a class="btn btn-danger" href="{{ url('/admin/delete-speaker/'.$row->id) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>

        </div>


        </div>
      </div>
    </section>

  </main>
@endsection
