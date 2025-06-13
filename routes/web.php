<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/chi-sono', function () {
    $services = ['Accorciare Camicia', 'Salutare', 'Sfamare i gatti', 'Rasare i cani'];
    return view('about', ['services' => $services]);
});
Route::get('/contatti', function () {
    return view('contact');
});
