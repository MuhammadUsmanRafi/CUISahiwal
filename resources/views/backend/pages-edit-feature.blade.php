@extends('backend.layouts.main2')
@section('title', 'Edit Feature')
@section('main-container')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Feature</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Edit Feature</li>
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
                        <h5 class="card-title">Edit Feature</h5>
                        <form method="POST" action="{{ url('/admin/edit-feature/'. $feature->id) }}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="icon" value="{{ $feature->icon }}" placeholder="Icon">
                                @if($errors->has('icon'))
                                    <span class="text-danger">{{ $errors->first('icon') }}</span>
                                @endif
                                <label for="icon">Icon</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="title" value="{{ $feature->title }}" placeholder="Title">
                                @if($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                                <label for="title">Title</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="description" value="{{ $feature->description }}" placeholder="Description">
                                @if($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                                <label for="description">Description</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-control" name="status">
                                    <option value="1" {{ $feature->status == 1 ? 'selected' : '' }}>Enable</option>
                                    <option value="0" {{ $feature->status == 0 ? 'selected' : '' }}>Disable</option>
                                </select>
                                <label for="status">Status</label>
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
