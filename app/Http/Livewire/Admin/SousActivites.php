<?php

namespace App\Http\Livewire\Admin;

use App\Models\activite;
use App\Models\gallerie;
use App\Models\sousActivite;

use Livewire\Component;
//use Livewire\WithFileUploads; 
use Livewire\WithFileUploads;

class SousActivites extends Component
{

    use WithFileUploads;
    public $sousActivites;
    public $nom;
    public $sous_titre;
    public $activite_id;
    public $lastId;
    public $selectedId;
    public $photos = [];
    public $photo;
    public $ctr=0;
    public $galleries=[];
    public $activites;
    public $imagesGalleries = [];
    public $titre;
    public $photosUpdate = [];

    protected $listeners = ['activite' => '$refresh', 'updateGallerie' => '$refresh'];

    public function render()
    {
        $this->activites = activite::all();
        $this->sousActivites = sousActivite::all();
        $this->imagesGalleries = gallerie::all();
        return view('livewire.admin.sous-activites');
    }
    function resetFields(){
        $this->selectedId  = 0;
        $this->nom  = '';
        $this->sous_titre  = '';
        $this->activite_id  = 0;
        $this->photo='';
        $this->photos = [];
        $this->galleries = [];
    }

    function store(){
        //$this->ctr++;
        
        $validateImage = $this->validate([
            'photos'=>'required'
        ]);

        $validateSousActivite = $this->validate([
            'sous_titre'=>'required',
            'activite_id'=>'required',
        ]);
                
        if(count($this->photos) != count($this->galleries)){
            $max = count($this->photos) - count($this->galleries);
            for ($i=0; $i < $max; $i++) { 
                # code...
                array_push($this->galleries, [
                    "titre"=>"" , 
                    "activite_id"=>null,
                    "projet_id"=>null,
                    "sous_acti_id"=>0
                    ]
                );
            }
        }
        

        //dd($this->galleries); 
       $data = sousActivite::create($validateSousActivite);
       $this->lastId = $data->id;
       for ($i=0; $i < count($this->galleries); $i++) { 
        # code...
            $this->galleries[$i]["sous_acti_id"] = $data->id;
        }

       $this->makegalleries(0, $data->id);
       session()->flash('message', 'activite enregistré avec succès');
       $this->emit('Added');
       $this->dispatchBrowserEvent('Added');
       $this->resetFields();

    }

    public function update(){
        //dd($this->selectedId);
        $v = $this->validate([
            'selectedId' => 'required',
            'sous_titre' => 'required'
        ]);
        $record = sousActivite::find($this->selectedId);
        $record->update([
            'sous_titre' => $this->sous_titre,
            'activite_id' => $this->activite_id
        ]);
        $this->resetFields();
        session()->flash('message', 'activite modifié avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
    }

    function delete(){
        $v = $this->validate([
            
            'selectedId' => 'required',
            'sous_titre' => 'required'
        ]);
        $record = sousActivite::find($this->selectedId);
        $record->delete();
        $this->resetFields();
        session()->flash('message', 'activite Supprimé avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
    }
    function charger($ligne){
        $this->selectedId = $ligne["id"];
        $this->sous_titre = $ligne["sous_titre"];
        $this->activite_id = $ligne["activite_id"];
        $this->countGallerie();
    }

    public function makegalleries($index, $activId){
        if(count($this->galleries) != $index){
            $data = gallerie::create($this->galleries[$index]);
            $this->photos[$index]->storePubliclyAs('public/galleries/', $data->id.'.png' );
            $this->makegalleries($index+1, $activId);
        }
    }

    public function comment($index, $data){
        $compteur = count($this->galleries);
        if($compteur < count($this->photos)){
            array_push($this->galleries, [
                "titre"=>$data , 
                "activite_id"=>null,
                "projet_id"=>null,
                "sous_acti_id"=>0
                ]
            );
        }
        else{
            $this->galleries[$index]["titre"] = $data;
        }
    }

    public function editGallerie($index, $data,$idg){
        $this->titre = $data;
        //dd($index, $this->titre, $idg);
    }
    public function deleteGallerie($idg){
        dd($idg);
    }

    public function updateGallerie($index){

        if($this->photo){
            //dd($this->photo);
            $this->photo->storePubliclyAs('public/galleries/', $this->imagesGalleries[$index]->id.'.png' );
            $this->photo = '';
            $this->emitSelf('updateGallerie');
            $this->dispatchBrowserEvent('Updated');
        }
        if(!empty($this->titre)){
            $this->imagesGalleries[$index]->titre = $this->titre;
            //dd($this->imagesGalleries[$index]);
            $record = gallerie::find($this->imagesGalleries[$index]->id);
            $record->update([
                "titre" => $this->imagesGalleries[$index]->titre
            ]);
            $this->dispatchBrowserEvent('Updated');
            $this->titre="";
        }
        //dd("rien a modifier");
    }

    public function countGallerie(){
        $this->ctr = 0;
        foreach($this->imagesGalleries as $gal){
            if($gal->activite_id == $this->selectedId){
                $this->ctr++;
            }
        }
        //dd($this->ctr);
    }

    public function addGalleries(){
        $valiider = $this->validate(['photosUpdate' => 'required']);
        if(count($this->photosUpdate) != count($this->galleries)){
            $max = count($this->photosUpdate) - count($this->galleries);
            for ($i=0; $i < $max; $i++) { 
                # code...
                array_push($this->galleries, [
                    "titre"=>"" , 
                    "sous_acti_id"=> $this->selectedId,
                    "projet_id"=>null,
                    "activite_id"=>null
                    ]
                );
            }
        }
        

        //dd($this->galleries); 
       

       $this->makegalleriesUpdate(0);
       session()->flash('message', 'activite enregistré avec succès');
       $this->emit('Added');
       $this->dispatchBrowserEvent('Added');
       $this->countGallerie();
    }
    public function makegalleriesUpdate($index){
        if(count($this->galleries) != $index){
            $data = gallerie::create($this->galleries[$index]);
            $this->photosUpdate[$index]->storePubliclyAs('public/galleries/', $data->id.'.png' );
            $this->makegalleriesUpdate($index+1);
        }
    }


    public function commentUpdate($index, $data){
        $compteur = count($this->galleries);
        if($compteur < count($this->photosUpdate)){
            array_push($this->galleries, [
                "titre"=>$data ,
                "sous_acti_id"=>$this->selectedId,
                "projet_id"=>null,
                "activite_id"=>null
                ]
            );
        }
        else{
            $this->galleries[$index]["titre"] = $data;
        }
    }

    public function ajouter(){
        $this->ctr = 0;
    }
}
