<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsCategorias_Controller;
use App\Http\Controllers\ViewsProdutos_Controller;
use App\Http\Controllers\ViewsUser_Controller;
use App\Http\Controllers\ViewsHome_Controller;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app/products/add', [ViewsProdutos_Controller::class, 'adicionar_produtos']);
Route::get('/app/products/modify', [ViewsProdutos_Controller::class, 'alterar_produtos']);
Route::get('/app/products/delete', [ViewsProdutos_Controller::class, 'adicionar_produtos']);

Route::get('/app/categorias/add', [ViewsCategorias_Controller::class, 'adicionar_categorias']);
Route::get('/app/categorias/delete', [ViewsCategorias_Controller::class, 'excluir_categorias']);

Route::get('/app/user/add', [ViewsUser_Controller::class, 'adicionar_categorias']);
Route::get('/app/user/modify', [ViewsUser_Controller::class, 'adicionar_categorias']);
Route::get('/app/user/delete', [ViewsUser_Controller::class, 'adicionar_categorias']);


Route::get('/app/navbar', [ViewsHome_Controller::class, 'navbar']);
Route::get('/app/home_usuario', [ViewsHome_Controller::class, 'home_user']);







