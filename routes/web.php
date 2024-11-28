<?php

use App\Http\Controllers\AtoresController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\FilmesController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro_atores', [AtoresController::class, "formCriarAtor"]);
Route::get('/lista_atores', [AtoresController::class, "listar"]);
Route::post('/criar_ator', [AtoresController::class, 'criar']);
Route::delete("/deletar_atores/{id}", [AtoresController::class, 'deletar']);
Route::get("/editar_atores/{id}", [AtoresController::class, 'formEditarAtor']);
Route::put("/editar_atores/{id}", [AtoresController::class, 'editar']);



Route::get('/cadastro_filmes', [FilmesController::class, "formCriarFilmes"]);
Route::get('/listar_filmes', [FilmesController::class, "listar"]);
Route::post('/criar_filmes', [FilmesController::class, 'criar']);
Route::delete("/deletar_filmes/{id}", [FilmesController::class, 'deletar']);
Route::get("/editar_filme/{id}", [FilmesController::class, 'formEditarFilmes']);
Route::put("/editar_filme/{id}", [FilmesController::class, 'editar']);



Route::get('/', [AppController::class, 'inicial']);