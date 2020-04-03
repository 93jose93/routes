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

Route::resource('pages', 'PageController'); //7 rutas


/*
se puede trabajar de esta forma basica

Route::view('vistas', 'welcome', ['app' => 'hola']);

Route::get('prueba', function () {
    return view('hola');
});

*/
