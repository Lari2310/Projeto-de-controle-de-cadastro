<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControletbController;

Route::get('/',[ControletbController::class,'index'])->name('index');
Route::get('/cadastrar',[ControletbController::class,'showFormCadastro'])->name('formulario-cadastro');
Route::post('/cadastrar',[ControletbController::class,'storeCadastro'])->name('cadastro-controle');

Route::get('/todoscadastro',[ControletbController::class,'showGerenciador'])->name('todos-cadastro');

Route::delete('/delete-cadastro/{id}',[ControletbController::class,'destroy'])->name('delete-cadastro');

Route::get('/alterar/{id}',[ControletbController::class,'show'])->name('alterar-cadastro');
Route::put('/alterarBanco/{id}',[ControletbController::class,'update'])->name('alterarBanco-cadastro');

