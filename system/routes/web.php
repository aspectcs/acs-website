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
    return view('home');
})->name('home');


Route::get('services', function () {
    return view('services');
})->name('services');

Route::get('discovery-page', function () {
    return view('discovery-page');
})->name('discovery-page');

Route::get('contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::name('about.')->group(function () {

    Route::get('our-stories', function () {
        return view('about.our-stories');
    })->name('our-stories');

    Route::get('core-values', function () {
        return view('about.core-values');
    })->name('core-values');

    Route::get('team', function () {
        return view('about.team');
    })->name('team');


    Route::get('partnerships', function () {
        return view('about.partnerships');
    })->name('partnerships');

});
