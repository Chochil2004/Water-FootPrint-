<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CuestionarioController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/addquestion', function () {
    return view('agregar');
});

Route::get('/puntaje', function () {
    return view('puntaje');
});
        
require __DIR__.'/auth.php';

//Seccion 1
Route::get('/usodirecto', [CuestionarioController::class, 'mostrarCuestionario'])->name('usodirecto');
Route::post('/usodirecto', [CuestionarioController::class, 'procesarCuestionario'])->name('cuestionario.submit1');

//Seccion 2
Route::get('/alimentos', [CuestionarioController::class, 'mostrarCuestionario'])->name('alimentos');
Route::post('/alimentos', [CuestionarioController::class, 'procesarCuestionario'])->name('cuestionario.submit2');

//Seccion 3
Route::get('/productosybienes', [CuestionarioController::class, 'mostrarCuestionario'])->name('productosybienes');
Route::post('/productosybienes', [CuestionarioController::class, 'procesarCuestionario'])->name('cuestionario.submit3');

//Seccion 4
Route::get('/transporte', [CuestionarioController::class, 'mostrarCuestionario'])->name('transporte');
Route::post('/transporte', [CuestionarioController::class, 'procesarCuestionario'])->name('cuestionario.submit4');

//Seccion 5
Route::get('/electrodomesticos', [CuestionarioController::class, 'mostrarCuestionario'])->name('electrodomesticos');
Route::post('/electrodomesticos', [CuestionarioController::class, 'procesarCuestionario'])->name('cuestionario.submit5');

//Seccion 6
Route::get('/hogar', [CuestionarioController::class, 'mostrarCuestionario'])->name('hogar');
Route::post('/hogar', [CuestionarioController::class, 'procesarCuestionario'])->name('cuestionario.submit6');

//Seccion 7
Route::get('/energia', [CuestionarioController::class, 'mostrarCuestionario'])->name('energia');
Route::post('/energia', [CuestionarioController::class, 'procesarCuestionario'])->name('cuestionario.submit7');

//Seccion 8
Route::get('/jardineria', [CuestionarioController::class, 'mostrarCuestionario'])->name('jardineria');
Route::post('/jardineria', [CuestionarioController::class, 'procesarCuestionario'])->name('cuestionario.submit8');

//Seccion 9
Route::get('/papel', [CuestionarioController::class, 'mostrarCuestionario'])->name('papel');
Route::post('/papel', [CuestionarioController::class, 'procesarCuestionario'])->name('cuestionario.submit9');

//Seccion 10
Route::get('/transporte', [CuestionarioController::class, 'mostrarCuestionario'])->name('transporte');
Route::post('/transporte', [CuestionarioController::class, 'procesarCuestionario'])->name('cuestionario.submit10');

//Resultado final
Route::post('/resultado', [CuestionarioController::class, 'resultado'])->name('cuestionario.resultado');