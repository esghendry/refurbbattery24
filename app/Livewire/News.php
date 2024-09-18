<?php

namespace App\Livewire;

use Livewire\Component;

class News extends Component
{
    public $newsItems = [
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
    ];

    public function render()
    {
        return view('livewire.news');
    }
}
