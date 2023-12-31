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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/verify', function () {
    return view('auth.verify');
})->name('verify');
Route::post('/verify', [App\Http\Controllers\Auth\RegisterController::class, 'verify'])->name('verify');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verifiedphone');

