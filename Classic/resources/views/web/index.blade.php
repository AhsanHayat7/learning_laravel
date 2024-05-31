@extends('web.layouts.app')
@section('main-container')



        <div class="tm-home-img-container">
            <img src="{{asset('web/img/tm-home-img.jpg')}}" alt="Image" class="hidden-lg-up img-fluid">
        </div>

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                        <h2 class="tm-gold-text tm-title">Introduction</h2>
                        <p class="tm-subtitle">Suspendisse ut magna vel velit cursus tempor ut nec nunc. Mauris vehicula, augue in tincidunt porta, purus ipsum blandit massa.</p>
                    </div>
                </div>
                <div class="row">
                    @foreach ($blogs as $blog )


                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="{{asset($blog->image)}}" alt="Image" class="tm-margin-b-20 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">{{$blog->title}}</h4>
                            <p class="tm-margin-b-20">{{$blog->description}}</p>
                            <a href="#" class="tm-btn text-uppercase">Detail</a>
                        </div>

                    </div>

                    {{-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="{{asset($blog->image)}}" alt="Image" class="tm-margin-b-20 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">{{$blog->title}}</h4>
                            <p class="tm-margin-b-20">{{$blog->description}}</p>
                            <a href="#" class="tm-btn text-uppercase">Read More</a>
                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="{{asset($blog->image)}}" alt="Image" class="tm-margin-b-20 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">{{$blog->title}}</h4>
                            <p class="tm-margin-b-20">{{$blog->description}}</p>
                            <a href="#" class="tm-btn text-uppercase">Detail</a>
                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="{{asset($blog->image)}}" alt="Image" class="tm-margin-b-20 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">{{$blog->title}}</h4>
                            <p class="tm-margin-b-20">{{$blog->description}}</p>
                            <a href="#" class="tm-btn text-uppercase">Read More</a>
                        </div>

                    </div> --}}
                @endforeach
                </div> <!-- row -->

                <div class="row tm-margin-t-big">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="tm-2-col-left">
                            @if($blogs->isnotEmpty())

                            @php
                                $firstblog = $blogs->first();
                            @endphp

                            <h3 class="tm-gold-text tm-title">{{$firstblog->title}}</h3>
                            <p class="tm-margin-b-30">{{$firstblog->description}}</p>
                            <img src="{{asset($firstblog->image)}}" alt="Image" class="tm-margin-b-40 img-fluid">
                            <p class="m-b-2">{{($firstblog->description)}}</p>
                            <a href="#" class="tm-btn text-uppercase">Read More</a>
                            @else
                                <p>No blogs found</p>
                            @endif
                        </div>
                    </div>

                   
                                <div class="row tm-2-rows-md-down-1 tm-margin-t-mid">
                                    @foreach ($blogs as $blog)


                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <h3 class="tm-gold-text tm-title tm-margin-b-30">Related Posts</h3>
                                        <div class="media tm-related-post">
                                          <div class="media-left media-middle">
                                            <a href="#">
                                              <img class="media-object" src="{{asset($blog->image)}}" alt="Generic placeholder image">
                                            </a>
                                          </div>
                                          <div class="media-body">
                                            <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15">{{$blog->title}}</h4></a>
                                            <p class="tm-small-font tm-media-description">{{$blog->description}}</p>
                                          </div>
                                        </div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div> <!-- row -->

            </div>
        </section>
@endsection
