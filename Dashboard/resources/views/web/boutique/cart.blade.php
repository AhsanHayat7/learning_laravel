@extends('web.layouts.app')
@section('main-container')
<div class="container">
    <!-- HERO SECTION-->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                <div class="col-lg-6">
                    <h1 class="h2 text-uppercase mb-0">Cart</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{url('/home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <h2 class="h5 text-uppercase mb-4">Shopping cart</h2>
        <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <!-- CART TABLE-->
                <div class="table-responsive mb-4">
                    <table class="table text-nowrap">
                        <thead class="bg-light">
                            <tr>
                                <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Product</strong></th>
                                <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Price</strong></th>
                                <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Quantity</strong></th>
                                <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Total</strong></th>
                                <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase"></strong></th>
                            </tr>
                        </thead>
                        <tbody class="border-0">
                            <!-- Inside the table body in cart.blade.php -->
                                @foreach($cartItems as $item)
                            <tr>
                                <!-- Product Name and Image -->
                                <td class="ps-0 py-3 border-light" scope="row">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ $item->product->Image }}" alt="Product Image" width="70"/>
                                        <div class="ms-3">
                                            <strong class="h6">{{ $item->product->Name }}</strong>
                                        </div>
                                    </div>
                                </td>
                                <!-- Price -->
                                <td class="p-3 align-middle border-light">
                                    <p class="mb-0 small">${{ $item->product->Price }}</p>
                                </td>
                                <!-- Quantity -->
                                <td class="p-3 align-middle border-light">
                                    <div class="border d-flex align-items-center justify-content-between px-3">
                                        <span class="small text-uppercase text-gray headings-font-family">Quantity</span>
                                        <div class="quantity">
                                            <!-- Display the quantity stored in the cart -->
                                            <input class="form-control form-control-sm border-0 shadow-0 p-0" type="text" value="{{ $item->quantity }}"/>
                                        </div>
                                    </div>
                                </td>
                                <!-- Total -->
                                <td class="p-3 align-middle border-light">
                                    <p class="mb-0 small">${{ $item->quantity * $item->product->Price }}</p>
                                </td>
                                <!-- Remove Button -->
                                <td class="p-3 align-middle border-light">
                                    <form action="{{ route('cart.delete') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $item->id }}">
                                        <button type="submit" class="btn btn-link reset-anchor">
                                            <i class="fas fa-trash-alt small text-muted"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- CART NAV-->
                <div class="bg-light px-4 py-3">
                    <div class="row align-items-center text-center">
                        <div class="col-md-6 mb-3 mb-md-0 text-md-start"><a class="btn btn-link p-0 text-dark btn-sm" href="{{url('/shop')}}"><i class="fas fa-long-arrow-alt-left me-2"> </i>Continue shopping</a></div>
                        <div class="col-md-6 text-md-end"><a class="btn btn-outline-dark btn-sm" href="{{url('/checkout')}}">Procceed to checkout<i class="fas fa-long-arrow-alt-right ms-2"></i></a></div>
                    </div>
                </div>
            </div>
            <!-- ORDER TOTAL-->
            <div class="col-lg-4">
                <div class="card border-0 rounded-0 p-lg-4 bg-light">
                    <div class="card-body">
                        <h5 class="text-uppercase mb-4">Cart total</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-center justify-content-between">
                                <strong class="text-uppercase small font-weight-bold">Subtotal</strong>
                                <span class="text-muted small">${{ number_format($subtotal, 2) }}</span>
                            </li>
                            <li class="border-bottom my-2"></li>
                            <li class="d-flex align-items-center justify-content-between mb-4">
                                <strong class="text-uppercase small font-weight-bold">Total</strong>
                                <span>${{ number_format($total, 2) }}</span>
                            </li>
                            <li>
                                    <div class="input-group mb-3">
                                        <input class="form-control" name="coupon" type="text" placeholder="Enter your coupon">
                                        <button class="btn btn-dark btn-sm" type="submit"> <i class="fas fa-gift me-2"></i>Apply coupon</button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    // ------------------------------------------------------- //
    //   Inject SVG Sprite -
    //   see more here
    //   https://css-tricks.com/ajaxing-svg-sprite/
    // ------------------------------------------------------ //
    function injectSvgSprite(path) {

        var ajax = new XMLHttpRequest();
        ajax.open("GET", path, true);
        ajax.send();
        ajax.onload = function(e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
        }
    }
    // this is set to BootstrapTemple website as you cannot
    // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
    // while using file:// protocol
    // pls don't forget to change to your domain :)
    injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');

</script>
<!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->

@endsection
