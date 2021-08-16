@extends('app')

@section('admin')
<div class="flex w-full" x-data="admin()" x-init="initSide({{count($nav)}})">
    <div class="min-h-screen transition transform bg-gradient-to-b from-black to-blue-900" id="side"
        :class="{'w-96' : s===0, 'w-1/5' : s==1, 'w-1/6' : s===2, 'w-1/12' : s===3}">
        <div class="flex justify-end py-3 text-white">
            
            <button class="transition duration-300 transform hover:text-gray-400" @click="showSide()"
                :class="{'px-5' : !side}"
            >
                <svg x-show="side" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                <svg x-show="!side" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </button>
        </div>
        <div class="py-10 text-center" x-show="side">
            <h1 class="text-xl font-bold text-center text-white x-3">Menu principale</h1>
            <b class="text-gray-400">Cepromor & Aeph admin</b>
        </div>
        <hr>
        {{-- Items du menus --}}
        <div class="grid grid-rows-5 gap-1">
            @foreach ($nav as $item)
                
            <a href="#" class="flex items-center justify-between py-3 text-white transition duration-300 transform hover:bg-white hover:text-blue-900"
                @click="naviguer({{$loop->index}})" :class="{'bg-white' : nav[{{$loop->index}}], 'text-blue-900' : nav[{{$loop->index}}]}">
                <div class="" :class="{'px-2' : side, 'px-5' : !side}">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{$item['icon']}}"></path></svg>
                </div>
                <b class="flex-1 text-xl" x-show="side">{{$item['name']}}</b>
                <div x-show="side" class="px-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </a>
            @endforeach
            
            
        </div>
    </div>
    <div class="flex flex-col flex-1">
        @livewire('navigation-menu')
        
        <div x-show="nav[0]" >
            <livewire:admin.dash/>
        </div>
        <div x-show="nav[1]" >
            <livewire:admin.cepro-infos/>
        </div>
        <div x-show="nav[2]" >
            <livewire:admin.domaines/>
        </div>
        <div x-show="nav[3]" >
            <livewire:admin.activites/>
        </div>
        <div x-show="nav[4]" >
            <livewire:admin.header-info/>
        </div>
        <div x-show="nav[5]" >
            <livewire:admin.actualites/>
        </div>
        <div x-show="nav[6]" >
            <livewire:admin.contact/>
        </div>
        <div x-show="nav[7]" >
            <livewire:admin.projets/>
        </div>
        <div x-show="nav[8]" >
            <livewire:admin.patrimoines/>
        </div>
        <div x-show="nav[9]" >
            <livewire:admin.partenaires/>
        </div>
        <div x-show="nav[10]" >
            <livewire:admin.faqs/>
        </div>
       {{--  <div x-show="nav[11]" >
            <livewire:admin.settings/>
        </div> --}}
        <div x-show="nav[11]" >
            <livewire:admin.volontaires/>
        </div>
        <div x-show="nav[12]" >
            <livewire:admin.temoignages/>
        </div>
        <div x-show="nav[13]" >
            {{-- <livewire:admin.users/> --}}
            <livewire:admin.banks/>
        </div>

    </div>
    <div x-show="toast" class="absolute top-0 flex items-center justify-center w-full min-h-full p-10 bg-black-transparent"
            x-transition.duration.500ms
        >
            <div class="p-10 bg-white shadow">
                <h1 class="text-lg font-bold" :class="{'text-red-600' : toastEtat===false, 'text-green-600' : toastEtat}" x-text="toastMessage"></h1>
            </div>
    </div>
</div>
@endsection