<?php

namespace App\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public $cartCount = 0;
    public function render()
    {
        return view('livewire.navigation');
    }
}
