<?php

namespace App\Http\Livewire\Admin;


use App\Models\actualite;
use Livewire\Component;
use Illiminate\Support\Facades\Storage;

use Livewire\WithFileUploads;

class Actualites extends Component
{

    use WithFileUploads;
    public $actualites;
    public $selectedId;
    public $photo;
    public $titre="";
    public $sous_titre="";
    public $descri="";

    protected $listeners = ['imgUpdate'=>'$refresh'];

    public function render()
    {
        $this->actualites = actualite::all();
        return view('livewire.admin.actualites');
    }

    public function resetFields(){
        $this->selectedId = 0;
        $this->photo = '';
        $this->titre = '';
        $this->sous_titre = '';
        $this->descri='';
    }

    /* Saving record in database and in filesystem */
    public function store(){
        $validateactualite = $this->validate([
            'titre'=>'required',
            'sous_titre'=>'required',
            'descri'=>'required'
        ]);
        $this->validate([
            'photo'=>'required'
        ]);
        $record = actualite::create($validateactualite);
        $this->photo->storePubliclyAs('public/actualite/', $record->id.'.png');
        //$this->photos[$index]->storePubliclyAs('public/galleries/', $data->id.'.png' );
        session()->flash('message', 'actualite  enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();
    }

    public function charger($record){
        $this->selectedId = $record['id'];
        $this->titre = $record['titre'];
        $this->sous_titre = $record['sous_titre'];
        $this->descri = $record['descri'];
    }

    public function update(){
        $validateactualite = $this->validate([
            'titre'=>'required',
            'sous_titre'=>'required',
            'descri'=>'required'
        ]);

        $record = actualite::find($this->selectedId);
        $record->update($validateactualite);

        /* update image file */

        if(!empty($this->photo)){
            $this->photo->storePubliclyAs('public/actualite/', $this->selectedId.'.png');
            $this->emitSelf('imgUpdate');
        }

        session()->flash('message', 'actualite  modifié avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function delete(){
        /* $validateactualite = $this->validate(['']) */
        $record = actualite::find($this->selectedId);
        $record->delete();

        /* update image file */
        Storage::delete('public/_actualite/'.$this->selectedId.'.png');
        /* $this->photo->storePubliclyAs('public/_actualite/'.$this->selectedId.'.png'); */

        session()->flash('message', 'actualite  modifié avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }

}
