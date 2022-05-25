<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\MaderaController;


Route :: resources([

]);
use App\Http\Controllers\CampinteriaController;
use App\Http\Controllers\CustomerController;

Route::resources([
    'campinterias' => CampinteriaController::class,
    'customers' => CustomerController::class,
    'articulos'=> ArticuloController :: class,
    'madera'=> MaderaController :: class,
]);







//Route::get('Campinterias/datatable', [CampinteriaController::class,'datatable']);
Route::get('/', function () {
    return view('welcome');
});

//Route::resource('campinterias', 'CampinteriaController');
Route::get('campinterias-pdf', 'CampinteriaController@exportToPDF')->name('campinterias.pdf');
Route::get('customers-pdf', 'CustomerController@exportToPDF')->name('customers.pdf');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
