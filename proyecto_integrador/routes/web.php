<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\CampinteriaController;
use App\Http\Controllers\CustomerController;
<<<<<<< HEAD
use App\Http\Controllers\HerramientaController;
=======

>>>>>>> 7232fe671b38c1a7cbff62098702cb057695512c

Route :: resources([
'articulos'=> ArticuloController :: class,
]);

Route::resources([
    'campinterias' => CampinteriaController::class,
    'customers' => CustomerController::class,
    'herramientas' => HerramientaController::class,
]);

//Route::get('Campinterias/datatable', [CampinteriaController::class,'datatable']);
Route::get('/', function () {
    return view('welcome');
});

//Route::resource('campinterias', 'CampinteriaController');
<<<<<<< HEAD
Route::get('campinterias-pdf', 'CampinteriaController@exportToPDF')->name('campinterias.pdf');
Route::get('customers-pdf', 'CustomerController@exportToPDF')->name('customers.pdf');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
// Route::get('campinterias-pdf', ['CampinteriaController@exportToPDF'])->name('campinterias-pdf');
Route::get('campinteria-pdf', [CampinteriaController::class, 'exportToPDF'])->name('campinteria-pdf');

// Route::get('customers-pdf', ['CustomerController@exportToPDF'])->name('customers.pdf');
>>>>>>> 7232fe671b38c1a7cbff62098702cb057695512c
