<?php

namespace App\Http\Livewire\Client\Pages;

use App\Models\activite;
use App\Models\gallerie;
use App\Models\domaine;
use Livewire\Component;

class Activites extends Component
{
    public $activites;
    public $galleries;
    public $domaines;
    public $domaine_id;
    public $_gallerie;

    public function mount($id){
        $this->domaines = domaine::find($id);
        $this->activites = activite::all()->where('domaine_id', $id);
        $this->domaine_id = $id;
        /* dd($this->activites); */
    }
    public function render()
    {
        $this->galleries = gallerie::all();
        $galler = function($id){
            return count(gallerie::all()->where('activite_id', $id));
        };
        return view('livewire.client.pages.activites', ['galler' => $galler]);
    }

    public function galer($id){
        return count(gallerie::all()->where('activite_id', $id));
    }
}
