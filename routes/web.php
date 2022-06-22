<?php

use App\Http\Controllers\authController;
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

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('home', [authController::class, 'isUserLoggedIn']);

Route::get('login', [authController::class, 'loginPage']);
Route::post('login', [authController::class, 'doLogin']);



Route::get('register', [authController::class, 'create']);

Route::get('logout', [authController::class, 'logout']);




Route::post('register', [authController::class, 'store']);