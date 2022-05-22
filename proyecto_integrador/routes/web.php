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

<<<<<<< HEAD
//Route::get('Campinterias/datatable', [CampinteriaController::class,'datatable']);
=======
>>>>>>> db1f63914e6a2f4e1e348d0f1ba4c5b07eb94a39
Route::get('/', function () {
    return view('welcome');
});
