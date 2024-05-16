<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'homepage'])->name('homepage');


// Rotte per le funzionalità delle attività
Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/tasks/create', [TaskController::class, 'create']);
// Route::post('/show', [TaskController::class, 'show']); // non funziona per l'ID
// Route::get('/tasks/{id}', 'TaskController@show');
// Route::get('/tasks/edit', [TaskController::class, 'edit']);
// Route::put('/tasks/{id}', 'TaskController@update');

