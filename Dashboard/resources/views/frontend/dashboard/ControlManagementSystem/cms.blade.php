@extends('frontend.layouts.app')

@section('title', 'Add Product')

@section('main-container')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add Product</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Add Home Page</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Home Page</h5>

                        <!-- Product Form -->
                        <form method="POST" action="{{route('cms.store')}}" id="product-form" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Header</label>
                                <input type="text" class="form-control" id="Header" name="Header" value="">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="Image" name="Image">
                            </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Testimonails</h5>
                            <div class="mb-3">
                                <label for="description" class="form-label">Header 1</label>
                                <input type="text" class="form-control" id="Header_1" name="Header_1" value="">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description 1</label>
                                <input type="text" class="form-control" id="Description_1" name="Description_1" value="">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Header 2</label>
                                <input type="text" class="form-control" id="Header_2" name="Header_2" value="">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description 2</label>
                                <input type="text" class="form-control" id="Description_2" name="Description_2" value="">
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
        var header = document.getElementById('Header').value;
        var title = document.getElementById('title').value;
        var header1 = document.getElementById('Header_1').value;
        var description1 = document.getElementById('Description_1').value;
        var header2 = document.getElementById('Header_2').value;
        var description2 = document.getElementById('Description_2').value;

        // Enable the submit button if all fields are filled
        if (header && title && header1 && description1 && header2 && description2) {
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
