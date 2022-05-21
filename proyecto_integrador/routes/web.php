<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampinteriaController;
use App\Http\Controllers\CustomerController;

//hola compas_1
Route::resources([
    'campinterias' => CampinteriaController::class,
    'customers' => CustomerController::class,
]);
Route::get('Campinterias/datatable', [CampinteriaController::class,'datatable']);
Route::get('/', function () {
    return view('welcome');
});
