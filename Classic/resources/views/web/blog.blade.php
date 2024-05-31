@extends('web.layouts.app')

@section('main-container')

        <div class="tm-blog-img-container">

        </div>

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                        <div class="tm-blog-post">
                            @if($blogs->isNotEmpty())
                                @php
                                    $firstBlog = $blogs->first();
                                @endphp
                                <h3 class="tm-gold-text">{{$firstBlog->title}}</h3>
                                <img src="{{asset($firstBlog->image)}}" alt="Image" class="img-fluid tm-img-post">
                                <p>{{$firstBlog->description}}</p>
                                <p>{{$firstBlog->description}}</p>
                                <p>{{$firstBlog->description}}</p>
                                <p>{{$firstBlog->description}}</p>
                            @else
                                <p>No blogs found.</p>
                            @endif
                        </div>
                        <div class="row tm-margin-t-big">
                            @foreach ($blogs->skip(1) as $blog )

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                                <div class="tm-content-box">
                                    <img src="{{asset($blog->image)}}" alt="Image" class="tm-margin-b-30 img-fluid">
                                    <h4 class="tm-margin-b-20 tm-gold-text">{{$blog->title}}</h4>
                                    <p class="tm-margin-b-20">{{$blog->description}}</p>
                                    <a href="#" class="tm-btn text-uppercase">Detail</a>
                                </div>

                            </div>
                          @endforeach
                        </div>
                    </div>


        </section>

@endsection
