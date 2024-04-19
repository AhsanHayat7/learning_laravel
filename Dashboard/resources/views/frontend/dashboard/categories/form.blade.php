@extends('frontend.layouts.app')
@section('title', 'Add Category')
@section('main-container')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                <li class="breadcrumb-item">Category</li>
                <li class="breadcrumb-item active"><a href="{{ route('add.category') }}">Add </a> </li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Customer Details</h5>

                        <!-- Customer Form -->
                        <form method="POST" action="{{ route('customer.store') }}" id="customer-form">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="Name" value="{{$customer->Name ?? ''}}">
                            </div>
                            <div class="mb-3">
                                <label for="position" class="form-label">Position</label>
                                <input type="text" class="form-control" id="position" name="Position" value="{{$customer->Position ?? ''}}">
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" class="form-control" id="age" name="Age" value="{{$customer->Age ?? ''}}">
                            </div>
                            <div class="mb-3">
                                <label for="start_date" class="form-label">Start Date</label>
                                <input type="date" class="form-control" id="start_date" name="Start_Date" value="{{$customer->Start_Date ?? ''}}">
                            </div>
                            <button type="submit" class="btn btn-primary" id="submit-btn" disabled>Submit</button>
                        </form>
                        <!-- End Customer Form -->
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var submitBtn = document.getElementById('submit-btn');
        var ageInput = document.getElementById('age');
        var nameInput = document.getElementById('name');
        var positionInput = document.getElementById('position');
        var startDateInput = document.getElementById('start_date');

        function enableSubmitBtn() {
            if (nameInput.value.trim() !== '' && positionInput.value.trim() !== '' && startDateInput.value.trim() !== '') {
                if (ageInput.value.trim() !== '' && ageInput.value.length >= 1 && ageInput.value.length <= 3) {
                    submitBtn.disabled = false;
                } else {
                    submitBtn.disabled = true;
                    toastr.error("Please enter a valid age.");
                }
            } else {
                submitBtn.disabled = true;
            }
        }

        ageInput.addEventListener('input', enableSubmitBtn);
        nameInput.addEventListener('input', enableSubmitBtn);
        positionInput.addEventListener('input', enableSubmitBtn);
        startDateInput.addEventListener('input', enableSubmitBtn);

        // Show Toastr error when submitting the form if age is invalid
        document.getElementById('customer-form').addEventListener('submit', function (event) {
            if (ageInput.value.trim() !== '' && (ageInput.value.length < 1 || ageInput.value.length > 3)) {
                toastr.error("Please enter a valid age.");
                event.preventDefault(); // Prevent form submission
            }
        });
    });
</script>
@endsection
