<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\AutorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('livro', [LivroController::class, 'index']);
Route::get('livro/create', [LivroController::class, 'create']);
Route::post('livro', [LivroController::class, 'store']);
Route::get('livro/{id}/edit', [LivroController::class, 'edit']);
Route::put('livro/{id}', [LivroController::class, 'update']);
Route::delete('livro/{id}', [LivroController::class, 'destroy']);


Route::get('autor', [AutorController::class, 'index']);
Route::get('autor/create', [AutorController::class, 'create']);
Route::post('autor', [AutorController::class, 'store']);
Route::get('autor/{id}/edit', [AutorController::class, 'edit']);
Route::put('autor/{id}', [AutorController::class, 'update']);
Route::delete('autor/{id}', [AutorController::class, 'destroy']);