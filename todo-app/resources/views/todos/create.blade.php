
    <div class="container">
        <h1>Add Todo</h1>
        <form action="{{ url('/todos') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>

