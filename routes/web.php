<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::resource('/', TaskController::class);

Route::get('/tasks', [TaskController::class, 'index'])->name('todo.index');
Route::get('/tasks/{id}' , [TaskController::class , 'destroy'])->name('todo.destroy');

Route::post('/tasks', [TaskController::class, 'store'])->name('todo.store');
