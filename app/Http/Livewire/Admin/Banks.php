<?php

namespace App\Http\Livewire\Admin;


use App\Models\bank;
use Livewire\Component;

use Illiminate\Support\Facades\Storage;

use Livewire\WithFileUploads;


class Banks extends Component
{
    use WithFileUploads;
    public $banks;
    public $selectedId;
    public $nom;
    public $bank;
    public $numero;
    public $lastId;
    public $photo;

    public function render() 
    {
        $this->banks = bank::all();
        return view('livewire.admin.banks');
    }

    function resetFields(){
        $this->selectedId  = 0;
        $this->nom  = '';
        $this->numero  = '';
        $this->bank  = '';
        $this->photo = '';
    }

    function store(){
        $validatedData = $this->validate([
           'nom' => 'required',
           'numero' => 'required',
           'bank' => 'required'
       ]);      
       $record = bank::create($validatedData);
       $this->lastId = $record->id;
       $this->validate([
        'photo'=>'required'
    ]);
    $this->photo->storePubliclyAs('public/bank/', $record->id.'.png');
       session()->flash('message', 'bank enregistré avec succès');
       $this->emit('Added');
       $this->resetFields();
       $this->emit('bank');
    }
    public function update(){
        //dd($this->selectedId);
        $v = $this->validate([
            'nom' => 'required',
            'numero' => 'required',
            'selectedId' => 'required',
            'bank' => 'required'
        ]);
        $record = bank::find($this->selectedId);
        $record->update([
            'nom' => $this->nom,
            'numero' => $this->numero,
            'bank' => $this->bank
        ]);

        if(!empty($this->photo)){
            $this->photo->storePubliclyAs('public/bank/', $this->selectedId.'.png');
            $this->emitSelf('imgUpdate');
        }

        $this->resetFields();
        session()->flash('message', 'bank modifié avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
    }

    function delete(){
        $v = $this->validate([
            'selectedId' => 'required',
        ]);
        $record = bank::find($this->selectedId);
        $record->delete();
        Storage::delete('public/bank/'.$this->selectedId.'.png');
        $this->resetFields();
        session()->flash('message', 'bank Supprimé avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
    }
    function charger($ligne){
        $this->selectedId = $ligne["id"];
        $this->nom = $ligne["nom"];
        $this->numero = $ligne["numero"];
        $this->bank = $ligne["bank"];
    }
}
