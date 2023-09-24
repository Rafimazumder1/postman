<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'Home']);
// Login
Route::get('/login', [HomeController::class, 'login']);
Route::post('/login_form',[HomeController::class, 'login_form']);

Route::get('/About', [HomeController::class, 'login']);
Route::get('/recever', [HomeController::class, 'recever']);
// Route::get('/registration', [HomeController::class, 'register']);

// route
Route::get('/register', [HomeController::class, 'register']);
Route::post('/register_form', [HomeController::class, 'register_form']);
