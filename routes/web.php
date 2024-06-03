<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\GraficoController;

Route::get('/personas', [PersonasController::class, 'index'])->name('personas.index');
Route::get('/personas/create', [PersonasController::class, 'create'])->name('personas.create');
Route::post('/personas', [PersonasController::class, 'store'])->name('personas.store');
Route::get('/personas/{persona}', [PersonasController::class, 'show'])->name('personas.show');
Route::get('/personas/{persona}/edit', [PersonasController::class, 'edit'])->name('personas.edit');
Route::put('/personas/{persona}', [PersonasController::class, 'update'])->name('personas.update');
Route::delete('/personas/{persona}', [PersonasController::class, 'destroy'])->name('personas.destroy');

Route::get('/grafico', [GraficoController::class, 'index'])->name('personas.grafico');

