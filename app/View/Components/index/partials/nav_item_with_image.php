<?php

namespace App\View\Components\index\partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class nav_item_with_image extends Component
{

    public string $section;
    public string $imageRoute;
    public string $imageHeight;

    /**
     * Create a new component instance.
     */
    public function __construct($section,$imageRoute,$imageHeight)
    {
        $this->section     = $section;
        $this->imageRoute  = $imageRoute;
        $this->imageHeight = $imageHeight;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.index.partials.nav_item_with_image');
    }
}
