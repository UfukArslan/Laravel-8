<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('task.index')->with('tasks', $this->tasks);
    }

        public function show( $task )
    {
        return view('task.show')->with('task', $task);
    }

}
