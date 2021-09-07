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

Route::get('dev', function() {
	return view('dev');
})->name('dev');

Route::get('go', function() {
	session(['dev' => true]);

	return redirect(route('principal'));
})->name('dev.go');

Route::get('/', function () {
	$testimonials = (new \App\Testimonials)->all();
return $testimonials;
    return view('principal.index', compact('testimonials'));
})->name('principal');

Route::prefix('nossas-praticas')->name('praticas.')->group(function() {
	
	Route::get('processos-judiciais', function() {
		return view('praticas.processos.index');
	})->name('processos');

	Route::get('assessoria-empresarial', function() {
		return view('praticas.assessoria.index');
	})->name('assessoria');

	Route::get('negocios', function() {
		return view('praticas.negocios.index');
	})->name('negocios');

});

	Route::get('fundador', function() {
		return view('fundador.index');
	})->name('fundador');