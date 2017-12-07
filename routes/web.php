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
    return view('welcome');
});



Route::get('/led/', function () {
	$file = fopen('archivo.txt', 'r');
	$data = fread($file, filesize($file));

    return $data;

});

Route::get('/led/{led}', function ($led) {
    $file = fopen('archivo.txt', 'w');
    fwrite($file,(int)$led );
	fclose($file);

});

