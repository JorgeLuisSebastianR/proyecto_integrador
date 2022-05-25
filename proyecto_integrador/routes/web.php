<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\MaderaController;
use App\Http\Controllers\CampinteriaController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HerramientaController;

Route :: resources([

]);

Route::resources([
    'campinterias' => CampinteriaController::class,
    'customers' => CustomerController::class,
    'articulos'=> ArticuloController :: class,
    'maderas'=> MaderaController :: class,
]);


//Route::get('Campinterias/datatable', [CampinteriaController::class,'datatable']);
Route::get('/', function () {
    return view('welcome');
});

//Route::resource('campinterias', 'CampinteriaController');
<<<<<<< HEAD
=======

>>>>>>> 61ab57939fdaf7293e3e521984102e2651152f69
Route::get('campinterias-pdf', 'CampinteriaController@exportToPDF')->name('campinterias.pdf');
Route::get('customers-pdf', 'CustomerController@exportToPDF')->name('customers.pdf');
<<<<<<< HEAD

// Route::get('campinterias-pdf', ['CampinteriaController@exportToPDF'])->name('campinterias-pdf');
Route::get('campinteria-pdf', [CampinteriaController::class, 'exportToPDF'])->name('campinteria-pdf');
//Route::get('/campinteria/pdf', [CampinteriaController::class, 'exportToPDF'])->name('campinteria-pdf');
=======
>>>>>>> 2e9d9d5b423a6c9284ba7b826e6d4f0f397e0b08



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
