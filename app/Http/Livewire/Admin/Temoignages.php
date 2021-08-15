<?php

namespace App\Http\Livewire\Admin;

use App\Models\temoignage;
use Livewire\Component;
use Illiminate\Support\Facades\Storage;

use Livewire\WithFileUploads;

class Temoignages extends Component
{
    use WithFileUploads;
    public $temoignages;
    public $selectedId;
    public $photo;
    public $noms="";
    public $url="";
    public $email="";
    public $descri="";

    public function render()
    {
        $this->temoignages = temoignage::all();
        return view('livewire.admin.temoignages');
    }

    public function resetFields(){
        $this->selectedId = 0;
        $this->photo = '';
        $this->noms = '';
        $this->email = '';
        $this->descri=''; 
    }

    /* Saving record in database and in filesystem */
    public function store(){
        $validatetemoignage = $this->validate([
            'noms'=>'required',
            'url'=>'required',
            'email'=>'required',
            'descri'=>'required'
        ]);
        $this->validate([
            'photo'=>'required'
        ]);
        $record = temoignage::create($validatetemoignage);
        $this->photo->storePubliclyAs('public/temoignage/', $record->id.'.png');
        //$this->photos[$index]->storePubliclyAs('public/galleries/', $data->id.'.png' );
        session()->flash('message', 'temoignage  enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();
    }

    public function charger($record){
        $this->selectedId = $record['id'];
        $this->noms = $record['noms'];
        $this->url = $record['url'];
        $this->email = $record['email'];
        $this->descri = $record['descri'];
    }

    public function update(){
        $validatetemoignage = $this->validate([
            'noms'=>'required',
            'url'=>'required',
            'email'=>'required',
            'descri'=>'required'
        ]);

        $record = temoignage::find($this->selectedId);
        $record->update($validatetemoignage);

        /* update image file */

        if(!empty($this->photo)){
            $this->photo->storePubliclyAs('public/temoignage/', $this->selectedId.'.png');
            $this->emitSelf('imgUpdate');
        }

        session()->flash('message', 'temoignage  modifié avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function delete(){
        /* $validatetemoignage = $this->validate(['']) */
        $record = temoignage::find($this->selectedId);
        $record->delete();

        /* update image file */
        Storage::delete('public/temoignage/'.$this->selectedId.'.png');
        /* $this->photo->storePubliclyAs('public/_temoignage/'.$this->selectedId.'.png'); */

        session()->flash('message', 'temoignage  modifié avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }
}
