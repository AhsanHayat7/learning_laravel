@extends('web.layouts.app')
@section('main-container')
<!--  Modal -->
<div class="modal fade" id="productView" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content overflow-hidden border-0">
            <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-0">
                <div class="row align-items-stretch">
                    <div class="col-lg-6 p-lg-0">
                        <a class="glightbox product-view d-block h-100 bg-cover bg-center" style="background: url('{{url('web/img/product-5.jpg')}}')" href="{{url('web/img/product-5.jpg')}}" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a>
                        <a class="glightbox d-none" href="{{url('web/img/product-5-alt-1.jpg')}}" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a>
                        <a class="glightbox d-none" href="{{url('web/img/product-5-alt-2.jpg')}}" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-4 my-md-4">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                                <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                                <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                                <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
                            </ul>
                            <h2 class="h4">Red digital smartwatch</h2>
                            <p class="text-muted">$250</p>
                            <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                            <div class="row align-items-stretch mb-4 gx-0">
                                <div class="col-sm-7">
                                    <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                                        <div class="quantity">
                                            <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                            <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                            <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="{{url('/cart')}}">Add to cart</a></div>
                            </div>
                            <a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i class="far fa-heart me-2"></i>Add to wish list</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HERO SECTION-->
<div class="container">
    <section class="hero pb-3 bg-cover bg-center d-flex align-items-center" style="background: url('{{ url('web/img/hero-banner-alt.jpg') }}')">
        <div class="container py-5">
            <div class="row px-4 px-lg-5">
                <div class="col-lg-6">
                    <p class="text-muted small text-uppercase mb-2">New Inspiration 2020</p>
                    <h1 class="h2 text-uppercase mb-3">20% off on new season</h1><a class="btn btn-dark" href="{{url('/shop')}}">Browse collections</a>
                </div>
            </div>
        </div>
    </section>
    <!-- CATEGORIES SECTION-->
    <section class="pt-5">
        <header class="text-center">
            <p class="small text-muted small text-uppercase mb-1">Carefully created collections</p>
            <h2 class="h5 text-uppercase mb-4">Browse our categories</h2>
        </header>
        <div class="row">
            <div class="col-md-4"><a class="category-item" href="{{url('/shop')}}"><img class="img-fluid" src="{{url('web/img/cat-img-1.jpg')}}" alt=""/><strong class="category-item-title">Clothes</strong></a>
            </div>
            <div class="col-md-4"><a class="category-item mb-4" href="{{url('/shop')}}"><img class="img-fluid" src="{{url('web/img/cat-img-2.jpg')}}" alt=""/><strong class="category-item-title">Shoes</strong></a><a class="category-item" href="{{url('/shop')}}"><img class="img-fluid" src="{{url('web/img/cat-img-3.jpg')}}" alt=""/><strong class="category-item-title">Watches</strong></a>
            </div>
            <div class="col-md-4"><a class="category-item" href="{{url('/shop')}}"><img class="img-fluid" src="{{url('web/img/cat-img-4.jpg')}}" alt=""/><strong class="category-item-title">Electronics</strong></a>
            </div>
        </div>
    </section>

    <!-- TRENDING PRODUCTS-->
    <section class="py-5">
        <header>
            <p class="small text-muted small text-uppercase mb-1">Made the hard way</p>
            <h2 class="h5 text-uppercase mb-4">Top trending products</h2>
        </header>
        <div class="row">
            @foreach($products as $product)
        <!-- Check if the product has images -->
                @if($product->images->isNotEmpty())
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product text-center">
                            <div class="position-relative mb-3">
                                <div class="badge text-white bg-"></div>
                                <a class="d-block" href="{{ route('product-details', $product->Customer_id) }}">
                                    <img class="img-fluid w-100" src="{{ asset($product->images->first()->image_path) }}" alt="{{ $product->Name }}">
                                </a>
                                <div class="product-overlay">
                                    <ul class="mb-0 list-inline">
                                        <li class="list-inline-item m-0 p-0">
                                            <form action="{{ route('wishlist.add') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->Customer_id }}">
                                                <button type="submit" class="btn btn-sm btn-outline-dark">
                                                    <i class="far fa-heart"></i>
                                                </button>
                                            </form>
                                        </li>
                                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="{{ route('product-details',$product->Customer_id) }}">Add to cart</a></li>
                                        <!-- Ensure the correct parameter name is passed -->
                                        <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="{{ route('product-details', $product->Customer_id) }}"><i class="fas fa-expand"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h6><a class="reset-anchor" href="{{ route('product-details', $product->Customer_id) }}">{{ $product->Name }}</a></h6>
                            <p class="small text-muted">{{ $product->Price }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>

    <!-- SERVICES-->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center gy-3">
                <div class="col-lg-4">
                    <div class="d-inline-block">
                        <div class="d-flex align-items-end">
                            <svg class="svg-icon svg-icon-big svg-icon-light">
                                <use xlink:href="#delivery-time-1"> </use>
                            </svg>
                            <div class="text-start ms-3">
                                <h6 class="text-uppercase mb-1">Free shipping</h6>
                                <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-inline-block">
                        <div class="d-flex align-items-end">
                            <svg class="svg-icon svg-icon-big svg-icon-light">
                                <use xlink:href="#helpline-24h-1"> </use>
                            </svg>
                            <div class="text-start ms-3">
                                <h6 class="text-uppercase mb-1">24 x 7 service</h6>
                                <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-inline-block">
                        <div class="d-flex align-items-end">
                            <svg class="svg-icon svg-icon-big svg-icon-light">
                                <use xlink:href="#label-tag-1"> </use>
                            </svg>
                            <div class="text-start ms-3">
                                <h6 class="text-uppercase mb-1">Festivaloffers</h6>
                                <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- NEWSLETTER-->
    <section class="py-5">
        <div class="container p-0">
            <div class="row gy-3">
                <div class="col-lg-6">
                    <h5 class="text-uppercase">Let's be friends!</h5>
                    <p class="text-sm text-muted mb-0">Nisi nisi tempor consequat laboris nisi.</p>
                </div>
                <div class="col-lg-6">
                    <form action="#">
                        <div class="input-group">
                            <input class="form-control form-control-lg" type="email" placeholder="Enter your email address" aria-describedby="button-addon2">
                            <button class="btn btn-dark" id="button-addon2" type="submit">Subscribe</button>
                        </div>
                    </form>
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
    // to avoid CORS issues when viewing using file:// protocol, using the demo URL for the SVG sprite
    // use your own URL in production, please :)
    // https://demo.bootstrapious.com/directory/1-0/icons/orion-svg-sprite.svg
    //- injectSvgSprite('${window.location.origin}/icons/orion-svg-sprite.svg');
    // or
    // use relative path
    injectSvgSprite('icons/orion-svg-sprite.svg');

</script>
@endsection
