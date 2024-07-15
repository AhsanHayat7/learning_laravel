@extends('frontend.layouts.app')

@section('title', 'Category')

@section('main-container')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                <li class="breadcrumb-item active">Category</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Category</h5>

                        <!-- Default Table -->
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Category ID</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Parent Category Name</th>
                                        <th scope="col">Category Image</th>
                                        <th scope="col">Category Discount</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">URL</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->category_id }}</td>
                                        <td>{{ $category->CategoryName }}</td>
                                        <td>
                                            @if($category->parentcategory)
                                                {{ $category->parentcategory->CategoryName }}
                                            @else
                                                No Parent Category
                                            @endif
                                        </td>
                                        <td>
                                            <img src="{{asset($category->category_image)}}" alt="nf" style="width:100px;height:100px;">
                                        </td>
                                        <td>{{ $category->category_discount }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>{{ $category->url }}</td>
                                        <td>{{ $category->status }}</td>
                                        <td>
                                            <a href="{{route('category.delete',$category->category_id)}}"> <button class="btn btn-danger">Delete</button></a>

                                          <a href="{{route('category.edit',$category->category_id)}}"> <button class="btn btn-primary">Edit</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@endsection
