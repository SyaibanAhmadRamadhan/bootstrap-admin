<?php

namespace App\View\Components\Form;

use App\Utils\Primitives\Timezone;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectBoxTimezones extends Component
{
    public string $timezone;

    public function __construct(string $timezone)
    {
        $this->timezone = $timezone;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $timezones = Timezone::getTimezones();
        return view('components.form.select-box-timezones', compact(
            'timezones'
        ));
    }
}
