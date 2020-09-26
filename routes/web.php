<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('tasks', [TaskController::class, 'showIndex'])->name('task.index');

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('tasks', function(){
//     return 'Task liste';
// });

// Route::get('tasks/{id}', [TaskController::class, 'showTask']);

// Route::get('tasks/test/{id}', function($id) {
//     return view('task', ['id'= $id]);
// });

