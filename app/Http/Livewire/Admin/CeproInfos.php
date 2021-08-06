<?php

namespace App\Http\Livewire\Admin;

use App\Models\ceproInfo;
use Livewire\Component;

class CeproInfos extends Component
{
    public $info;
    public $lib;
    public $selectedId;
    public $infos;

    public function render()
    {
        $this->infos = ceproInfo::all();
        return view('livewire.admin.cepro-infos');
    }

    function resetFields(){
        $this->selectedId  = 0;
        $this->lib  = '';
        $this->info  = '';
    }

    function store(){
        //$this->info = html_entity_decode($this->info);
        $validatedData = $this->validate([
           'lib' => 'required',
           'info' => 'required'
       ]);      
       
       //dd($validatedData);
       ceproInfo::create($validatedData);
       session()->flash('message', 'Info enregistré avec succès');
       $this->emit('infoAdded');
       //$this->infos = ceproInfo::all();
       $this->resetFields();
    }
    function update(){
        $v = $this->validate([
            'lib' => 'required',
            'selectedId' => 'required',
            'info' => 'required'
        ]);
        //dd($v);
        $record = ceproInfo::find($this->selectedId);
        $record->update([
            'lib' => $this->lib,
            'info' => $this->info
        ]);
        $this->resetFields();
        //$this->infos = ceproInfo::all();
        session()->flash('message', 'Info modifié avec succès');
        $this->emit('infoUpdated');
    }
    function charger($ligne){
        $this->selectedId = $ligne["id"];
        $this->lib = $ligne["lib"];
        $this->info = $ligne["info"];
    }
}
