@extends('backend.layouts.main1')
@section('title','Add FAQs')
@section('main-container')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>FAQs Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item active">FAQs</li>
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
            <h5 class="card-title">Add New FAQ</h5>
            <form method="POST" action="{{ url('/admin/add-faq') }}">
              @csrf
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="question" value="{{ old('question') }}" placeholder="Enter Question">
                @if($errors->has('question'))
                    <span class="text-danger">
                        {{ $errors->first('question') }}
                    </span>
                @endif
                <label for="question">Question</label>
              </div>
              <div class="form-floating mb-3">
                <textarea class="form-control" name="answer" rows="5" placeholder="Enter Answer">{{ old('answer') }}</textarea>
                @if($errors->has('answer'))
                    <span class="text-danger">
                        {{ $errors->first('answer') }}
                    </span>
                @endif
                <label for="answer">Answer</label>
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
