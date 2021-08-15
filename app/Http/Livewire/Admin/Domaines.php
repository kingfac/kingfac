<?php

namespace App\Http\Livewire\Admin;

use App\Models\domaine;
use Livewire\Component;

use Illiminate\Support\Facades\Storage;

use Livewire\WithFileUploads;

class Domaines extends Component
{
    use WithFileUploads;
    public $domaines;
    public $selectedId;
    public $lib;
    public $descri;
    public $lastId;
    public $photo;

    public function render()
    {
        $this->domaines = domaine::all();
        return view('livewire.admin.domaines');
    }
    function resetFields(){
        $this->selectedId  = 0;
        $this->lib  = '';
        $this->descri  = '';
        $this->photo = '';
    }

    function store(){
        $validatedData = $this->validate([
           'lib' => 'required',
           'descri' => 'required'
       ]);      
       $record = domaine::create($validatedData);
       $this->lastId = $record->id;
       $this->validate([
        'photo'=>'required'
    ]);
    $this->photo->storePubliclyAs('public/domaine/', $record->id.'.png');
       session()->flash('message', 'domaine enregistré avec succès');
       $this->emit('Added');
       $this->resetFields();
       $this->emit('Domaine');
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

        if(!empty($this->photo)){
            $this->photo->storePubliclyAs('public/domaine/', $this->selectedId.'.png');
            $this->emitSelf('imgUpdate');
        }

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
        Storage::delete('public/domaine/'.$this->selectedId.'.png');
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
