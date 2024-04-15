@extends('frontend.layouts.app')

@section('title', 'Product')

@section('main-container')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Product</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Product</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product</h5>

                        <!-- Default Table -->
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 10%;">Customer id</th>
                                        <th scope="col" style="width: 20%;">Name</th>
                                        <th scope="col" style="width: 20%;">Price</th>
                                        <th scope="col" style="width: 15%;">Image</th>
                                        <th scope="col" style="width: 20%;">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{ $product->Customer_id }}</td>
                                        <td>{{ $product->Name }}</td>
                                        <td>{{ $product->Price }}</td>
                                        <td>
                                            <a data-fancybox="product-images" href="{{ asset($product->Image) }}">
                                                <img src="{{ asset($product->Image) }}" alt="Product Image" style="max-width: 100px;">
                                            </a>
                                        </td>
                                        <td>{{ $product->Description }}</td>
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
