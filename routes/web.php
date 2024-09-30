<?php

use App\Http\Controllers\NewsController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome', [
    'articles' => Article::query()->where('published_at', '<=', now())->orderBy('published_at', 'desc')->limit(3)->get(),
]))->name('home');

Route::get('/hendry', function () {

    try {
        \DB::connection()->getPDO();
        return response('hendry-' . \DB::connection()->getDatabaseName());
    } catch (\Exception $e) {
        abort(500);
    }

});

Route::get('/nieuws', [NewsController::class, 'index'])->name('nieuws');
Route::get('/nieuws/{article:slug}', [NewsController::class, 'show'])->name('nieuws.show');

Route::get('/contact', fn() => view('contact'))->name('contact');

Route::get('/route', function () {
    return response()->file('assets/documents/RefurbBattery_Routebeschrijving.pdf');
});

Route::get('/productieproces', fn() => view('productieproces'))->name('productieproces');
Route::get('/toepassingen', fn() => view('toepassingen', [
    'articles' => Article::query()->whereIn('slug', ['dutch-kiest-duurzaam-energieopslagsysteem-refurb-battery', 'bam-installeert-twee-energieopslagsystemen', 'accell-group-werkt-samen-met-refurb-battery'])->get(),
]))->name('toepassingen');
Route::get('/slimme-data', fn() => view('slimme-data'))->name('slimme-data');
Route::get('/over-ons', fn() => view('over-ons', [
    'articles' => Article::query()->whereIn('slug', ['refurb-battery-wint-rdi', 'refurb-battery-behaalt-de-eerste-plaats', 'hoe-we-samenwerken-met-stibat-services-om-batterijen-een-tweede-leven-te-geven'])->get(),
]))->name('over-ons');
Route::get('/werken-bij', fn() => view('werken-bij'))->name('werken-bij');

Route::get('/privacy-and-cookies', fn() => null)->name('privacy-and-cookies');

/**
 * TEMPORARY
 */
Route::get('/werken-bij/product-specialist-battery-pack-designer', fn() => view('werken-bij.product-specialist-battery-pack-designer'));
Route::get('/werken-bij/quality-process-engineer-manufacturing', fn() => view('werken-bij.quality-process-engineer-manufacturing'));
Route::get('/werken-bij/technical-sales-manager-energieopslagsystemen-eos', fn() => view('werken-bij.technical-sales-manager-energieopslagsystemen-eos'));

// Redirect old routes to new ones
Route::redirect('/nl/contact', '/contact', 301);
Route::redirect('/nl', '/', 301);
Route::redirect('/nl/batterij-oplossingen', '/toepassingen', 301);
Route::redirect('/nl/impact-maken', '/over-ons', 301);
Route::redirect('/nl/ewaste-oplossingen', '/productieproces', 301);
Route::redirect('/nl/over-ons', '/over-ons', 301);
Route::redirect('/nl/offerte', '/contact', 301);
Route::redirect('/nl/privacy-en-cookies', '/privacy-and-cookies', 301);
Route::redirect('/nl/nieuws', '/nieuws', 301);
Route::redirect('/battery-solutions', '/toepassingen', 301);
Route::redirect('/making-impact', '/over-ons', 301);
Route::redirect('/ewaste-solutions', '/productieproces', 301);
Route::redirect('/about-us', '/over-ons', 301);
Route::redirect('/quote', '/contact', 301);
Route::redirect('/privacy-and-cookies', '/privacy-and-cookies', 301);
Route::redirect('/join-us', '/werken-bij', 301);
Route::redirect('/newsroom', '/nieuws', 301);

Route::get('/nl/nieuws/{slug}', function ($slug) {
    return redirect()->route('nieuws', [], 301);
});
Route::get('/news/{slug}', function ($slug) {
    return redirect()->route('nieuws', [], 301);
});

Route::get('/nl/join-us/{slug}', function ($slug) {
    return redirect()->route('werken-bij', [], 301);
});

Route::get('/join-us/{slug}', function ($slug) {
    return redirect()->route('werken-bij', [], 301);
});
