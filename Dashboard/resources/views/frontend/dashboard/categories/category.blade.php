@extends('frontend.layouts.app')

@section('title', 'Add Category')

@section('main-container')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('all') }}">All Categories</a></li>
                <li class="breadcrumb-item active">Add Category</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Category</h5>

                        <!-- Category Form -->
                        <form method="POST" action="{{ route('add-category') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="category_name" class="form-label">Category Name</label>
                                <input type="text" class="form-control" id="category_name" name="CategoryName" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </form>
                        <!-- End Category Form -->
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@endsection
