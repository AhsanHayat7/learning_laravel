@extends('dashboard.layouts.app')
@section('main-container')
    <div class="page-container">
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route('create') }}" method="GET">
                                <button type="submit" class="au-btn au-btn-icon au-btn--blue mb-3">
                                    <i class="zmdi zmdi-plus"></i> Add Item
                                </button>
                            </form>

                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            <div class="table-responsive table--no-card m-b-30">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($blogs as $blog)
                                            <tr>
                                                <td>{{ $blog->title }}</td>
                                                <td>
                                                    <a data-fancybox="product-images" href="{{ asset($blog->image) }}">
                                                        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" style="max-width: 100px;">
                                                    </a>
                                                </td>
                                                <td>{{ $blog->description }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button to show the add blog form -->





    </div>
@endsection
