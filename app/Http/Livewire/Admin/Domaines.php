<?php

namespace App\Http\Livewire\Admin;

use App\Models\domaine;
use Livewire\Component;

class Domaines extends Component
{
    public $domaines;
    public $selectedId;
    public $lib;
    public $descri;
    public $lastId;
    public function render()
    {
        $this->domaines = domaine::all();
        return view('livewire.admin.domaines');
    }
    function resetFields(){
        $this->selectedId  = 0;
        $this->lib  = '';
        $this->descri  = '';
    }

    function store(){
        $validatedData = $this->validate([
           'lib' => 'required',
           'descri' => 'required'
       ]);      
       $data = domaine::create($validatedData);
       $this->lastId = $data->id;
       session()->flash('message', 'domaine enregistré avec succès');
       $this->emit('Added');
       $this->resetFields();

    }
    public function update(){
        //dd($this->selectedId);
        $v = $this->validate([
            'lib' => 'required',
            'selectedId' => 'required',
            'descri' => 'required'
        ]);
        $record = domaine::find($this->selectedId);
        $record->update([
            'lib' => $this->lib,
            'descri' => $this->descri
        ]);
        $this->resetFields();
        session()->flash('message', 'domaine modifié avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
    }

    function delete(){
        $v = $this->validate([
            'lib' => 'required',
            'selectedId' => 'required',
            'descri' => 'required'
        ]);
        $record = domaine::find($this->selectedId);
        $record->delete();
        $this->resetFields();
        session()->flash('message', 'domaine Supprimé avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
    }
    function charger($ligne){
        $this->selectedId = $ligne["id"];
        $this->lib = $ligne["lib"];
        $this->descri = $ligne["descri"];
    }
}
