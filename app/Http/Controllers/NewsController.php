<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index', [
            'newsItems' => [
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
    }
}
