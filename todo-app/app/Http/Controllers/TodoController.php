<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
{
    $todos = Todo::all();
    return view('todos.index', compact('todos'));
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
    ]);

    Todo::create($request->all());
    return redirect('/todos');
}

public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
    ]);

    $todo = Todo::findOrFail($id);
    $todo->update($request->all());
    return redirect('/todos');
}

public function destroy($id)
{
    Todo::findOrFail($id)->delete();
    return redirect('/todos');
}
}
