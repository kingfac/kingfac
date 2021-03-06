<?php

namespace App\Http\Livewire\Admin;

use App\Models\activite;
use App\Models\gallerie;
use App\Models\domaine;

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
    public $galleries=[];
    public $domaines;
    public $imagesGalleries = [];
    public $titre;
    public $photosUpdate = [];

    protected $listeners = ['Domaine' => '$refresh', 'updateGallerie' => '$refresh'];

    public function render()
    {
        $this->activites = activite::all();
        $this->domaines = domaine::all();
        $this->imagesGalleries = gallerie::all();
        /* $getDomaine = function($act_id){
            foreach($this.gallerie)
        } */
        return view('livewire.admin.activites');
    }

    function resetFields(){
        $this->selectedId  = 0;
        $this->nom  = '';
        $this->detail  = '';
        $this->domaine_id  = 0;
        $this->photo='';
        $this->photos = [];
        $this->galleries = [];
    }

    function store(){
        //$this->ctr++;
        
        $validateImage = $this->validate([
            'photos'=>'required'
        ]);

        $validateActivite = $this->validate([
            'nom'=>'required',
            'detail'=>'required',
            'domaine_id'=>'required',
        ]);
                
        if(count($this->photos) != count($this->galleries)){
            $max = count($this->photos) - count($this->galleries);
            for ($i=0; $i < $max; $i++) { 
                # code...
                array_push($this->galleries, [
                    "titre"=>"" , 
                    "activite_id"=>0,
                    "projet_id"=>null,
                    "sous_acti_id"=>null
                    ]
                );
            }
        }
        

        //dd($this->galleries); 
       $data = activite::create($validateActivite);
       $this->lastId = $data->id;
       for ($i=0; $i < count($this->galleries); $i++) { 
        # code...
            $this->galleries[$i]["activite_id"] = $data->id;
        }

       $this->makegalleries(0, $data->id);
       session()->flash('message', 'activite enregistr?? avec succ??s');
       $this->emit('Added');
       $this->dispatchBrowserEvent('Added');
       $this->resetFields();

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
            'detail' => $this->detail,
            'domaine_id' => $this->domaine_id
        ]);
        $this->resetFields();
        session()->flash('message', 'activite modifi?? avec succ??s');
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
        session()->flash('message', 'activite Supprim?? avec succ??s');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
    }
    function charger($ligne){
        $this->selectedId = $ligne["id"];
        $this->nom = $ligne["nom"];
        $this->detail = $ligne["detail"];
        $this->domaine_id = $ligne["domaine_id"];
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
                "activite_id"=>0,
                "projet_id"=>null,
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
                    "activite_id"=> $this->selectedId,
                    "projet_id"=>null,
                    "sous_acti_id"=>null
                    ]
                );
            }
        }
        

        //dd($this->galleries); 
       

       $this->makegalleriesUpdate(0);
       session()->flash('message', 'activite enregistr?? avec succ??s');
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
                "activite_id"=>$this->selectedId,
                "projet_id"=>null,
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

    public function show($img){
        return false;
    }
}
