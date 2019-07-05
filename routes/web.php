<?php

use App\Task;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TasksController;

//Post 
Route::get('/',[PostController::class, 'index']);
Route::get('/post/{post}',[PostController::class, 'show']);
Route::get('/posts/create',[PostController::class, 'create']);
Route::get('/master',[PostController::class, 'master']);

Route::post('/posts',[PostController::class,'store']);

//Task
Route::get('/tasks',[TasksController::class,'index']);
Route::get('/tasks/create',[TasksController::class,'create']);
Route::post('/tasks/store',[TasksController::class,'store']);

