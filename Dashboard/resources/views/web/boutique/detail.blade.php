@extends('web.layouts.app')

@section('main-container')
    <!-- Modal -->
    <div class="modal fade" id="productView" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content overflow-hidden border-0">
                <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-0">
                    <div class="row align-items-stretch">
                        <div class="col-lg-6 p-lg-0">
                            <a class="glightbox product-view d-block h-100 bg-cover bg-center"
                                style="background: url('{{ url('web/img/product-5.jpg') }}')"
                                href="{{ url('web/img/product-5.jpg') }}" data-gallery="gallery1"
                                data-glightbox="Red digital smartwatch"></a>
                            <a class="glightbox d-none" href="{{ url('web/img/product-5-alt-1.jpg') }}"
                                data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a>
                            <a class="glightbox d-none" href="{{ url('web/img/product-5-alt-2.jpg') }}"
                                data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-4 my-md-4">
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i>
                                    </li>
                                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i>
                                    </li>
                                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i>
                                    </li>
                                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i>
                                    </li>
                                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i>
                                    </li>
                                </ul>
                                <h2 class="h4">Red digital smartwatch</h2>
                                <p class="text-muted">$250</p>
                                <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut
                                    ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis
                                    parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.
                                </p>
                                <div class="row align-items-stretch mb-4 gx-0">
                                    <div class="col-sm-7">
                                        <div
                                            class="border d-flex align-items-center justify-content-between py-1 px-3">
                                            <span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                                            <div class="quantity">
                                                <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                                <input class="form-control border-0 shadow-0 p-0" type="text"
                                                    value="1">
                                                <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5"><a
                                            class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0"
                                            href="{{ url('/cart') }}">Add to cart</a></div>
                                </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i
                                        class="far fa-heart me-2"></i>Add to wish list</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <!-- PRODUCT SLIDER-->
                    <div class="row m-sm-0">
                        <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0 px-xl-2">
                            <div class="swiper product-slider-thumbs">
                                <div class="swiper-wrapper">
                                    @foreach ($product->Images as $image)
                                        <div class="swiper-slide h-auto swiper-thumb-item mb-3">
                                            <img class="w-100" src="{{ asset($image->image_path) }}" alt="...">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 order-1 order-sm-2">
                            <div class="swiper product-slider">
                                <div class="swiper-wrapper">
                                    @foreach ($product->Images as $image)
                                        <div class="swiper-slide h-auto">
                                            <a class="glightbox product-view" href="{{ asset($image->image_path) }}"
                                                data-gallery="gallery2" data-glightbox="Product item">
                                                <img class="img-fluid" src="{{ asset($image->image_path) }}"
                                                    alt="...">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PRODUCT DETAILS-->
                </div>

                <div class="col-lg-6">
                    <ul class="list-inline mb-2 text-sm">
                        <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                        <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                        <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                        <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                        <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                    </ul>
                    <h1>{{ $product->Name }}</h1>
                    <p class="text-muted lead">${{ $product->Price }}</p>
                    <p class="text-sm mb-4">{{ $product->Description }}</p>
                    <div class="row align-items-stretch mb-4">
                        <div class="col-sm-5 pr-sm-0">
                            <div class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white">
                                <span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                                <div class="quantity">
                                    <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                    <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                    <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="{{ url('/cart') }}">Add to cart</a></div>
                    </div>
                    <a class="text-dark p-0 mb-4 d-inline-block" href="#!"><i class="far fa-heart me-2"></i>Add to wish list</a><br>
                    <ul class="list-unstyled small d-inline-block">
                        <li class="px-3 py-2 mb-1 bg-white"><strong class="text-uppercase">SKU:</strong><span class="ms-2 text-muted">{{ $product->SKU }}</span></li>
                        <li class="px-3 py-2 mb-1 bg-white text-muted">
                            <strong class="text-uppercase text-dark">Category:</strong>
                            <a class="reset-anchor ms-2" href="#!">{{ $product->category->CategoryName }}</a>
                        </li>
                        <li class="px-3 py-2 mb-1 bg-white text-muted"><strong class="text-uppercase text-dark">Tags:</strong>
                            @if(is_array($product->Tags))
                                @foreach ($product->Tags as $tag)
                                    <a class="reset-anchor ms-2" href="#!">{{ $tag }}</a>
                                @endforeach
                            @elseif($product->Tags)
                            <span class="ms-2">{{ $product->Tags }}</span>
                            @else
                                No tags available
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
            <!-- DETAILS TABS-->
            <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link text-uppercase active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                </li>
            </ul>
            <div class="tab-content mb-5" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                    <div class="p-4 p-lg-5 bg-white">
                        <h6 class="text-uppercase">Product description</h6>
                        <p class="text-muted text-sm mb-0">{{ $product->Description }}</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <!-- Add the reviews tab content here -->
                    <!-- You can add customer reviews here -->
                </div>
            </div>
            <!-- Product Slider for Mobile -->
            <div id="productSlider" class="carousel slide" data-ride="carousel">
                <!-- Carousel Inner -->
            </div>
            <!-- Related Products -->
            <!-- RELATED PRODUCTS-->
            <h2 class="h5 text-uppercase mb-4">Related products</h2>
            <div class="row">
                <!-- PRODUCT-->
                <div class="col-lg-3 col-sm-6">
                    <div class="product text-center skel-loader">
                        <div class="d-block mb-3 position-relative"><a class="d-block"
                                href="{{ url('/product-details') }}"><img class="img-fluid w-100"
                                    src="{{ url('web/img/product-1.jpg') }}" alt="..."></a>
                            <div class="product-overlay">
                                <ul class="mb-0 list-inline">
                                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark"
                                            href="#!"><i class="far fa-heart"></i></a></li>
                                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark"
                                            href="#!">Add to cart</a></li>
                                    <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark"
                                            href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h6> <a class="reset-anchor" href="{{ url('/product-details') }}">Kui Ye Chen’s AirPods</a></h6>
                        <p class="small text-muted">$250</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-lg-3 col-sm-6">
                    <div class="product text-center skel-loader">
                        <div class="d-block mb-3 position-relative"><a class="d-block"
                                href="{{ url('/product-details') }}"><img class="img-fluid w-100"
                                    src="{{ url('web/img/product-2.jpg') }}" alt="..."></a>
                            <div class="product-overlay">
                                <ul class="mb-0 list-inline">
                                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark"
                                            href="#!"><i class="far fa-heart"></i></a></li>
                                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark"
                                            href="#!">Add to cart</a></li>
                                    <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark"
                                            href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h6> <a class="reset-anchor" href="{{ url('/product-details') }}">Air Jordan 12 gym red</a></h6>
                        <p class="small text-muted">$300</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-lg-3 col-sm-6">
                    <div class="product text-center skel-loader">
                        <div class="d-block mb-3 position-relative"><a class="d-block"
                                href="{{ url('/product-details') }}"><img class="img-fluid w-100"
                                    src="{{ url('web/img/product-3.jpg') }}" alt="..."></a>
                            <div class="product-overlay">
                                <ul class="mb-0 list-inline">
                                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark"
                                            href="#!"><i class="far fa-heart"></i></a></li>
                                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark"
                                            href="#!">Add to cart</a></li>
                                    <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark"
                                            href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h6> <a class="reset-anchor" href="{{ url('/product-details') }}">Cyan cotton t-shirt</a></h6>
                        <p class="small text-muted">$25</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-lg-3 col-sm-6">
                    <div class="product text-center skel-loader">
                        <div class="d-block mb-3 position-relative"><a class="d-block"
                                href="{{ url('/product-details') }}"><img class="img-fluid w-100"
                                    src="{{ url('web/img/product-4.jpg') }}" alt="..."></a>
                            <div class="product-overlay">
                                <ul class="mb-0 list-inline">
                                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark"
                                            href="#!"><i class="far fa-heart"></i></a></li>
                                    <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark"
                                            href="#!">Add to cart</a></li>
                                    <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark"
                                            href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h6> <a class="reset-anchor" href="{{ url('/product-details') }}">Timex Unisex Originals</a></h6>
                        <p class="small text-muted">$351</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
