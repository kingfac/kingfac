<?php

namespace App\Http\Livewire\Client\Pages;

use App\Models\question;
use App\Models\commentaire;
use Livewire\Component;


class Faqs extends Component
{
    public $faqs;
    public $commentaires;
    public $selectedId;
    public $name;
    public $objet;
    public $contenu;
    public $nameCom;
    public $comment;
    public $question;
    protected $listeners = ['a'=>'$refresh'];

    public function render()
    {
        $this->faqs = question::all();
        $this->commentaires = commentaire::all();
        $ctr = function($id){
            return count(commentaire::all()->where('question', $id));
        };
        return view('livewire.client.pages.faqs', ['ctr'=>$ctr]);
    }
    public function resetFields(){
        $this->selectedId = 0;
        $this->name = '';
        $this->objet = '';
        $this->contenu = '';
    }

    public function store(){
        $validatequestion = $this->validate([
            'name'=>'required',
            'contenu'=>'required',
            'objet'=>'required'
        ]);
        
        $record = question::create($validatequestion);
        session()->flash('message', 'question  enregistré avec succès');
        $this->emit('Type');
        $this->dispatchBrowserEvent('Faqs');
        $this->resetFields();
    }

    public function charger($record){
        $this->selectedId = $record['id'];
        $this->question = $record['id'];
       /*  $this->name = $record['name'];
        $this->objet = $record['objet'];
        $this->contenu = $record['contenu']; */
        //$this->commentaires = commentaire::all()->where('question', $record['id']);
    }

    public function update(){
        $validatequestion = $this->validate([
            'name'=>'required',
            'contenu'=>'required',
            'objet'=>'required'
        ]);

        $record = question::find($this->selectedId);
        $record->update($validatequestion);

        /* update image file */

        session()->flash('message', 'question  modifié avec succès');
        $this->emit('Type');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function delete(){
        /* $validatequestion = $this->validate(['']) */
        $record = question::find($this->selectedId);
        $record->delete($validatequestion);

        session()->flash('message', 'question  modifié avec succès');
        $this->emit('Type');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }

    public function commenter(){
        $validatequestion = $this->validate([
            'nameCom'=>'required',
            'comment'=>'required',
            'question'=>'required'
        ]);;

        //dd($validatequestion);
        
        $record = commentaire::create([
            'name' => $this->nameCom,
            'comment' => $this->comment,
            'question' => $this->question
        ]);
        session()->flash('message', 'question  enregistré avec succès');
        $this->emit('comment');
        $this->dispatchBrowserEvent('Comment+');
        $this->resetFields();
    }

}
