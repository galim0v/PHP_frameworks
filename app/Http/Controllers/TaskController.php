<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("tasks/index", [
            'tasks' => Task::where('user_id', auth()->id())
                           ->orderBy('Completed', 'asc')
                           ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tasks/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $formfields = $request->validate([
            "Title" => ["required", "min:6"],
            "Description" => 'required|min:6',
        ]);

        $formfields["Completed"] = 0;
        $formfields["user_id"] = auth()->id();

        $Task = Task::create($formfields);
        return redirect('/tasks')->with('message', 'Tasks created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
 
        return view('tasks/view', [
            'task' => $task
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view("tasks/edit", ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {

        if ($task->user_id !== auth()->id()) {
            abort(403, "Unauthorized Action");
        }

        $formfields = $request->validate([
            "Title" => ["required", "min:6"],
            "Description" => 'required|min:6',
        ]);

        $formfields["Completed"] = $request->Completed == "on" ? 1 : 0;
        $formfields["user_id"] = auth()->id();

        $task->update($formfields);

        return redirect('/tasks')->with('message', 'Tasks created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        if ($task->user_id !== auth()->id()) {
            abort(403, "Unauthorized Action");
        }
 
        $task->delete();

        return redirect('/tasks')->with('message', 'Tasks deleted successfully!');

    }
}
