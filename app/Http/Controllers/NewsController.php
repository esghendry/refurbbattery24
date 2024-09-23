<?php

namespace App\Http\Controllers;

use App\Models\Article;

class NewsController extends Controller
{
    public function index()
    {
        $articles = Article::query()
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')->get();

        return view('article.index', [
            'articles' => $articles,
        ]);
    }

    public function slug(Article $article)
    {
        return view('article.slug', [
            'article' => $article,
        ]);
    }
}
