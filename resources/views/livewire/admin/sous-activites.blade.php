<div x-data class="absolute top-0 left-0 w-full min-h-screen bg-white">
    {{-- {{$lastId}} --}}
    {{-- <img src="{{asset('storage/gallerie/2.png')}}" alt="glodi" srcset=""> --}}
    {{-- @if ($photo)
        Photo Preview:
        <img src="{{ $photo->temporaryUrl() }}">
    @endif --}}
    <div class="flex justify-between pr-6">
        <button class="p-3 text-lg font-bold text-white bg-blue-900" @click="sous_activite=false">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        </button>
        <h1 class="py-3 text-lg">Gestion des sous activites</h1>
    </div>
    <hr>
    <div class="px-5 py-5">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="grid grid-cols-2 gap-4 divide-y-2">
            <div class="p-2 shadow">   
                <h1 class="text-xl font-bold divide-x-4 divide-gray-300">Gestion des sous activités</h1>
                <div class="flex flex-col gap-8 py-10">
                    <select name="hh" id="" wire:model="activite_id" class="px-1 py-2 text-lg border rounded-lg">
                        <option class="text-lg font-bold">Choisir un activite d'intervention</option>
                        @foreach ($activites as $activite)
                            <option value="{{$activite['id']}}" class="text-lg font-bold">{{$activite['nom']}}</option>
                        @endforeach
                    </select>
                    <input type="text" class="w-full p-2 placeholder-gray-700 border-2 rounded-lg" placeholder="sous_titre de l'activité" id="sous_titre" wire:model="sous_titre">
                    {{-- <textarea name="h" id="detail" wire:model="detail" class="p-2 placeholder-gray-600 transition transform border" placeholder="Votre detail" ></textarea> --}}
                    <input type="file" name="photo" id="photos" wire:model="photos" multiple>
                    <div class="grid grid-cols-4 gap-4">
                        <button class="p-3 text-lg font-bold text-white bg-blue-900" @click="modalController(0,'Confirmation','Etes-vous sûr de vouloir enregistrer')">Enregistrer</button>        
                        <button class="p-3 text-lg font-bold text-white bg-yellow-600" @click="modalController(1,'Confirmation','Etes-vous sûr de vouloir modifier')">Modifier</button>        
                        <button class="p-3 text-lg font-bold text-white bg-red-900" @click="modalController(2,'Confirmation','Etes-vous sûr de vouloir supprimer')">Supprimer</button>        
                        <button class="p-3 text-lg font-bold text-white bg-gray-500" wire:click="resetFields" @click="detail='';sous_titre='';id=0">Clear</button>        
                    </div>
                    
                    <div class="">
                        @if ($selectedId)
                            <button href="#" class="p-2 text-lg font-bold shadow" @click="gallerie = !gallerie">Modifier gallerie d'images</button>
                        @endif
                    </div>
                </div> 
            </div>
            <div>
                <div>
                    {{-- Previsualiser les images --}}
                    <div class="grid grid-cols-2 gap-4 p-4">
                        @if ($photos)
                            @foreach ($photos as $pt)
                                <div class="flex flex-col gap-1 p-1 shadow">
                                    <img src="{{$pt->temporaryUrl()}}" alt="" srcset="">
                                    <div class="flex justify-between">
                                        <input type="text" class="w-full py-2 text-center border rounded-md font-xl" placeholder="Saisir un commentaire"  wire:change="comment({{$loop->index}}, $event.target.value)">
                                        {{-- <button class="px-5 text-lg font-bold text-white bg-blue-900" wire:click="makeGallerie({{$loop->index}})">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        </button> --}}
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="flex flex-col gap-2 divide-y-2">
                        @foreach ($sousActivites as $ligne)
                            <div class="flex flex-col">
                                <button class="flex justify-between p-2 font-bold text-white transition duration-300 bg-blue-900 shadow cursor-pointer hover:bg-blue-800" wire:click="charger({{$ligne}})">
                                    <h1><?php echo $ligne->sous_titre; ?></h1>
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z"></path></svg>
                                </button>
                                {{-- <div class="hidden p-2 text-lg text-justify bg-gray-300">
                                    <?php echo $ligne->detail; ?>
                                </div> --}}
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- <div x-html="$wire.detail" class="mt-5">
                    
                </div> --}}
            </div>
            
        </div>
    </div>
    {{-- Modal --}}
    <div class="absolute top-0 flex items-center justify-center w-full min-h-full p-10 bg-black-transparent" x-show="modal" x-transition.duration.500ms>
        <div class="flex flex-col w-full gap-4 p-5 bg-white shadow md:w-2/3 lg:w-1/4">
            <div class="flex justify-between w-full">
                <h1 class="text-lg font-bold" x-text="modalTitle"></h1>
                <button class="px-5 text-white transition duration-500 bg-red-600 hover:bg-red-900" @click="modal=false" @click.away="modal=false">X</button>
            </div>
            <hr>
            <div class="grid grid-rows-2 mt-4">
                <div class="font-bold text-center">
                    <h1 class="pb-10" x-text="modalMessage">Message du modal</h1>
                    {{-- <button wire:click="aa" class="p-3 bg-red-500">glodi</button> --}}
                    <hr>
                </div>
                <div class="grid grid-cols-2 gap-4">{{-- modalController --}}
                    <button class="text-lg font-bold text-white transition duration-500 bg-blue-800 hover:bg-blue-900" x-show="modalButton==0" wire:click="store">
                        Enregistrer
                    </button>
                    <button class="text-lg font-bold text-white transition duration-500 bg-blue-800 hover:bg-blue-900" x-show="modalButton==1" wire:click="update">
                        Modifier
                    </button>
                    <button class="text-lg font-bold text-white transition duration-500 bg-blue-800 hover:bg-blue-900" x-show="modalButton==2" wire:click="delete">
                        Supprimer
                    </button>
                    <button class="text-lg font-bold text-white transition duration-500 bg-red-600 hover:bg-red-900" @click="modal=false">
                        Non
                    </button>
                </div>
            </div>        
        </div>    
    </div>
    {{-- Modification et ajout des images de la gallerie --}}
    <div class="absolute top-0 left-0 flex flex-col w-full min-h-screen gap-4 p-2 shadow bg-white-transparent" x-show="gallerie" x-transition.duration.500ms>
        <div class="flex justify-between py-2 text-white bg-blue-900 border-b">
            <h1 class="text-xl font-bold">Gestion galerie</h1>
            @if ($ctr > 0)
                <button class="px-4 text-black bg-white" wire:click="ajouter">Ajouter des images dans la gallerie</button>
            @endif
            <button class="px-4 text-white bg-red-900" @click="gallerie = false">X</button>
        </div>
        {{-- s'il n'y a aucune image dans la gallerie --}}
        {{-- @if ($ctr == 0) --}}
            <div class="flex flex-col gap-4" x-show="$wire.ctr == 0">
                <div class="grid grid-rows-3 gap-2 p-5 bg-white shadow">
                    <h1>Il n'y a pas d'images dans la gallerie, vous pouvez ajouter ici ({{$ctr}})</h1>
                    <input type="file" wire:model="photosUpdate" multiple>
                    <div class="flex justify-end">
                        <button class="px-4 py-2 text-white bg-blue-900" wire:click="addGalleries">Enregister</button>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="grid grid-cols-2 gap-4 p-4">
                        @if ($photosUpdate)
                            @foreach ($photosUpdate as $pt)
                                <div class="flex flex-col gap-1 p-1 shadow">
                                    <img src="{{$pt->temporaryUrl()}}" alt="" srcset="">
                                    <div class="flex justify-between">
                                        <input type="text" class="w-full py-2 text-center border rounded-md font-xl" placeholder="Saisir un commentaire"  wire:change="commentUpdate({{$loop->index}}, $event.target.value)">
                                        {{-- <button class="px-5 text-lg font-bold text-white bg-blue-900" wire:click="makeGallerie({{$loop->index}})">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        </button> --}}
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        {{-- @else --}}
            <div class="grid grid-cols-3 gap-1 p-1 shadow" x-show="$wire.ctr > 0">
                @foreach ($imagesGalleries as $img)
                    @if ($img->sous_acti_id == $selectedId)
                        <div class="flex flex-col gap-1 p-1 shadow">
                            <img src="{{asset('storage/galleries/'.$img->id.'.png')}}" alt="" srcset="">
                            <div class="w-full px-1 py-2 -mt-10 bg-white">
                                <input type="file" name="d" id="d" class=" wire:model="photo">
                            </div>
                            <div class="flex justify-between">
                                <input type="text" class="w-full py-2 text-center border rounded-md font-xl" placeholder="Saisir un commentaire"  wire:change="editGallerie({{$loop->index}}, $event.target.value, {{$img->id}})" value="{{$img->titre}}">
                                <button class="px-5 ml-1 mr-1 text-lg font-bold text-white bg-blue-900" wire:click="updateGallerie({{$loop->index}})">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </button>
                                <button class="px-5 text-lg font-bold text-white bg-red-900" wire:click="deleteGallerie({{$img->id}})">
                                    X
                                </button>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        {{-- @endif --}}
        
    </div>
</div>