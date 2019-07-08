<?php

use App\Task;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TasksController;

//Post 
Route::get('/',[PostController::class, 'index'])->name('post');
Route::get('/post/{post}',[PostController::class, 'show']);
Route::get('/posts/create',[PostController::class, 'create'])->name('post.create');
Route::get('/master',[PostController::class, 'master']);

Route::post('/posts',[PostController::class,'store']);

//Task
Route::get('/tasks',[TasksController::class,'index'])->name('tasks');
Route::get('/tasks/{task}',[TasksController::class,'show'])->name('task.show');
Route::get('/tasks/create',[TasksController::class,'create']);
Route::post('/tasks/store',[TasksController::class,'store']);

