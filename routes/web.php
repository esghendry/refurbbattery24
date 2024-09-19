<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nieuws', [NewsController::class, 'index']);

Route::get('/contact', fn () => view('contact'));

Route::get('/route', function () {
    return response()->file('assets/documents/RefurbBattery_Routebeschrijving.pdf');
});
