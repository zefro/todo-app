<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    public function index()
    {
       return Todo::get();  
    }

    public function store(StoreTodoRequest $request)
    {
       return Todo::create($request->validated());
    }

    public function update(Todo $todo)
    {
        $todo->completed = $todo->completed ? false : true;
        $todo->save();
        return $todo;

    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return response()->json("deleted");
    }
}
