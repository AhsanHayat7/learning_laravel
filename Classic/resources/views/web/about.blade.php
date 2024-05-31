@extends('web.layouts.app')

@section('main-container')

<div class="tm-about-img-container">
</div>

<section class="tm-section">
    <div class="container-fluid">
        <div class="row tm-2-rows-sm-swap">
            <!-- Sidebar Links -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-2-rows-sm-down-2" style="margin-bottom: 5px;">
                <h3 class="tm-gold-text">Sidebar Links</h3>
                <nav>
                    <ul class="nav">
                        @foreach ($blogs as $blog)
                            <li><a href="#" class="tm-text-link">{{$blog->title}}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>

            <!-- Blog Content -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 tm-2-rows-sm-down-1">
                @foreach ($blogs as $blog)
                    <div class="tm-content-box">
                        <h3 class="tm-gold-text">{{$blog->title}}</h3>
                        <p>{{$blog->description}}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="row tm-margin-t-mid">
            @foreach ($blogs as $blog)
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
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
