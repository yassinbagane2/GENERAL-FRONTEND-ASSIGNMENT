<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\VerifyCsrfToken;
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

Route::namespace('App\Http\Controllers')->controller(HomeController::class)->group(function() {
    Route::get('/', 'index')->name('home');
    Route::get('testimoniale', 'images')->name('images');
    Route::post('contact', 'store')->withoutMiddleware([VerifyCsrfToken::class])->name('store');
});