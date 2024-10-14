<?php

namespace App\Http\Controllers;

use App\Enums\ArticleStatus;
use App\Models\Article;

class NewsController extends Controller
{
    public function index()
    {
        $articles = Article::query()
            ->where('published_at', '<=', now())
            ->where('status', 'published')
            ->where('is_listed', true)
            ->orderBy('published_at', 'desc')->get();

        return view('article.index', [
            'articles' => $articles,
        ]);
    }

    public function show(Article $article)
    {
        if (! in_array($article->status, [ArticleStatus::PUBLISHED, ArticleStatus::PREVIEW])) {
            return redirect()->route('news.index');
        }

        return view('article.show', [
            'article' => $article,
        ]);
    }
}
