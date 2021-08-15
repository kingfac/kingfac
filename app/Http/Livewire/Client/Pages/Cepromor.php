<?php

namespace App\Http\Livewire\Client\Pages;

use App\Models\ceproInfo;
use App\Models\infoHeader;
use Livewire\Component;

class Cepromor extends Component
{
    public $infos;
    public $headers;
    public function render()
    {
        $this->headers = infoHeader::all();
        $this->infos = ceproInfo::all();
        return view('livewire.client.pages.cepromor');
    }
}
