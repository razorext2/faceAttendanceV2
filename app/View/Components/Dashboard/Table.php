<?php

namespace App\View\Components\Dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    public $id;
    public $tablename;
    /**
     * Create a new component instance.
     */
    public function __construct($id, $tablename = [])
    {
        $this->id = $id;
        $this->tablename = $tablename;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.table');
    }
}
