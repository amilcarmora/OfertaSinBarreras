<?php

use App\Oferta;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
// ---------------------------RUTAS OFERTAS ---------------------------
Route::get('/', 'OfertaController@index')->name('oferta.index');                                           //Oferta index

Route::get('nueva','OfertaController@create')->name('oferta.create');                                         //Oferta form 
    

Route::get('oferta_detalles/{id}', 'OfertaController@show')->name('oferta.show');                      //Oferta detalles

Route::get('categoria/{id}', 'CategoriaController@show')->name('categoria.show');
/* Route::get('oferta/{id}/editar', function ($id) {                       //Oferta editar
    return 'Aquí podremos editar la oferta: '.$id;
})->name('oferta.edit'); */


Route::post('ofertas', 'OfertaController@store');                    //Oferta añadir

Route::get('usuario_detalles/{id}',function($id) {//Usuario detalles
    return view('Usuarios.mostrarUsuario');
})->name('usuario.show');

Route::get('usuario/{id}/editar', function ($id) {//Usuario editar
    return 'Aquí podremos editar el usuario: '.$id;
})->name('usuario.edit');

Route::get('wishlist', function() {
    return view('Wishlist.wishlist');
})->name('wishlist.show');