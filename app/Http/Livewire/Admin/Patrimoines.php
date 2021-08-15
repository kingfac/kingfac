<?php

namespace App\Http\Livewire\Admin;

use App\Models\patrimoine;
use App\Models\typePatrimoine;

use Livewire\Component;

class Patrimoines extends Component
{
    public $patrimoines;
    public $types;
    public $patri_id;
    public $selectedId;
    public $lib="";
    public $qte="";
    public $nature="";

    protected $listeners = ['Type'=>'$refresh'];

    public function render()
    {
        $this->patrimoines = patrimoine::all();
        $this->types = typePatrimoine::all();
        return view('livewire.admin.patrimoines');
    }
    public function resetFields(){
        $this->selectedId = 0;
        $this->lib = '';
        $this->qte = 0;
        $this->nature = '';
        $this->patri_id = 0;
    }

    public function store(){
        $validatepatrimoine = $this->validate([
            'lib'=>'required',
            'qte'=>'required',
            'nature'=>'required',
            'patri_id'=>'required'
        ]);
        
        $record = patrimoine::create($validatepatrimoine);
        session()->flash('message', 'patrimoine  enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();
    }

    public function charger($record){
        $this->selectedId = $record['id'];
        $this->lib = $record['lib'];
        $this->qte = $record['qte'];
        $this->nature = $record['nature'];
        $this->patri_id = $record['patri_id'];
    }


    public function update(){
        $validatepatrimoine = $this->validate([
            'lib'=>'required',
            'qte'=>'required',
            'nature'=>'required',
            'patri_id'=>'required'
        ]);

        $record = patrimoine::find($this->selectedId);
        $record->update($validatepatrimoine);

        /* update image file */

        session()->flash('message', 'patrimoine  modifié avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function delete(){
        /* $validatepatrimoine = $this->validate(['']) */
        $record = patrimoine::find($this->selectedId);
        $record->delete($validatepatrimoine);

        session()->flash('message', 'patrimoine  modifié avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }
}
