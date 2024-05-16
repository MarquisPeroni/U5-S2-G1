<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rotte per le funzionalità delle attività
Route::get('/', [TaskController::class, 'homepage'])->name('homepage');
Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/tasks/create', [TaskController::class, 'create']);
Route::post('/tasks', 'TaskController@store');
Route::get('/tasks/{id}', 'TaskController@show');
Route::get('/tasks/edit', [TaskController::class, 'edit']);
Route::put('/tasks/{id}', 'TaskController@update');

