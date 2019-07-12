<?php

use App\Task;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\QuestinareController;
use App\Http\Controllers\CommentController;

//Post 
Route::get('/',[PostController::class, 'index'])->name('post');
Route::get('/post/{post}',[PostController::class, 'show']);
Route::post('/posts/store',[PostController::class, 'store'])->name('posts.store');
Route::get('/posts/create',[PostController::class, 'create'])->name('post.create');
Route::get('/posts/{id}/edit',[PostController::class, 'edit'])->name('posts.edit');
Route::post('/posts/update/{id}',[PostController::class, 'update'])->name('posts.update');
Route::get('/posts/delete/{id}',[PostController::class, 'delete'])->name('posts.delete');
Route::get('/master',[PostController::class, 'master']);

Route::post('/posts',[PostController::class,'store']);

//Task
Route::get('/tasks',[TasksController::class,'index'])->name('tasks');
Route::get('/task/show/{task}',[TasksController::class,'show'])->name('task.show');
Route::get('/task/{id}/edit',[TasksController::class,'edit'])->name('task.edit');
Route::post('/task/{id}/update',[TasksController::class,'update'])->name('task.update');
Route::get('/task/create',[TasksController::class,'create'])->name('task.create');
Route::post('/tasks/store',[TasksController::class,'store']);

//Questionare
Route::get('/questionare', [QuestinareController::class,'index'])->name('questinare');
Route::get('/questinare/create', [QuestinareController::class,'create'])->name('questinare.create');
Route::get('/questinare/{questinare}/show', [QuestinareController::class,'show'])->name('questinare.show');
Route::get('/questinare/{questinare}/edit', [QuestinareController::class,'edit'])->name('questinare.edit');
Route::post('/questinare/{id}/updates', [QuestinareController::class,'update'])->name('questinare.update');
Route::get('/questinare/{questinare}/delete', [QuestinareController::class,'delete'])->name('questinare.delete');
Route::post('/questinare/store', [QuestinareController::class,'store'])->name('questinare.store');


//Comment
Route::get('/coment/{id}/create',[CommentController::class,'create'])->name('comment.create');
Route::post('/coment/{id}/store',[CommentController::class,'store'])->name('comment.store');

