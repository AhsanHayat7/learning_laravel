@extends('frontend.layouts.app')

@section('title', 'Add Category')

@section('main-container')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('product.category') }}">All Categories</a></li>
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
                        <form method="POST" action="{{ route('store-category') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="category_name" class="form-label">Category Name</label>
                                <input type="text" class="form-control" id="category_name" name="CategoryName" required>
                            </div>
                            <div class="mb-3">
                                <label for="category_name" class="form-label">Category levels</label>
                                <select name="parent_id" class="form-control">
                                    <option value="">Select</option>
                                    <option value="0">Main Category</option>
                                    @foreach($getCategories as $cat)
                                        <option value="{{ $cat['category_id']}}">{{ $cat['CategoryName']}}</option>
                                        @if(!empty($cat['subcategories']))
                                            @foreach($cat['subcategories'] as $subcat)
                                                    <option value="{{ $subcat['category_id']}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&raquo;{{ $subcat['CategoryName']}}</option>
                                                    @if(!empty($subcat['subcategories']))
                                                        @foreach($subcat['subcategories'] as $subsubcat)
                                                            <option value="{{ $subsubcat['category_id']}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&raquo;{{ $subsubcat['CategoryName']}}</option>
                                                        @endforeach
                                                    @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="category_image" class="form-label">Category Image</label>
                                <input type="file" class="form-control" id="category_image" name="category_image">
                            </div>
                            <div class="mb-3">
                                <label for="category_discount" class="form-label">Category Discount</label>
                                <input type="text" class="form-control" id="category_discount" name="category_discount">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="url" class="form-label">URL</label>
                                <input type="text" class="form-control" id="url" name="url">
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Inactive</option>
                                </select>
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
