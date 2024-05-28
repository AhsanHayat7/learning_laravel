@extends('todos.layouts.app')

@section('main-container')
<div id="myDIV" class="header">
    <h2>My To Do List</h2>
    <!-- Display validation errors, if any -->
    @if ($errors->any())
        <div class="alert alert-danger" style="color: black;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Form for creating new todo items -->
    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <input type="text" id="myInput" name="title" placeholder="Title...">
        <button type="submit" class="addBtn">Add</button>
    </form>
</div>

<ul id="myUL">
    <!-- Display existing todo items -->
    @foreach ($todos as $todo)
        <li>
            {{ $todo->title }}
            <!-- Form for deleting todo items -->
            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="close">&times;</button>
            </form>
            <!-- Link for editing todo items -->
            <a href="{{ route('todos.edit', $todo->id) }}" class="edit">&#9998;</a>
        </li>
    @endforeach
</ul>
@endsection
