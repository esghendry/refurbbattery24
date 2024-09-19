<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/nieuws', [NewsController::class, 'index'])->name('nieuws');

Route::get('/contact', fn () => view('contact'))->name('contact');

Route::get('/route', function () {
    return response()->file('assets/documents/RefurbBattery_Routebeschrijving.pdf');
});

Route::get('/productieproces', fn () => null)->name('productieproces');
Route::get('/toepassingen', fn () => null)->name('toepassingen');
Route::get('/slimme-data', fn () => null)->name('slimme-data');
Route::get('/over-ons', fn () => null)->name('over-ons');
Route::get('/werken-bij', fn () => null)->name('werken-bij');
