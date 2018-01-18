<?php

// use Symfony\Component\Routing\Annotation\Route;

// 

/*
|--------------------------------------------------------------------------
| Web Routes                
|---------------------------    -----------------------------------------------
|   
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/tasks', 'TasksController@index');
// Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');




// use App\Task;


// Route::get('/tasks', function () {
//     $tasks=App\Task::all();
    
//     return view('tasks.index', compact('tasks'));
// });

// Route::get('/tasks/{task}', function ($id) {
//  $task = App\Task::find($id);
 
   
//     return view('tasks.show', compact('task'));
// });
