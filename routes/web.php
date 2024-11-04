<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('tampilan1');
// });

// Route::get('/signup', function () {
//     return view('signup');
// });

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/signup', [HomeController::class, 'signup'])->name('signup');
Route::get('/about', [HomeController::class, 'about'])->name('about');