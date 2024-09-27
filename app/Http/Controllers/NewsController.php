<?php

namespace App\Http\Controllers;

use App\Models\Article;

class NewsController extends Controller
{
    public function index()
    {
        $articles = Article::query()
            ->where('published_at', '<=', now())
            ->where('is_listed', true)
            ->orderBy('published_at', 'desc')->get();

        return view('article.index', [
            'articles' => $articles,
        ]);
    }

    public function show(Article $article)
    {
        return view('article.slug', [
            'article' => $article,
        ]);
    }
}
