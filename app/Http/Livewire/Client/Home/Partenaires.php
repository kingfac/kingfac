<?php

namespace App\Http\Livewire\Client\Home;

use App\Models\partenaire;
use Livewire\Component;

class Partenaires extends Component
{
    public $partenaires;
    public function render()
    {
        $this->partenaires = partenaire::all();
        return view('livewire.client.home.partenaires');
    }
}
