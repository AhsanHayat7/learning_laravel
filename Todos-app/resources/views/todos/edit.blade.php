@extends('todos.layouts.app')

@section('main-container')
    <div id="myDIV" class="header">
        <h2>Edit Todo</h2>
    </div>

    <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $todo->title }}">
        <button type="submit">Update</button>
    </form>

    <a href="{{ route('todos.index') }}">Back to list</a>
@endsection
