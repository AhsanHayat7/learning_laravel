@extends('dashboard.layouts.app')

@section('main-container')
    <div class="container">
        <!-- Button to show the add blog form -->
        <form action="{{ route('create') }}" method="GET">
            <button type="submit" class="au-btn au-btn-icon au-btn--blue mb-3">
                <i class="zmdi zmdi-plus"></i> Add Item
            </button>
        </form>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Blog Table -->
        <table class="table">
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
@endsection
