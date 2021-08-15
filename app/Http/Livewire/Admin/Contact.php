<?php

namespace App\Http\Livewire\Admin;

use App\Models\contacts;
use Livewire\Component;

class Contact extends Component
{

    public $contacts;
    public $selectedId;
    public $lib;
    public $url;
    public $icon;
    public $lastId;

    public function render()
    {
        $this->contacts = contacts::all();
        return view('livewire.admin.contact');
    }

    function resetFields(){
        $this->selectedId  = 0;
        $this->lib  = '';
        $this->url  = '';
        $this->icon  = '';
    }

    function store(){
        $validatedData = $this->validate([
           'lib' => 'required',
           'icon' => 'required',
           'url' => 'required'
       ]);       
       $data = contacts::create($validatedData);
       $this->lastId = $data->id;
       session()->flash('message', 'contact enregistré avec succès');
       $this->emit('Added');
       $this->resetFields();
       $this->emit('contact');
    }
    public function update(){
        //dd($this->selectedId);
        $v = $this->validate([
            'lib' => 'required',
            'icon' => 'required',
            'selectedId' => 'required',
            'url' => 'required'
        ]);
        $record = contacts::find($this->selectedId);
        $record->update([
            'lib' => $this->lib,
            'icon' => $this->icon,
            'url' => $this->url
        ]);
        $this->resetFields();
        session()->flash('message', 'contact modifié avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
    }

    function delete(){
        $v = $this->validate([
            'selectedId' => 'required',
        ]);
        $record = contacts::find($this->selectedId);
        $record->delete();
        $this->resetFields();
        session()->flash('message', 'contact Supprimé avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
    }
    function charger($ligne){
        $this->selectedId = $ligne["id"];
        $this->lib = $ligne["lib"];
        $this->url = $ligne["url"];
        $this->icon = $ligne["icon"];
    }
}
