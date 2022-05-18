<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;

//nuevo comentario 
Route :: resources([
'articulos'=> ArticuloController :: class,
]);

Route::get('/', function () {
    return view('welcome');
});
