<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\CampinteriaController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HerramientaController;

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
=======
// Route::get('campinterias-pdf', ['CampinteriaController@exportToPDF'])->name('campinterias-pdf');
Route::get('campinteria-pdf', [CampinteriaController::class, 'exportToPDF'])->name('campinteria-pdf');
//Route::get('/campinteria/pdf', [CampinteriaController::class, 'exportToPDF'])->name('campinteria-pdf');
>>>>>>> 12491896458dba6b8cc17aa763348ff8156eaf5b

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
