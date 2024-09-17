<?php

use App\Livewire\Home;
use App\Livewire\News;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);

Route::get('/nieuws', News::class);
