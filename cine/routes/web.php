<?php

use App\Http\Controllers\PeliculaController;
use Illuminate\Support\Facades\Route;

// Importamos los controladores
use App\Http\Controllers\LibroController;
use App\Http\Controllers\EditorialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // Aqui le ponemos la ruta por defecto
    return view('menu');
});

// Endpoint-Ruta
// Ya contienen los metodos, show, create, destroy
// Route::resource('libros', LibroController::class);
// Route::resource('editoriales', EditorialController::class);

Route::resource('peliculas', PeliculaController::class);