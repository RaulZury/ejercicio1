<?php

use App\Http\Controllers\UserController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/formulario', function(){
    return view('formulario');
});*/

Route::get('/index', [UserController::class, 'index']);

Route::post('/guardar', [UserController::class, 'store']);

Route::get('/info', [UserController::class, 'info']);

Route::post('/user', [UserController::class, 'show'])->name('show');
