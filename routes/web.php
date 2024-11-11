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


Route::get('/', [HomeController::class, 'home']);


Route::get('/sop', function () {
    return view('Sop');
})->name('sop'); // Opsional: memberikan nama rute untuk digunakan dalam fungsi route() di tautan HTML

Route::get('/login', function () {
    return view('login');
})->name('login'); // Opsional: memberikan nama rute untuk digunakan dalam fungsi route() di tautan HTML
