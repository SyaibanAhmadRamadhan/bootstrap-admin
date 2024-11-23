<?php

namespace App\View\Components\Table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButton extends Component
{
    public $viewRoute;
    public $deleteRoute;
    public $deletePreview;

    /**
     * Create a new component instance.
     */
    public function __construct($viewRoute = null, $deleteRoute = null, $deletePreview = null)
    {
        $this->viewRoute = $viewRoute;
        $this->deleteRoute = $deleteRoute;
        $this->deletePreview = $deletePreview;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.action-button');
    }
}
