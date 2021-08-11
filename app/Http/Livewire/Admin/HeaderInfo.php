<?php

namespace App\Http\Livewire\Admin;

use App\Models\infoHeader;
use Livewire\Component;
use Illiminate\Support\Facades\Storage;

use Livewire\WithFileUploads;

class HeaderInfo extends Component
{

    use WithFileUploads;
    public $infos;
    public $selectedId;
    public $photo;
    public $titre="";
    public $descri="";

    protected $listeners = ['imgUpdate'=>'$refresh'];

    public function render()
    {
        $this->infos = infoHeader::all();
        return view('livewire.admin.header-info');
    }

    /* Reset all form properties */
    public function resetFields(){
        $this->selectedId = 0;
        $this->photo = '';
        $this->titre = '';
        $this->descri='';
    }

    /* Saving record in database and in filesystem */
    public function store(){
        $validateInfo = $this->validate([
            'titre'=>'required',
            'descri'=>'required'
        ]);
        $this->validate([
            'photo'=>'required'
        ]);
        $record = infoHeader::create($validateInfo);
        $this->photo->storePubliclyAs('public/headerInfo/', $record->id.'.png');
        //$this->photos[$index]->storePubliclyAs('public/galleries/', $data->id.'.png' );
        session()->flash('message', 'Info entete enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();
    }

    public function charger($record){
        $this->selectedId = $record['id'];
        $this->titre = $record['titre'];
        $this->descri = $record['descri'];
    }

    public function update(){
        $validateInfo = $this->validate([
            'titre'=>'required',
            'descri'=>'required'
        ]);

        $record = infoHeader::find($this->selectedId);
        $record->update($validateInfo);

        /* update image file */

        if(!empty($this->photo)){
            $this->photo->storePubliclyAs('public/headerInfo/', $this->selectedId.'.png');
            $this->emitSelf('imgUpdate');
        }

        session()->flash('message', 'Info entete modifié avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function delete(){
        /* $validateInfo = $this->validate(['']) */
        $record = infoHeader::find($this->selectedId);
        $record->delete($validateInfo);

        /* update image file */
        Storage::delete('public/header_info/'.$this->selectedId.'.png');
        /* $this->photo->storePubliclyAs('public/header_info/'.$this->selectedId.'.png'); */

        session()->flash('message', 'Info entete modifié avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }
}
