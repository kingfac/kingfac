<?php

namespace App\Http\Livewire\Client\Home;

use App\Models\temoignage;
use Livewire\Component;

class Temoignages extends Component
{
    public $temoignages;
    public function render()
    {
        $this->temoignages = temoignage::all();
        return view('livewire.client.home.temoignages');
    }
}
