<?php

namespace App\Http\Livewire\Admin;


use App\Models\partenaire;
use App\Models\typePartenaire;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

use Livewire\WithFileUploads;


class Partenaires extends Component
{

    use WithFileUploads;
    public $partenaires;
    public $types;
    public $selectedId;
    public $photo;
    public $lib="";
    public $url="";
    public $parte_id;

    protected $listeners = ['Type'=>'$refresh'];

    public function render()
    {
        $this->partenaires = partenaire::all();
        $this->types = typePartenaire::all();
        return view('livewire.admin.partenaires');
    }

    public function resetFields(){
        $this->selectedId = 0;
        $this->photo = '';
        $this->lib = '';
        $this->url = '';
        $this->parte_id=0;
    }

    /* Saving record in database and in filesystem */
    public function store(){
        $validatepartenaire = $this->validate([
            'lib'=>'required',
            'url'=>'required',
            'parte_id'=>'required'
        ]);
        $this->validate([
            'photo'=>'required'
        ]);
        $record = partenaire::create($validatepartenaire);
        $this->photo->storePubliclyAs('public/partenaire/', $record->id.'.png');
        //$this->photos[$index]->storePubliclyAs('public/galleries/', $data->id.'.png' );
        session()->flash('message', 'partenaire  enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();
    }

    public function charger($record){
        $this->selectedId = $record['id'];
        $this->lib = $record['lib'];
        $this->url = $record['url'];
        $this->parte_id = $record['parte_id'];
    }

    public function update(){
        $validatepartenaire = $this->validate([
            'lib'=>'required',
            'url'=>'required',
            'parte_id'=>'required'
        ]);

        $record = partenaire::find($this->selectedId);
        $record->update($validatepartenaire);

        /* update image file */

        if(!empty($this->photo)){
            $this->photo->storePubliclyAs('public/partenaire/', $this->selectedId.'.png');
            $this->emitSelf('imgUpdate');
        }

        session()->flash('message', 'partenaire  modifié avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function delete(){
        /* $validatepartenaire = $this->validate(['']) */
        $record = partenaire::find($this->selectedId);
        $record->delete();

        /* update image file */
        Storage::delete('public/partenaire/'.$this->selectedId.'.png');
        /* $this->photo->storePubliclyAs('public/_partenaire/'.$this->selectedId.'.png'); */

        session()->flash('message', 'partenaire  modifié avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }
}
