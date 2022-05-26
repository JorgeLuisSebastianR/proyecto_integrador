<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\MaderaController;
use App\Http\Controllers\CampinteriaController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HerramientaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ModuloController;


Route::resources([
    'campinterias' => CampinteriaController::class,
    'customers' => CustomerController::class,
    'articulos'=> ArticuloController :: class,
    'maderas'=> MaderaController :: class,
    'herramientas'=> HerramientaController :: class,
    'pedidos' => PedidoController :: class,
    'modulos' => ModuloController :: class,
]);
// transform

Route::get('/', function () {
    return view('welcome');
});

Route::get('campinteria-pdf', [CampinteriaController::class, 'exportToPDF'])->name('campinteria-pdf');