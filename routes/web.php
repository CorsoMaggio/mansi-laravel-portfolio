<?php

use Illuminate\Support\Facades\Route;

//funzione == metodo
//nome();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/chi-sono', function () {
    $services = [
        [ //id numero univico e intero
            'id' => 1,
            'title' => 'Siti Web',
            'description' => 'Realizzo siti web',
        ],
        [
            'id' => 2,
            'title' => 'App Web',
            'description' => 'Realizzo App web'
        ],
        [
            'id' => 3,
            'title' => 'Marketing',
            'description' => 'Realizzo Marketing'
        ],
    ];


    return view('about', ['services' => $services]);
});
Route::get('/contatti', function () {
    return view('contact');
});
