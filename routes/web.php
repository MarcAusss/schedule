<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/asdf', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('dashb');
});

Auth::routes();

route::get('/redirect', [HomeController::class, 'redirect']);

Route::resource('event', App\Http\Controllers\EventController::class);
Route::resource('date', App\Http\Controllers\DateController::class);

Route::get('/dashb', [App\Http\Controllers\HomeController::class, 'index'])->name('dashb');
