<?php

namespace App\Http\Livewire\Client\Home;

use App\Models\projet;
use Livewire\Component;

class Projets extends Component
{
    public $projets;
    public function render()
    {
        $this->projets = projet::all();
        return view('livewire.client.home.projets');
    }
}
