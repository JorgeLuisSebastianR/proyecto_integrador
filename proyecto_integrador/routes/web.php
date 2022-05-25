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

//Route::resource('campinterias', 'CampinteriaController');
Route::get('campinterias-pdf', 'CampinteriaController@exportToPDF')->name('campinterias.pdf');
Route::get('customers-pdf', 'CustomerController@exportToPDF')->name('customers.pdf');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
