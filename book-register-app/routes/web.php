<?php

use App\Http\Controllers\AssuntoController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\RelatorioLivrosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::resources([
    'livros' => LivroController::class,
    'autores' => AutorController::class,
    'assuntos' => AssuntoController::class,
]);

Route::get('/relatorio/livros', [RelatorioLivrosController::class, 'tela'])
    ->name('relatorio.livros.tela');
Route::get('/relatorio/livros/pdf', [RelatorioLivrosController::class, 'pdf'])
    ->name('relatorio.livros.pdf');
