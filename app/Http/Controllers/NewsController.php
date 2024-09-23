<?php

namespace App\Http\Controllers;

use App\Models\Article;

class NewsController extends Controller
{
    public function index()
    {
        $articles = Article::query()
            ->where('published_at', '<=', now())

        //START:dirty fix for now
            ->where('slug', '!=', 'refurb-battery-wint-rdi')
            ->where('slug', '!=', 'refurb-battery-behaalt-de-eerste-plaats')
            ->where('slug', '!=', 'refurb-battery-is-officieel-begonnen-met-de-productie')
        //END:dirty fix for now

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
