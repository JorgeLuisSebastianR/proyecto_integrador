<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;

Route :: resources([
'articulos'=> ArticuloController :: class,
]);
use App\Http\Controllers\CampinteriaController;
use App\Http\Controllers\CustomerController;

Route::resources([
    'campinterias' => CampinteriaController::class,
    'customers' => CustomerController::class,
]);

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('campinterias', 'CampinteriaController');
Route::get('campinterias-pdf', 'CampinteriaController@exportToPDF')->name('campinterias.pdf');
