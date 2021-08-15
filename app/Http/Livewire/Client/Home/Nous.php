<?php

namespace App\Http\Livewire\Client\Home;

use App\Models\ceproInfo;
use Livewire\Component;

class Nous extends Component
{
    public $ceproInfos;
    protected $listeners = [
        'Updated' => '$refresh'
    ];
    
    public function render()
    {
        $this->ceproInfos = ceproInfo::all();
        return view('livewire.client.home.nous');
    }
}
