<?php

use App\Task;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\QuestinareController;

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

//Questionare
Route::get('/questionare', [QuestinareController::class,'index'])->name('questinare');
Route::get('/questinare/create', [QuestinareController::class,'create'])->name('questinare.create');
Route::get('/questinare/{questinare}', [QuestinareController::class,'show'])->name('questinare.show');
Route::post('/questinare/store', [QuestinareController::class,'store'])->name('questinare.store');

