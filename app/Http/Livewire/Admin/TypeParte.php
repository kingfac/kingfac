<?php

namespace App\Http\Livewire\Admin;

use App\Models\typePartenaire;
use Livewire\Component;

class TypeParte extends Component
{
    public $types;
    public $selectedId;
    public $lib;

    public function render()
    {
        $this->types = typePartenaire::all();
        return view('livewire.admin.type-parte');
    }

    public function resetFields(){
        $this->selectedId = 0;
        $this->lib = '';
    }

    public function store(){
        $validatetypePartenaire = $this->validate([
            'lib'=>'required',
        ]);
        
        $record = typePartenaire::create($validatetypePartenaire);
        session()->flash('message', 'typePartenaire  enregistré avec succès');
        $this->emit('Type');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();
    }

    public function charger($record){
        $this->selectedId = $record['id'];
        $this->lib = $record['lib'];
    }

    public function update(){
        $validatetypePartenaire = $this->validate([
            'lib'=>'required'
        ]);

        $record = typePartenaire::find($this->selectedId);
        $record->update($validatetypePartenaire);

        /* update image file */

        session()->flash('message', 'typePartenaire  modifié avec succès');
        $this->emit('Type');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function delete(){
        /* $validatetypePartenaire = $this->validate(['']) */
        $record = typePartenaire::find($this->selectedId);
        $record->delete($validatetypePartenaire);

        session()->flash('message', 'typePartenaire  modifié avec succès');
        $this->emit('Type');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }
}
