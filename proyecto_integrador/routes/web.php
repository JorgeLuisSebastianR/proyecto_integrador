<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\MaderaController;
use App\Http\Controllers\CampinteriaController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HerramientaController;


Route::resources([
    'campinterias' => CampinteriaController::class,
    'customers' => CustomerController::class,
    'articulos'=> ArticuloController :: class,
    'maderas'=> MaderaController :: class,
    'herramientas'=> HerramientaController :: class,
]);

Route::get('/', function () {
    return view('welcome');
});
/*crear una ruta*/
/*paso 2
Route::get('campinteria/pdf', [App\Http\Controllers\CampinteriaController::class, 'pdf'])->name('campinteria.pdf');
/*fin paso 2]*/

//Route::resource('campinterias', 'CampinteriaController');
//Route::get('campinterias-pdf', 'CampinteriaController@exportToPDF')->name('campinterias.pdf');
//Route::get('customers-pdf', 'CustomerController@exportToPDF')->name('customers.pdf');


// Route::get('campinterias-pdf', ['CampinteriaController@exportToPDF'])->name('campinterias-pdf');
Route::get('campinteria-pdf', [CampinteriaController::class, 'exportToPDF'])->name('campinteria-pdf');
//Route::get('/campinteria/pdf', [CampinteriaController::class, 'exportToPDF'])->name('campinteria-pdf');




//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
