<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class,'SobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::get('/login', [\App\Http\Controllers\LoginController::class,'login'])->name('site.login');

Route::prefix('/admin')->group(function(){
    Route::get('/clientes', [\App\Http\Controllers\ClientesController::class,'clientes'])->name('admin.clientes');
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedoresController::class,'fornecedores'])->name('admin.fornecedores');
    Route::get('/produtos', [\App\Http\Controllers\ProdutosController::class,'produtos'])->name('admin.produtos');

});



Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class,'teste'])->name('teste');

//Route::redirect('/rota2', '/rota1', 301);

Route::fallback(function(){
    echo 'A rota acessada nao existe. <a href="' .route('site.index').'"> clique aqui </a> para voltar para o site. ';
});


