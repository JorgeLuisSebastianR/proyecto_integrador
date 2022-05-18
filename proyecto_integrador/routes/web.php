<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;


//nuevo comentario 
Route :: resources([
'articulos'=> ArticuloController :: class,
]);

//nuevo comentario
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
asdfasdfasdfasdfasd|

*/
//hola compas

Route::get('/', function () {
    return view('welcome');
});
