<?php

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

Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index']);
Route::get('/customer/show/{id}', [App\Http\Controllers\CustomerController::class, 'show']);

Route::get('/artist', [App\Http\Controllers\Artist::class, 'view']);
Route::get('/artist/{id}/album', [App\Http\Controllers\Artist::class, 'artists']);
Route::get('/artist/{id}/album/{albumId}', [App\Http\Controllers\Artist::class, 'albums']);
