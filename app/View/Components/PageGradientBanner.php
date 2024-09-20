<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageGradientBanner extends Component
{
    public $height;

    public $img;

    /**
     * Create a new component instance.
     */
    public function __construct($height = 'md:h-[150px]', $img = null)
    {
        $this->height = $height;
        $this->img = $img;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page-gradient-banner');
    }
}
