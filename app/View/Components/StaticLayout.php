<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StaticLayout extends Component
{
   public function render()
   {
      return view('layouts.static');
   }
}
