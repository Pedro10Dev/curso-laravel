<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/test', function () {
    echo "Esto es un test";
});

Route::get('/test/{id?}', function($id=50) { 
    echo "Esto es un id ".$id;
});

Route::get('/prueba', function () {
    return view('test', ['id' => 20]);
});

Route::get('/prueba2/{name?}', function ($name="anonimo") {
    return view('prueba', ['name'=> $name]);
});

Route::get('/prueba2/{name?}', function ($name="anonimo") {
    return view('prueba', ['name'=> $name]);
})->name('prueba2');