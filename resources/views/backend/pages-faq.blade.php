@extends('backend.layouts.main1')
@section('title', 'FAQs')
@section('main-container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>FAQ Page</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">FAQs</li>
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
                            <h5 class="card-title">CUI FAQs</h5>
                            <p>Find answers to common questions about CUI Sahiwal University, including admissions,
                                academics, and campus life. Our FAQ section is designed to provide quick and easy
                                information for prospective and current students.</p>
                            <div class="text-right mb-3">
                                <button class="btn btn-primary justify-content-end"></i><a style="color: white"
                                        href="{{ url('/admin/add-faq') }}">Add New FAQ</a></button>
                            </div>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($faqs as $faq)
                                        <tr>
                                            <td>{{ $faq->id }}</td>
                                            <td>{{ \Illuminate\Support\Str::limit($faq->question, 30, '...') }}</td>
                                            <td>{{ \Illuminate\Support\Str::limit($faq->answer, 20, '...') }}</td>
                                            <td>
                                                @if ($faq->status == 1)
                                                    <a href="{{ url('/admin/disable-faq/' . $faq->id) }}"
                                                        class="btn btn-warning">Disable</a>
                                                @else
                                                    <a href="{{ url('/admin/enable-faq/' . $faq->id) }}"
                                                        class="btn btn-success">Enable</a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('/admin/edit-faq/' . $faq->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="{{ url('/admin/delete-faq/' . $faq->id) }}"
                                                    class="btn btn-danger"></i>Delete</a>
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
