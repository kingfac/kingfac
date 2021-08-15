<?php

namespace App\Http\Livewire\Client;

use App\Models\infoHeader;
use Livewire\Component;

class Header extends Component
{
    public $slideCount = 0;
    public $infos;
    public function render()
    {
        $this->infos = infoHeader::all();
        return view('livewire.client.header');
    }
}
