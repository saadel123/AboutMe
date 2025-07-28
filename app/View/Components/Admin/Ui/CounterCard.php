<?php

namespace App\View\Components\Admin\Ui;

use Illuminate\View\Component;

class CounterCard extends Component
{
    public $title, $count, $icon, $route;

    public function __construct($title, $count, $icon, $route)
    {
        $this->title = $title;
        $this->count = $count;
        $this->icon = $icon;
        $this->route = $route;
    }

    public function render()
    {
        return view('components.admin.ui.counter-card');
    }
}
