<?php

namespace App\Http\Livewire\Admin;


use App\Models\projet;
use App\Models\gallerie;

use Livewire\Component;
//use Livewire\WithFileUploads;
use Livewire\WithFileUploads;

class Projets extends Component
{

    use WithFileUploads;
    public $projets;
    public $nom;
    public $descri;
    public $url='';
    public $lastId;
    public $selectedId;
    public $photos = [];
    public $photo;
    public $ctr=0;
    public $galleries=[];
    public $imagesGalleries = [];
    public $titre;
    public $photosUpdate = [];

    protected $listeners = ['Domaine' => '$refresh', 'updateGallerie' => '$refresh'];

    public function render()
    {
        $this->projets = projet::all();
        $this->imagesGalleries = gallerie::all();
        return view('livewire.admin.projets');
    }


    function resetFields(){
        $this->selectedId  = 0;
        $this->nom  = '';
        $this->descri  = '';
        $this->url = '';
        $this->photo='';
        $this->photos = [];
        $this->galleries = [];
    }

    function store(){
        //$this->ctr++;
        
        $validateImage = $this->validate([
            'photos'=>'required'
        ]);

        $validateprojet = $this->validate([
            'nom'=>'required',
            'descri'=>'required',
            'url'=>'required',
        ]);
                
        if(count($this->photos) != count($this->galleries)){
            $max = count($this->photos) - count($this->galleries);
            for ($i=0; $i < $max; $i++) { 
                # code...
                array_push($this->galleries, [
                    "titre"=>null , 
                    "projet_id"=>0,
                    "activite_id"=>null,
                    "sous_acti_id"=>null
                    ]
                );
            }
        }
        

        //dd($this->galleries); 
       $data = projet::create($validateprojet);
       $this->lastId = $data->id;
       for ($i=0; $i < count($this->galleries); $i++) { 
        # code...
            $this->galleries[$i]["projet_id"] = $data->id;
        }

       $this->makegalleries(0, $data->id);
       session()->flash('message', 'projet enregistré avec succès');
       $this->emit('Added');
       $this->dispatchBrowserEvent('Added');
       $this->resetFields();

    }

    public function update(){
        //dd($this->selectedId);
        $v = $this->validate([
            'nom' => 'required',
            'url' => 'required',
            'selectedId' => 'required',
            'descri' => 'required'
        ]);
        $record = projet::find($this->selectedId);
        $record->update([
            'nom' => $this->nom,
            'url' => $this->url,
            'descri' => $this->descri,
        ]);
        $this->resetFields();
        session()->flash('message', 'projet modifié avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
    }

    function delete(){
        $v = $this->validate([
            'selectedId' => 'required',
        ]);
        $record = projet::find($this->selectedId);
        $record->delete();
        $this->resetFields();
        session()->flash('message', 'projet Supprimé avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
    }
    function charger($ligne){
        $this->selectedId = $ligne["id"];
        $this->nom = $ligne["nom"];
        $this->descri = $ligne["descri"];
        $this->url = $ligne["url"];
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
                "projet_id"=>0,
                "activite_id"=>null,
                "sous_acti_id"=>null
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
            if($gal->projet_id == $this->selectedId){
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
                    "titre"=>null , 
                    "projet_id"=> $this->selectedId,
                    "activite_id"=>null,
                    "sous_acti_id"=>null
                    ]
                );
            }
        }
        

        //dd($this->galleries); 
       

       $this->makegalleriesUpdate(0);
       session()->flash('message', 'projet enregistré avec succès');
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
                "projet_id"=>$this->selectedId,
                "activite_id"=>null,
                "sous_acti_id"=>null
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
