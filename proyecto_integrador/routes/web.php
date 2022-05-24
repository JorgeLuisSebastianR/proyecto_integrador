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

//Route::get('Campinterias/datatable', [CampinteriaController::class,'datatable']);
Route::get('/', function () {
    return view('welcome');
});
