@extends('todos.layouts.app')

@section('main-container')
<div id="myDIV" class="header">
    <h2>My To Do List</h2>
    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <input type="text" id="myInput" name="title" placeholder="Title...">
        <button type="submit" class="addBtn">Add</button>
    </form>
</div>

<ul id="myUL">
    @foreach ($todos as $todo)
        <li>
            {{ $todo->title }}
            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="close">&times;</button>
            </form>
            <a href="{{ route('todos.edit', $todo->id) }}" class="edit">&#9998;</a>
        </li>
    @endforeach
</ul>
@endsection
