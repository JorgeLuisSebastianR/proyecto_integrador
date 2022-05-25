<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\MaderaController;
=======
use App\Http\Controllers\CampinteriaController;
use App\Http\Controllers\CustomerController;
<<<<<<< HEAD
use App\Http\Controllers\HerramientaController;
=======
>>>>>>> 0879ff8b519f6b6e8328e7ff1847ff5baf1256c2

>>>>>>> 7232fe671b38c1a7cbff62098702cb057695512c

Route :: resources([

]);

Route::resources([
    'campinterias' => CampinteriaController::class,
    'customers' => CustomerController::class,
<<<<<<< HEAD
    'articulos'=> ArticuloController :: class,
    'madera'=> MaderaController :: class,
=======
    'herramientas' => HerramientaController::class,
>>>>>>> 0879ff8b519f6b6e8328e7ff1847ff5baf1256c2
]);







//Route::get('Campinterias/datatable', [CampinteriaController::class,'datatable']);
Route::get('/', function () {
    return view('welcome');
});

//Route::resource('campinterias', 'CampinteriaController');
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 0879ff8b519f6b6e8328e7ff1847ff5baf1256c2
Route::get('campinterias-pdf', 'CampinteriaController@exportToPDF')->name('campinterias.pdf');
Route::get('customers-pdf', 'CustomerController@exportToPDF')->name('customers.pdf');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<<<<<<< HEAD
=======
=======
// Route::get('campinterias-pdf', ['CampinteriaController@exportToPDF'])->name('campinterias-pdf');
Route::get('campinteria-pdf', [CampinteriaController::class, 'exportToPDF'])->name('campinteria-pdf');

// Route::get('customers-pdf', ['CustomerController@exportToPDF'])->name('customers.pdf');
>>>>>>> 7232fe671b38c1a7cbff62098702cb057695512c
>>>>>>> 0879ff8b519f6b6e8328e7ff1847ff5baf1256c2
