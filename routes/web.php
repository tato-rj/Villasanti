<?php

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
	$testimonials = (new \App\Testimonials)->all();

    return request()->has('dev') ? view('principal.index', compact('testimonials')) : view('dev');
})->name('home');
