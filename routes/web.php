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
Route::get('/about', function () {
    return view('abouts.index');
});
Route::get('/services', function () {
    return view('services.index');
});
Route::get('/services-2', function () {
    return view('services.index2');
});
Route::get('/portofolio', function () {
    return view('portofolio.index');
});
Route::get('/portofolio-2', function () {
    return view('portofolio.index2');
});
Route::get('/portofolio-3', function () {
    return view('portofolio.index3');
});
Route::resource('contact', \App\Http\Controllers\ContactyController::class);