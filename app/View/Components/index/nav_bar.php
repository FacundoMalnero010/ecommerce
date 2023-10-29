<?php

namespace App\View\Components\index;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class nav_bar extends Component
{

    public string $idNavItemsContainer;

    /**
     * Create a new component instance.
     */
    public function __construct($idNavItemsContainer)
    {
        $this->idNavItemsContainer = $idNavItemsContainer;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.index.nav_bar');
    }
}
