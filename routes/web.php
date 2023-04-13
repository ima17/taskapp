<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    $data=App\Task::all();
    return view('tasks')->with('tasks',$data);
});

Route::post('/saveTask','taskController@store');

Route::get('/markascompleted/{id}','taskController@UpdateTaskAsCompleted');

Route::get('/markasnotcompleted/{id}','taskController@UpdateTaskAsNotCompleted');

Route::get('/deletetask/{id}','taskController@deletetask');

Route::get('/updatetask/{id}','taskController@updatetaskview');

Route::post('/updatetasks','taskController@updatetask');