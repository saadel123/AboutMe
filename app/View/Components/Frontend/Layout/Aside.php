<?php

namespace App\View\Components\Frontend\layout;

use App\Models\Setting;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Aside extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $settings = Setting::first();
        return view('components.frontend.layout.aside', [
            'settings' => $settings
        ]);
    }
}
