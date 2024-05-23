    <div class="container">
        <h1>Todos</h1>
        <a href="{{ url('/todos/create') }}" class="btn btn-primary mb-3">Add Todo</a>
        <ul class="list-group">
            @foreach($todos as $todo)
                <li class="list-group-item">
                    {{ $todo->title }}
                    <form action="{{ url('/todos/'.$todo->id) }}" method="POST" class="float-right">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ url('/todos/'.$todo->id.'/edit') }}" class="btn btn-secondary btn-sm mr-2 float-right">Edit</a>
                </li>
            @endforeach
        </ul>
    </div>

