<?php

use App\Http\Controllers\clintController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
Route::get('/a', [HomeController::class, 'welcome']);
Route::get('/start', [HomeController::class, 'start']);
Route::get('/profile', [clintController::class, 'profile']);
Route::get('/review', [HomeController::class, 'review']);
Route::get('/location', [HomeController::class, 'location']);



// Login
Route::get('/login', [HomeController::class, 'login']);
Route::post('/login_form',[HomeController::class, 'login_form']);
Route::get('/delivery_info', [HomeController::class, 'delivery_info']);

Route::get('/About', [HomeController::class, 'login']);
Route::get('/recever', [HomeController::class, 'recever']);
// Route::get('/registration', [HomeController::class, 'register']);

// route
Route::get('/register', [HomeController::class, 'register']);
Route::post('/register_form', [HomeController::class, 'register_form']);
Route::post('/delivery_form', [HomeController::class, 'delivery_form']);
Route::get('/show', [HomeController::class, 'show']);

// route for calculetor
Route::get('/delivery_calculator', [HomeController::class, 'delivery_calculator']);
Route::post('/calculat_result', [HomeController::class, 'calculat_result']);


// image route for slide image in home page

Route::get('/contact', [HomeController::class, 'contact_us']);
Route::post('/contact', [HomeController::class, 'contact_us']);

// routes/web.php

// Admin

Route::get('/admin', [AdminController::class, 'admin_deshboard']);
Route::get('/chack', [HomeController::class, 'chack']);
