@extends('backend.layouts.main1')
@section('title', 'User Register')
@section('main-container')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>User Register</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">User Register</li>
        </ol>
      </nav>
    </div>

    <center>
        @if ($message = Session::get('success'))
            <div class="alert alert-block p-4 border-left-warning">
                <strong>
                    <h1 style="color:#354cc1">{{ $message }}</h1>
                </strong>
            </div>
        @endif
    </center>

    <section class="section">
        <div class="row">
            @foreach($userRegisters as $register)
            <div class="col-lg-6">
                <div class="card" style="box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);">
                    <div class="card-body">
                        <h5 class="card-title">{{ $register->username }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $register->email }}</h6>
                        <p class="card-text">Phone: {{ $register->phone }}</p>
                        <p class="card-text">{{ $register->message }}</p>
                        <p class="card-text"><small class="text-muted">Event ID: {{ $register->event_id }}</small></p>
                        <p class="card-text"><small class="text-muted">Session ID: {{ $register->session_id }}</small></p>
                        <p class="card-text"><small class="text-muted">Venue: {{ $register->venue }}</small></p>
                        <p class="card-text"><small class="text-muted">Time: {{ $register->time }}</small></p>
                        <p class="card-text"><small class="text-muted">IP Address: {{ $register->ipaddress }}</small></p>
                        <p class="card-text"><small class="text-muted">Received: {{ $register->created_at->format('M d, Y H:i:s') }}</small></p>
                        <a href="{{ url('/admin/user-register/' . $register->id) }}" class="btn btn-danger btn-sm float-end">
                            <i class="bi bi-trash"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

  </main>
@endsection
