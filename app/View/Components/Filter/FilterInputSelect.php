<?php

namespace App\View\Components\Filter;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FilterInputSelect extends Component
{
    public $id;
    public $name;
    public $options;
    public $defaultOption;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $name, $options = [], $defaultOption = 'Select an option')
    {
        $this->id = $id;
        $this->name = $name;
        $this->options = $options;
        $this->defaultOption = $defaultOption;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.filter.filter-input-select');
    }
}
