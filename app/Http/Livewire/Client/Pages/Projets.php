<?php

namespace App\Http\Livewire\Client\Pages;

use App\Models\projet;
use App\Models\gallerie;
use Livewire\Component;

class Projets extends Component
{
    public $projets;
    public $galleries;
    public function render()
    {
        $this->projets = projet::all();
        $this->galleries = gallerie::all();
        $galler = function($id){
            return count(gallerie::all()->where('projet_id', $id));
        };
        return view('livewire.client.pages.projets', ['galler'=>$galler]);
    }
    
}
