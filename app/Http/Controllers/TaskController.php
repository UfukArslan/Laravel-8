<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // public function showTask($id)
    // {
    //     return 'Task #' . $id;
    // }

    private $tasks;

    public function __construct()
    {
        $this->tasks = collect ([
            ['id' => 2, 'name' => 'Learn Laravel', 'duration' => 12],
            ['id' => 3, 'name' => 'Learn RudyOnRails', 'duration' => 24]
        ])->keyBy('id');
    }

        public function index()
    {
        // view fait référence au dossier view
        return view('task.index')->with('tasks', $this->tasks);
    }

        public function show( $task )
    {
        // view fait référence au dossier view
        // return view('task.show')->with('task', $this->tasks[$task]);
        $task = Task::find($task);
        return view('task.show')->with('task', $task);


    }

        public function create(){
            $task = Task::find($task);
            return view('task.create');
    }
        public function store(Request $request){
            dd($request);
    }

}


