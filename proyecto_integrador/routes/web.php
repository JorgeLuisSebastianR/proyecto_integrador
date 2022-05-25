<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\CampinteriaController;
use App\Http\Controllers\CustomerController;


Route :: resources([
'articulos'=> ArticuloController :: class,
]);

Route::resources([
    'campinterias' => CampinteriaController::class,
    'customers' => CustomerController::class,
]);

//Route::get('Campinterias/datatable', [CampinteriaController::class,'datatable']);
Route::get('/', function () {
    return view('welcome');
});

//Route::resource('campinterias', 'CampinteriaController');
// Route::get('campinterias-pdf', ['CampinteriaController@exportToPDF'])->name('campinterias-pdf');
Route::get('campinteria-pdf', [CampinteriaController::class, 'exportToPDF'])->name('campinteria-pdf');

// Route::get('customers-pdf', ['CustomerController@exportToPDF'])->name('customers.pdf');
