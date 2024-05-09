@extends('web.layouts.app')
@section('main-container')
      <!--  Modal -->
      <div class="modal fade" id="productView" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content overflow-hidden border-0">
            <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" style="background: url('{{url('web/img/product-5.jpg')}}" href="{{url('web/img/product-5.jpg')}}" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="{{url('web/img/product-5-alt-1.jpg')}}" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="{{url('web/img/product-5-alt-2.jpg')}}" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
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
                    </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i class="far fa-heart me-2"></i>Add to wish list</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Shop</h1>
              </div>
              <div class="col-lg-6 text-lg-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                    <li class="breadcrumb-item"><a class="text-dark" href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
<section class="py-5">
    <div class="container p-0">
        <div class="row">
            <!-- SHOP SIDEBAR-->
            <div class="col-lg-3 order-2 order-lg-1">
                <h5 class="text-uppercase mb-4">Categories</h5>
                @foreach($getCategories as $category)
                    <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase fw-bold">{{ $category['CategoryName'] }}</strong></div>
                    <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                        @foreach($category['subcategories'] as $subcategory)
                            <li class="mb-2"><a class="reset-anchor" href="?category_id={{$subcategory['category_id']}}">{{ $subcategory['CategoryName'] }}</a></li>
                        @endforeach
                    </ul>
                @endforeach
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold">Health &amp; Beauty</strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                  <li class="mb-2"><a class="reset-anchor" href="#!">Shavers</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">bags</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Cosmetic</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Nail Art</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Skin Masks &amp; Peels</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Korean cosmetics</a></li>
                </ul>
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase fw-bold">Electronics</strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal mb-5">
                  <li class="mb-2"><a class="reset-anchor" href="#!">Electronics</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">USB Flash drives</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Headphones</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Portable speakers</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Cell Phone bluetooth headsets</a></li>
                  <li class="mb-2"><a class="reset-anchor" href="#!">Keyboards</a></li>
                </ul>
              </div>
              <!-- SHOP LISTING-->
              <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row mb-3 align-items-center">
                  <div class="col-lg-6 mb-2 mb-lg-0">
                    <p class="text-sm text-muted mb-0">Showing 1–12 of 53 results</p>
                  </div>
                  <div class="col-lg-6">
                    <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
                        <li class="list-inline-item text-muted me-3"><a class="reset-anchor p-0" href="#!"><i class="fas fa-th-large"></i></a></li>
                        <li class="list-inline-item text-muted me-3"><a class="reset-anchor p-0" href="#!"><i class="fas fa-th"></i></a></li>
                        <li class="list-inline-item">
                            <form action="{{ url('/shop') }}" method="GET">
                                <select class="selectpicker" name="orderby" data-customclass="form-control form-control-sm" onchange="this.form.submit()">
                                    <option value="">Sort By</option>
                                    <option value="desc" {{ request('orderby') == 'desc' ? 'selected' : '' }}>Default Descending sorting</option>
                                    <option value="asc" {{ request('orderby') == 'asc' ? 'selected' : '' }}>Default Ascending sorting</option>
                                </select>
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-12 mb-4"></div>
                <div class="row">
                    @foreach($products as $product)
                    <!-- Check if the product has images -->
                    {{-- @if($product->images->isNotEmpty()) --}}
                        <!-- PRODUCT-->
                        <div class="col-lg-4 col-sm-6">
                            <div class="product text-center">
                                <div class="mb-3 position-relative">
                                    <div class="badge text-white bg-{{ $product->Badge }}"></div>
                                        <a class="d-block" href="{{ route('product-details',$product->Customer_id) }}">
                                            <img class="img-fluid w-100" src="{{ $product->Image }}" alt="...">
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
                                            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <h6> <a class="reset-anchor" href="{{ route('product-details',$product->Customer_id) }}">{{ $product->Name }}</a></h6>
                                <p class="small text-muted">${{ $product->Price }}</p>
                            </div>
                        </div>
                    {{-- @endif --}}
                @endforeach
              </div>
                <!-- PAGINATION-->
                <!-- Add your product listing HTML here -->

                    <!-- PAGINATION-->
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="Page navigation example">
                        {{ $products->links('pagination::bootstrap-4') }}
                    </nav>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <script>
        var range = document.getElementById('range');
        noUiSlider.create(range, {
            range: {
                'min': 0,
                'max': 2000
            },
            step: 5,
            start: [100, 1000],
            margin: 300,
            connect: true,
            direction: 'ltr',
            orientation: 'horizontal',
            behaviour: 'tap-drag',
            tooltips: true,
            format: {
              to: function ( value ) {
                return '$' + value;
              },
              from: function ( value ) {
                return value.replace('', '');
              }
            }
        });

      </script>
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

