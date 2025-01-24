<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $userName="Seav Seyla";
    public function render()
    {
        return view('livewire.navbar');
    }
}
