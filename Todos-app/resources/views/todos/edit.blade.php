@extends('todos.layouts.app')

@section('main-container')
<div class="mt-4">
    <h1>Edit To-do</h1>

    <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input type="text" name="title" class="form-control" value="{{ $todo->title }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
