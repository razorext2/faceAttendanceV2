<?php

namespace App\View\Components\Landing;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonPrimary extends Component
{
  public $id;
  public $type;

  public function __construct($id = null, $type = null)
  {
    $this->id = $id;
    $this->type = $type;
  }

  public function render(): View|Closure|string
  {
    return view('components.landing.button-primary');
  }
}
