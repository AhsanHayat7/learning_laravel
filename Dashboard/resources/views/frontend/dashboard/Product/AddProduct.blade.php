@extends('frontend.layouts.app')

@section('title', 'Product')

@section('main-container')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Product</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                <li class="breadcrumb-item active">Product</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search by Name" value="{{$search}}">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Search</button>

                            <a href="{{route('all')}}">
                            <button class="btn btn-primary" type="button">Reset</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
                                        <th scope="col" style="width: 15%;">Price</th>
                                        <th scope="col" style="width: 15%;">SKU</th> <!-- New column for SKU -->
                                        <th scope="col" style="width: 20%;">Tags</th> <!-- New column for Tags -->
                                        <th scope="col" style="width: 20%;">Category_id</th> <!-- New column for Category -->
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
                                        <td>{{ $product->SKU }}</td> <!-- Display SKU -->
                                        <td>{{ $product->Tags }}</td> <!-- Display Tags -->
                                        <td>{{ $product->category_id }}</td>
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
                          <div class="row">
                            {{$products->links('pagination::bootstrap-4')}}

                          </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@endsection
