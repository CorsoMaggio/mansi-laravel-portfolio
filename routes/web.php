<?php


use Illuminate\Support\Facades\Route;

//funzione == metodo
//nome();
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'homepage']);
Route::get('/contatti', [PageController::class, 'contact']);
Route::get('/chi-sono', [PageController::class, 'about']);
Route::get('/dettaglio/{id}', [PageController::class, 'detail']);
Route::post('/invia-email', [PageController::class, 'send']);
