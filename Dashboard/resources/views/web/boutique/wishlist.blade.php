@extends('web.layouts.app')
@section('main-container')

<div class="container mt-5">
    <h2 class="text-center mb-4">Wishlist</h2>
    <div class="row justify-content-center">
        <div class="col-md-10">
            @foreach($wishlistItems as $wishlistItem)
            <div class="card mb-3">
                <div class="row no-gutters">
                    <!-- Product Image -->
                    <div class="col-md-2">
                        <img src="{{ $wishlistItem->product->Image }}" class="card-img" alt="Product Image">
                    </div>
                    <!-- Product Details -->
                    <div class="col-md-7">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <!-- Product Name -->
                            <div class="col-md-4">
                                <p class="card-text">{{ $wishlistItem->product->Name }}</p>
                            </div>
                            <!-- Product Price -->
                            <div class="col-md-4">
                                <p class="card-text">${{ $wishlistItem->product->Price }}</p>
                            </div>

                            <!-- Spacer -->
                            <div class="col-md-2"></div>
                            <!-- Add to Cart Button -->
                            <div class="col-md-2 d-flex justify-content-center mt-3">
                                <a href="{{ route('product-details', $wishlistItem->product->Customer_id) }}" class="btn btn-dark btn-sm mb-2">Add to cart</a>
                            </div>
                            <div class="col-md-2"></div>
                            <!-- Remove Button -->
                            <div class="col-md-2">
                                <form method="POST" action="{{ route('wishlist.remove', $wishlistItem->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="product_id" value="{{ $wishlistItem->product->Customer_id }}">
                                    <button type="submit" class="btn btn-sm btn-danger ml-md-2">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
