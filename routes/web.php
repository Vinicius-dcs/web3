<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/home', HomeController::class);

Route::get('/homePrincipal', [HomeController::class, 'principal']);

//Route::get('/login', [LoginContr::class, 'index'])->name('login');

Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos.principal');

Route::get('/produtos/create', [ProdutosController::class, 'create'])->name('produtos.inserir');
Route::post('/produtos/create', [ProdutosController::class, 'insert'])->name('produtos.inserir');
Route::get('/produtos/{id}', [ProdutosController::class, 'show'])->name('produtos.ver');

Route::get('/produtos/{produto}/edit', [ProdutosController::class, 'edit'])->name('produtos.edit');
Route::put('/produtos/{produto}', [ProdutosController::class, 'editar'])->name('produtos.editar');

Route::get('/produtos/{produto}/delete', [ProdutosController::class, 'delete'])->name('produtos.delete');
Route::delete('/produtos/{produto}', [ProdutosController::class, 'deletar'])->name('produtos.deletar');

Route::post('/', [UsuariosController::class, 'login'])->name('usuarios.login');



