<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiorritmesController;

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
    return view('bio.benvinguda');
});

Route::get('/dades', [BiorritmesController::class, 'mostrarForm'])->name('form');
Route::post('/resultat', [BiorritmesController::class, 'mostraResultats'])->name('result');
Route::get('/report', [BiorritmesController::class, 'mostraReport']) -> name('report');