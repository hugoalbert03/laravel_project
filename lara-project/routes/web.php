<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/teste', [TesteController::class, 'escreverString']);
Route::get('/teste/{nome}', [TesteController::class, 'escreverString']);
Route::get('/reteste', [TesteController::class, 'testarMetodoPrivado']);
Route::get('/alerta', [TesteController::class, 'abrirAlerta']);