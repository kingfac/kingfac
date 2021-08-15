<?php

namespace App\Http\Livewire\Admin;

use App\Models\typePatrimoine;

use Livewire\Component;

class TypePatri extends Component
{
    
    public $types;
    public $selectedId;
    public $lib;

    protected $listeners = ['jjjj'=>'$refresh'];

    public function render()
    {
        $this->types = typePatrimoine::all();
        return view('livewire.admin.type-patri');
    }

    public function resetFields(){
        $this->selectedId = 0;
        $this->lib = '';
    }

    public function store(){
        $validatetypePatrimoine = $this->validate([
            'lib'=>'required',
        ]);
        
        $record = typePatrimoine::create($validatetypePatrimoine);
        session()->flash('message', 'typePatrimoine  enregistré avec succès');
        $this->emit('Type');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();
    }

    public function charger($record){
        $this->selectedId = $record['id'];
        $this->lib = $record['lib'];
    }

    public function update(){
        $validatetypePatrimoine = $this->validate([
            'lib'=>'required'
        ]);

        $record = typePatrimoine::find($this->selectedId);
        $record->update($validatetypePatrimoine);

        /* update image file */

        session()->flash('message', 'typePatrimoine  modifié avec succès');
        $this->emit('Type');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function delete(){
        /* $validatetypePatrimoine = $this->validate(['']) */
        $record = typePatrimoine::find($this->selectedId);
        $record->delete($validatetypePatrimoine);

        session()->flash('message', 'typePatrimoine  modifié avec succès');
        $this->emit('Type');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }
}
