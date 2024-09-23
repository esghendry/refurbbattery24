<?php

use App\Http\Controllers\NewsController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

$testArticles = [
    [
        'title' => 'Title 1 very long title to test article title in a news item component',
        'slug' => 'title-1',
        'image' => 'assets/images/articles/article-title-1.png',
    ],
    [
        'title' => 'Title 1 very long title to test article title in a news item component',
        'slug' => 'title-1',
        'image' => 'assets/images/articles/article-title-1.png',
    ],
    [
        'title' => 'Title 1 very long title to test article title in a news item component',
        'slug' => 'title-1',
        'image' => 'assets/images/articles/article-title-1.png',
    ],
];

Route::get('/', fn () => view('welcome', [
    'articles' => Article::query()->where('published_at', '<=', now())->orderBy('published_at', 'desc')->limit(3)->get(),
]))->name('home');

Route::get('/nieuws', [NewsController::class, 'index'])->name('nieuws');
Route::get('/nieuws/{article:slug}', [NewsController::class, 'slug'])->name('nieuws.show');

Route::get('/contact', fn () => view('contact'))->name('contact');

Route::get('/route', function () {
    return response()->file('assets/documents/RefurbBattery_Routebeschrijving.pdf');
});

Route::get('/productieproces', fn () => view('productieproces'))->name('productieproces');
Route::get('/toepassingen', fn () => view('toepassingen', [
    'articles' => Article::query()->whereIn('slug', ['dutch-kiest-duurzaam-energieopslagsysteem-refurb-battery', 'bam-installeert-twee-energieopslagsystemen', 'accell-group-werkt-samen-met-refurb-battery'])->get(),
]))->name('toepassingen');
Route::get('/slimme-data', fn () => view('slimme-data'))->name('slimme-data');
Route::get('/over-ons', fn () => view('over-ons', [
    'articles' => Article::query()->whereIn('slug', ['refurb-battery-wint-rdi', 'refurb-battery-behaalt-de-eerste-plaats', 'hoe-we-samenwerken-met-stibat-services-om-batterijen-een-tweede-leven-te-geven'])->get(),
]))->name('over-ons');
Route::get('/werken-bij', fn () => view('werken-bij'))->name('werken-bij');

Route::get('/privacy-and-cookies', fn () => null)->name('privacy-and-cookies');

/**
 * TEMPORARY
 */
Route::get('/werken-bij/product-specialist-battery-pack-designer', fn () => view('werken-bij.product-specialist-battery-pack-designer'));
Route::get('/werken-bij/quality-process-engineer-manufacturing', fn () => view('werken-bij.quality-process-engineer-manufacturing'));
Route::get('/werken-bij/technical-sales-manager-energieopslagsystemen-eos', fn () => view('werken-bij.technical-sales-manager-energieopslagsystemen-eos'));
