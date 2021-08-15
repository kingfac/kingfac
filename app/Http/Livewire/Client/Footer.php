<?php

namespace App\Http\Livewire\Client;

use App\Models\contacts;
use App\Models\projet;
use App\Models\actualite;
use Livewire\Component;

class Footer extends Component
{
    public $conts;
    public $projets;
    public $actualites;
    public function render()
    {
        $this->conts = contacts::all();
        $this->projets = projet::all();
        $this->actualites = actualite::all();
        return view('livewire.client.footer');
    }
}
