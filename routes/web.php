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

Route::get('/', 'App\Http\Controller\StaticController@home')->name('home');

Route::get('/trips', 'App\Http\Controller\StaticController@trips')->name('trips');

Route::get('/trip/{id}', 'App\Http\Controller\StaticController@trip')->name('trip');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
