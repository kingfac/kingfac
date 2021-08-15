<div class="flex flex-col gap-4" x-data>
    {{-- In work, do what you enjoy. --}}
    <div class="px-4 py-4 shadow xl:px-72 lg:px-28">
        <h1 class="mb-5 text-2xl text-center">Gestion d'patrimoine de cepromor & aeph</h1>
        <div class="flex gap-4">
            <div class="flex flex-col flex-1 gap-4">
                <input type="text" placeholder="Libellé du patrimoine" class="p-2 border rounded" wire:model="lib">
                <input type="number" placeholder="Quantité patrimoine" class="p-2 border rounded" wire:model="qte">
                <input type="text" id="" class="flex-1 p-2 border rounded" placeholder="La nature du patrimoine" wire:model="nature" />
                <select name="hh" id="" wire:model="patri_id" class="px-1 py-2 text-lg border rounded-lg">
                    <option class="text-lg font-bold">Choisir un type de patrimoine</option>
                    @foreach ($types as $type)
                        <option value="{{$type['id']}}" class="text-lg font-bold">{{$type['lib']}}</option>
                    @endforeach
                    <option class="text-lg font-bold text-blue-900" @click="type=true">Ajouter un type de patrimoine</option>
                </select>
            </div>
            <div class="grid grid-rows-4 gap-4">
                <button class="p-3 text-lg font-bold text-white bg-blue-900" @click="modalController(0,'Confirmation','Etes-vous sûr de vouloir enregistrer')">Enregistrer</button>        
                <button class="p-3 text-lg font-bold text-white bg-yellow-600" @click="modalController(1,'Confirmation','Etes-vous sûr de vouloir modifier')">Modifier</button>        
                <button class="p-3 text-lg font-bold text-white bg-red-900" @click="modalController(2,'Confirmation','Etes-vous sûr de vouloir supprimer')">Supprimer</button>        
                <button class="p-3 text-lg font-bold text-white bg-gray-500" wire:click="resetFields" @click="detail='';qte='';id=0">Clear</button>
            </div>
        </div>
    </div>
    <div class="flex flex-col flex-1 px-3 xl:px-72 lg:px-28">
        <div class="grid grid-cols-3 gap-4 py-5 bg-gray-500 divide-x">
            <h1 class="text-lg font-bold text-center">Lib</h1>
            <h1 class="text-lg font-bold text-center">Qte</h1>
            <h1 class="text-lg font-bold text-center">Nature</h1>
        </div>
        @foreach ($patrimoines as $patri)
            <a class="flex flex-col justify-center p-2 text-center shadow" href="#" wire:click="charger({{$patri}})">
                <div class="grid grid-cols-3 gap-4 divide-x">
                    <h1 class="text-lg font-bold ">{{$patri->lib}}</h1>
                    <h1 class="text-lg font-bold ">{{$patri->qte}}</h1>
                    <h1 class="text-lg font-bold ">{{$patri->nature}}</h1>
                </div>
            </a>
        @endforeach
        
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
        <livewire:admin.type-patri/>
        {{-- <livewire:admin.cepro-patrios/> --}}
    </div>
</div>
