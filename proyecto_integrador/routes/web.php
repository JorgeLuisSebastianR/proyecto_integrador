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
use App\Http\Controllers\PedidoArticuloController;


Route::resources([
    'sucursals' => SucursalController::class,
    'customers' => CustomerController::class,
    'articulos'=> ArticuloController :: class,
    'maderas'=> MaderaController :: class,
    'herramientas'=> HerramientaController :: class,
    'pedidos' => PedidoController :: class,
    'modulos' => ModuloController :: class,
    'pedido_articulos' => PedidoArticuloController :: class,
]);
// transforasdfamasdfadf

Route::get('/', function () {
    return view('welcome');
});

Route::get('campinteria-pdf', [CampinteriaController::class, 'exportToPDF'])->name('campinteria-pdf');
Route::get('exportToPDFCustomers', [CustomerController::class, 'exportToPDFCustomers'])->name('exportToPDFCustomers');
Route::get('exportToPDFArticulos', [ArticuloController::class, 'exportToPDFArticulos'])->name('exportToPDFArticulos');
Route::get('exportToPDFMaderas', [MaderaController::class, 'exportToPDFMaderas'])->name('exportToPDFMaderas');
Route::get('exportToPDFHerramientas', [HerramientaController::class, 'exportToPDFHerramientas'])->name('exportToPDFHerramientas');
