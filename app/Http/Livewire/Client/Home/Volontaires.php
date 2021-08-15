<?php

namespace App\Http\Livewire\Client\Home;

use App\Models\volontaire;
use Livewire\Component;

class Volontaires extends Component
{
    public $volontaires;
    public function render()
    {
        $this->volontaires = volontaire::all();
        return view('livewire.client.home.volontaires');
    }
}
