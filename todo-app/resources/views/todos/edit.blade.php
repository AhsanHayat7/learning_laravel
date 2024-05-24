    <div class="container">
        <h1>Edit Todo</h1>
        <form action="{{ url('/todos/'.$todo->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $todo->title }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
