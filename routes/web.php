<?php

use App\Task;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\QuestinareController;
use App\Http\Controllers\TasksetController;
use App\Http\Controllers\CommentController;

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

Route::prefix('taskset')->group(function(){

    Route::get('index',[TasksetController::class,'index'])->name('taskset.index');
    Route::get('create',[TasksetController::class,'create'])->name('taskset.create');
    Route::post('store',[TasksetController::class,'store'])->name('taskset.store');
    Route::get('/{taskset}/show',[TasksetController::class,'show'])->name('taskset.show');
    Route::get('/{taskset}/destroy',[TasksetController::class,'destroy'])->name('taskset.destroy');
    Route::get('/{taskset}/edit',[TasksetController::class,'edit'])->name('taskset.edit');
    Route::post('update/{taskset}',[TasksetController::class,'update'])->name('taskset.update');

});



//Questionare
Route::get('/questionare', [QuestinareController::class,'index'])->name('questinare');
Route::get('/questinare/create', [QuestinareController::class,'create'])->name('questinare.create');
Route::get('/questinare/{questinare}', [QuestinareController::class,'show'])->name('questinare.show');
Route::post('/questinare/store', [QuestinareController::class,'store'])->name('questinare.store');




Route::get('create/{id}/coment', [CommentController::class,'create'])->name('coment.create');
Route::post('store/{id}', [CommentController::class,'store'])->name('coment.store');

