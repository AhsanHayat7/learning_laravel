@extends('frontend.layouts.app')

@section('title', 'Category')

@section('main-container')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                <li class="breadcrumb-item active">Category</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Category</h5>

                        <!-- Default Table -->
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 10%;">Customer id</th>
                                        <th scope="col" style="width: 20%;">Name</th>
                                        <th scope="col" style="width: 20%;">Position</th>
                                        <th scope="col" style="width: 15%;">Age</th>
                                        <th scope="col" style="width: 20%;">Start Date</th>
                                        <th scope="col" style="width: 15%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->Customer_id }}</td>
                                        <td>{{ $customer->Name }}</td>
                                        <td>{{ $customer->Position }}</td>
                                        <td>{{ $customer->Age }}</td>
                                        <td>{{ $customer->Start_Date }}</td>
                                        <td>
                                          <!-- Action buttons with colors -->
                                          <a href="{{ route('customer.delete', ['id' => $customer->Customer_id]) }}"> <button class="btn btn-danger">Delete</button></a>

                                          <a href="{{route('customer.edit',['id'=>$customer->Customer_id])}}"> <button class="btn btn-primary">Edit</button>

                                      </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@endsection
