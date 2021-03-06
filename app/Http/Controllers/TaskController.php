<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\TaskStoreRequest;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index ()
    {
        // dd('test');
        $tasks = Task::paginate(5);
        return view('task.index')->with('tasks', $tasks);
    }

    public function show( $task )
    {
        $task = Task::find($task);
        //$task = Task::findOrFail($task);//génére une 404
        return view('task.show')->with('task', $task);
    }

    public function create( )
    {
        return view('task.create');
    }

    public function store( TaskStoreRequest $request )
    {

        $task = Task::create($request->all());
        return view('task.show')->with('task', $task);
    }

    public function destroy( $task )
    {
        $task = Task::find($task);
        $task->delete();
        return redirect(route('tasks.index'));
    }
}
