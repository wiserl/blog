<?php

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

// Route::get('/tasks', 'TasksController@index');
// Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostsController@index');
Route::get('/posts/{posts}', 'PostsController@show');


// use App\Task;


// Route::get('/tasks', function () {
//     $tasks=App\Task::all();
    
//     return view('tasks.index', compact('tasks'));
// });

// Route::get('/tasks/{task}', function ($id) {
//  $task = App\Task::find($id);
 
   
//     return view('tasks.show', compact('task'));
// });
