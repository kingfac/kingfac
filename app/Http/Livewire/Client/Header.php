<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class Header extends Component
{
    public $slideCount = 0;
    public function render()
    {
        return view('livewire.client.header');
    }
}
