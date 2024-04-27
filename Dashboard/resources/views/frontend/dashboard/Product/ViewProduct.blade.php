@extends('frontend.layouts.app')

@section('title', 'Add Product')

@section('main-container')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add Product</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Add Product</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product Details</h5>

                        <!-- Product Form -->
                        <form method="POST" action="{{ route('product.store') }}" id="product-form" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="Name" name="Name" value="{{ $product->Name ?? old('Name') }}">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" id="Price" name="Price" value="{{ $product->Price ?? old('Price') }}">
                            </div>
                            <div class="mb-3">
                                <select class="form-select" id="Category" name="category_id" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->category_id }}">{{ $category->CategoryName }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="Image" name="Image">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" id="Description" name="Description" value="{{ $product->Description ?? old('Description') }}">
                            </div>
                            <div class="mb-3">
                                <label for="tags" class="form-label">Tags</label>
                                <input type="text" class="form-control" id="Tags" name="Tags" value="{{ old('Tags') }}" placeholder="Enter tags separated by commas">
                            </div>
                            <button type="submit" class="btn btn-primary" id="submit-btn">Submit</button>
                        </form>
                        <!-- End Product Form -->
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@endsection

@section('scripts')
<script>
    // Function to check if all input fields are filled
    function checkForm() {
        var name = document.getElementById('Name').value;
        var price = document.getElementById('Price').value;
        var description = document.getElementById('Description').value;

        // Enable the submit button if all fields are filled
        if (name && price && description) {
            document.getElementById('submit-btn').disabled = false;
        } else {
            document.getElementById('submit-btn').disabled = true;
        }
    }

    // Call the checkForm function whenever an input field changes
    document.addEventListener('DOMContentLoaded', function () {
        var inputs = document.querySelectorAll('input');
        inputs.forEach(function (input) {
            input.addEventListener('input', checkForm);
        });
    });
</script>
@endsection
