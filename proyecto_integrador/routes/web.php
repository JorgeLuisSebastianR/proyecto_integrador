<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampinteriaController;

//hola compas_1
Route::resources([
    'campinterias' => CampinteriaController::class,
]);
Route::get('Campinterias/datatable', [CampinteriaController::class,'datatable']);
Route::get('/', function () {
    return view('welcome');
});
