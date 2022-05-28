<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\MaderaController;
use App\Http\Controllers\CampinteriaController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HerramientaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ModuloController;


Route::resources([
    ////
    'sucursals' => SucursalController::class,
    'customers' => CustomerController::class,
    'articulos'=> ArticuloController :: class,
    'maderas'=> MaderaController :: class,
    'herramientas'=> HerramientaController :: class,
    'pedidos' => PedidoController :: class,
    'modulos' => ModuloController :: class,
]);
// transforasdfamasdfadf

Route::get('/', function () {
    return view('welcome');
});

Route::get('campinteria-pdf', [CampinteriaController::class, 'exportToPDF'])->name('campinteria-pdf');
Route::get('exportToPDF', [CustomerController::class, 'exportToPDF'])->name('exportToPDF');
Route::get('exportToPDF', [ArticuloController::class, 'exportToPDF'])->name('exportToPDF');
Route::get('exportToPDF', [MaderaController::class, 'exportToPDF'])->name('exportToPDF');
Route::get('exportToPDF', [HerramientaController::class, 'exportToPDF'])->name('exportToPDF');
