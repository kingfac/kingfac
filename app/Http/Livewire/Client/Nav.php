<?php

namespace App\Http\Livewire\Client;

use App\Models\domaine;
use App\Models\ceproInfo;
use Livewire\Component;

class Nav extends Component
{
    public $domaines;
    public $ceproInfos;

    protected $listeners = [
        'Updated' => '$refresh'
    ];
    
    public function render()
    {
        $this->domaines = domaine::all();
        $this->ceproInfos = ceproInfo::all();
        return view('livewire.client.nav');
    }
}
