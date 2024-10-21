<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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


Route::get('/pregunta1', function () {
    return view('preguntas.p1');
});

Route::get('/pregunta2', function () {
    return view('preguntas.p2');
});

Route::get('/pregunta3', function () {
    return view('preguntas.p3');
});

Route::get('/pregunta4', function () {
    return view('preguntas.p4');
});

Route::get('/pregunta5', function () {
    return view('preguntas.p5');
});

Route::get('/pregunta6', function () {
    return view('preguntas.p6');
});

Route::get('/pregunta7', function () {
    return view('preguntas.p7');
});

Route::get('/pregunta8', function () {
    return view('preguntas.p8');
});

Route::get('/pregunta9', function () {
    return view('preguntas.p9');
});

Route::get('/pregunta10', function () {
    return view('preguntas.p10');
});

require __DIR__.'/auth.php';
