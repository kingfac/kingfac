<div class="flex flex-col gap-4 px-4" x-data>
    {{-- In work, do what you enjoy. --}}
    <div class="px-4 py-4 shadow xl:px-72 lg:px-28">
        <h1 class="mb-5 text-2xl text-center">Gestion des partenaires de cepromor & aeph</h1>
        <div class="flex gap-4">
            <div class="flex flex-col flex-1 gap-4">
                <input type="text" placeholder="Le nom du partenaire" class="p-2 border rounded" wire:model="lib">
                <input type="text" placeholder="L'adresse URL du partenaire" class="p-2 border rounded" wire:model="url">
                <select name="hh" id="" wire:model="parte_id" class="px-1 py-2 text-lg border rounded-lg">
                    <option class="text-lg font-bold">Choisir un type de partenaire</option>
                    @foreach ($types as $type)
                        <option value="{{$type['id']}}" class="text-lg font-bold">{{$type['lib']}}</option>
                    @endforeach
                    <option class="text-lg font-bold text-blue-900" @click="type=true">Ajouter un type de partenaire</option>
                </select>
            </div>
            <div class="grid grid-rows-2 gap-4">
                <label class="flex flex-col items-center justify-center px-4 py-2 tracking-wide text-purple-600 uppercase transition-all duration-150 ease-linear bg-white border rounded-md shadow-md cursor-pointer border-blue hover:bg-purple-600 hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                    <span class="px-3 mt-2 text-base leading-normal">Parcourir une image</span>
                    <input type='file' class="hidden" wire:model="photo" />
                </label>
                <button class="p-3 text-lg font-bold text-white bg-gray-500" wire:click="resetFields" @click="detail='';url='';id=0">Clear</button>        
            </div>
            <div class="grid grid-rows-3 gap-4">
                <button class="p-3 text-lg font-bold text-white bg-blue-900" @click="modalController(0,'Confirmation','Etes-vous s??r de vouloir enregistrer')">Enregistrer</button>        
                <button class="p-3 text-lg font-bold text-white bg-yellow-600" @click="modalController(1,'Confirmation','Etes-vous s??r de vouloir modifier')">Modifier</button>        
                <button class="p-3 text-lg font-bold text-white bg-red-900" @click="modalController(2,'Confirmation','Etes-vous s??r de vouloir supprimer')">Supprimer</button>        
                
            </div>
        </div>
    </div>
    <div class="flex-1">
        <div class="grid grid-cols-4 gap-4">
            @foreach ($partenaires as $parte)
                <a class="flex flex-col justify-center p-2 text-center shadow" href="#" wire:click="charger({{$parte}})">
                    @if (Storage::exists('public/partenaire/'.$parte->id.'.png'))    
                        <img src="{{asset('storage/partenaire/'.$parte->id.'.png')}}" alt="Pas d'image pour cette partenaire" srcset="" class="flex-1">
                    @endif

                    <h1 class="text-lg font-bold ">{{$parte->lib}}</h1>
                    <p class="text-gray-400">{{$parte->url}}</p>
                </a>
            @endforeach
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
    <div x-show="type" x-transition.duration.500ms>
        <livewire:admin.type-parte/>
        {{-- <livewire:admin.cepro-patrios/> --}}
    </div>
</div>
