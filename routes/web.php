<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'articles' => [
            [
                'title' => 'Title 1 very long title to test article title in a news item component',
                'url' => 'title-1',
                'img' => 'assets/images/articles/article-title-1.png',
            ],
            [
                'title' => 'Title 1 very long title to test article title in a news item component',
                'url' => 'title-1',
                'img' => 'assets/images/articles/article-title-1.png',
            ],
            [
                'title' => 'Title 1 very long title to test article title in a news item component',
                'url' => 'title-1',
                'img' => 'assets/images/articles/article-title-1.png',
            ],
        ],
    ]);
})->name('home');

Route::get('/nieuws', [NewsController::class, 'index'])->name('nieuws');

Route::get('/contact', fn () => view('contact'))->name('contact');

Route::get('/route', function () {
    return response()->file('assets/documents/RefurbBattery_Routebeschrijving.pdf');
});

Route::get('/productieproces', fn () => view('productieproces'))->name('productieproces');
Route::get('/toepassingen', fn () => null)->name('toepassingen');
Route::get('/slimme-data', fn () => null)->name('slimme-data');
Route::get('/over-ons', fn () => null)->name('over-ons');
Route::get('/werken-bij', fn () => null)->name('werken-bij');
