<?php

namespace App\Http\Livewire\Admin;

use App\Models\activite;
use Livewire\Component;
//use Livewire\WithFileUploads;
use Livewire\WithFileUploads;

class Activites extends Component
{
    use WithFileUploads;
    public $activites;
    public $nom;
    public $detail;
    public $domaine_id;
    public $lastId;
    public $selectedId;
    public $photos = [];
    public $photo;
    public $ctr=0;
    public $gallerie=[];

    public function render()
    {
        $this->activites = activite::all();
        return view('livewire.admin.activites');
    }

    function resetFields(){
        $this->selectedId  = 0;
        $this->nom  = '';
        $this->detail  = '';
        $this->domaine_id  = 0;
        $this->photo='';
        $this->photos = [];
        $this->gallerie = [];
    }

    function store(){
        /* $this->ctr++;
        $validate = $this->validate([
            'photos'=>'image'
        ]); */
        dd($this->photos);
        //$this->photo->storePubliclyAs('public/gallerie/', $this->ctr.'.png' );
       /*  $validatedData = $this->validate([
           'nom' => 'required',
           'detail' => 'required'
       ]);      
       $data = activite::create($validatedData);
       $this->lastId = $data->id;
       session()->flash('message', 'activite enregistré avec succès');
       $this->emit('Added');
       $this->resetFields(); */

    }
    public function update(){
        //dd($this->selectedId);
        $v = $this->validate([
            'nom' => 'required',
            'selectedId' => 'required',
            'detail' => 'required'
        ]);
        $record = activite::find($this->selectedId);
        $record->update([
            'nom' => $this->nom,
            'detail' => $this->detail
        ]);
        $this->resetFields();
        session()->flash('message', 'activite modifié avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
    }

    function delete(){
        $v = $this->validate([
            'nom' => 'required',
            'selectedId' => 'required',
            'detail' => 'required'
        ]);
        $record = activite::find($this->selectedId);
        $record->delete();
        $this->resetFields();
        session()->flash('message', 'activite Supprimé avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
    }
    function charger($ligne){
        $this->selectedId = $ligne["id"];
        $this->nom = $ligne["nom"];
        $this->detail = $ligne["detail"];
        $this->domaine_id = $ligne->domane_id;
    }

    public function makeGallerie(){
        dd('okoko');
    }
}
