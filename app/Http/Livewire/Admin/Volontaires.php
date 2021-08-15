<?php

namespace App\Http\Livewire\Admin;

use App\Models\volontaire;
use Livewire\Component;
use Illiminate\Support\Facades\Storage;

use Livewire\WithFileUploads;

class Volontaires extends Component
{
    use WithFileUploads;
    public $volontaires;
    public $selectedId;
    public $photo;
    public $noms="";
    public $tel="";
    public $email="";
    public $adresse="";

    public function render()
    {
        $this->volontaires = volontaire::all();
        return view('livewire.admin.volontaires');
    }

    public function resetFields(){
        $this->selectedId = 0;
        $this->photo = '';
        $this->noms = '';
        $this->email = '';
        $this->adresse=''; 
    }

    /* Saving record in database and in filesystem */
    public function store(){
        $validatevolontaire = $this->validate([
            'noms'=>'required',
            'tel'=>'required',
            'email'=>'required',
            'adresse'=>'required'
        ]);
        $this->validate([
            'photo'=>'required'
        ]);
        $record = volontaire::create($validatevolontaire);
        $this->photo->storePubliclyAs('public/volontaire/', $record->id.'.png');
        //$this->photos[$index]->storePubliclyAs('public/galleries/', $data->id.'.png' );
        session()->flash('message', 'volontaire  enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();
    }

    public function charger($record){
        $this->selectedId = $record['id'];
        $this->noms = $record['noms'];
        $this->tel = $record['tel'];
        $this->email = $record['email'];
        $this->adresse = $record['adresse'];
    }

    public function update(){
        $validatevolontaire = $this->validate([
            'noms'=>'required',
            'tel'=>'required',
            'email'=>'required',
            'adresse'=>'required'
        ]);

        $record = volontaire::find($this->selectedId);
        $record->update($validatevolontaire);

        /* update image file */

        if(!empty($this->photo)){
            $this->photo->storePubliclyAs('public/volontaire/', $this->selectedId.'.png');
            $this->emitSelf('imgUpdate');
        }

        session()->flash('message', 'volontaire  modifié avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function delete(){
        /* $validatevolontaire = $this->validate(['']) */
        $record = volontaire::find($this->selectedId);
        $record->delete();

        /* update image file */
        Storage::delete('public/volontaire/'.$this->selectedId.'.png');
        /* $this->photo->storePubliclyAs('public/_volontaire/'.$this->selectedId.'.png'); */

        session()->flash('message', 'volontaire  modifié avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }
}
