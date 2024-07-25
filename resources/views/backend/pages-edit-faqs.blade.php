@extends('backend.layouts.main2')
@section('title','Edit FAQ')
@section('main-container')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit FAQ Page</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Edit FAQ</li>
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
                        <h5 class="card-title">Edit FAQ</h5>
                        <form method="POST" action="{{ url('/admin/edit-faq/' . $faq->id) }}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="question" value="{{ $faq->question }}" placeholder="Enter Question">
                                <label for="question">Question</label>
                                @if($errors->has('question'))
                                    <span class="text-danger">
                                        {{ $errors->first('question') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="answer" rows="10" placeholder="Enter Answer">{{ $faq->answer }}</textarea>
                                <label for="answer">Answer</label>
                                @if($errors->has('answer'))
                                    <span class="text-danger">
                                        {{ $errors->first('answer') }}
                                    </span>
                                @endif
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
