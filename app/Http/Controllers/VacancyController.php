<?php

namespace App\Http\Controllers;

use App\Enums\ArticleStatus;
use App\Models\Vacancy;

class VacancyController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::query()
            ->where('published_at', '<=', now())
            ->where('status', 'published')
            ->orderBy('published_at', 'desc')->get();

        return view('vacancy.index', [
            'user' => contactSettings()->vacancyUser(),
            'vacancies' => $vacancies,
        ]);
    }

    public function show(Vacancy $vacancy)
    {
        if (! in_array($vacancy->status, [ArticleStatus::PUBLISHED, ArticleStatus::PREVIEW])) {
            return redirect()->route('vacancy.index');
        }

        return view('vacancy.show', [
            'vacancy' => $vacancy,
        ]);
    }
}
