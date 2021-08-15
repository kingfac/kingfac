<?php

namespace App\Http\Livewire\Client\Pages;

use Livewire\Component;
use App\Models\bank;

class Dons extends Component
{
    public $banks;
    public function render()
    {
        $this->banks = bank::all();
        return view('livewire.client.pages.dons');
    }
}
