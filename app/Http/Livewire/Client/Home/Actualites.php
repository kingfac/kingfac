<?php

namespace App\Http\Livewire\Client\Home;

use App\Models\actualite;
use App\Models\infoHeader;
use App\Models\ceproInfo;

use Livewire\Component;

class Actualites extends Component
{
    public $actualites;
    public $infos;   
    public $ceproInfos; 

    protected $listeners = [
        'Actualite' =>'$refresh',
        'Added' =>'$refresh'
    ];
    public function render()
    {
        $this->actualites = actualite::all();
        $this->infos = infoHeader::all();
        $this->ceproInfos = ceproInfo::all();
        return view('livewire.client.home.actualites');
    }
}
