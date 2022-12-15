<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductoController;
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

Route::get('/', [Controller::class, 'login']);
Route::post('/login', [Controller::class, 'sesionlogin']);
Route::get('/products', [ProductoController::class,'show']);
Route::get('/signup', [Controller::class,'signup']);
Route::post('/register', [Controller::class,'register']);
Route::get('/forgot', [Controller::class,'forgot']);
