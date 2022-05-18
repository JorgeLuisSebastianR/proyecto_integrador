<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;

<<<<<<< HEAD
//nuevo comentario 
Route :: resources([
'articulos'=> ArticuloController :: class,
]);
=======
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
>>>>>>> b673127b1c4072ebde5fc4850af1b9f6042a3efa

Route::get('/', function () {
    return view('welcome');
});
