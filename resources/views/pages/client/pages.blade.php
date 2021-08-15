@extends('app')

@section('content')
{{-- {{dd($el)}} --}}
    {{-- <livewire:client.header /> --}}
    <div class="p-8 bg-gray-900"></div>
    @switch($page)
        @case('cepromor')
            <livewire:client.pages.cepromor />
            @break
        @case('actualite')
            <livewire:client.pages.actualites />
            @break 
        @case('dons')
            <livewire:client.pages.dons />
            @break
        @case('faqs')
            <livewire:client.pages.faqs />
            @break
        @case('activite')
            <livewire:client.pages.activites :id="$el" />
            @break
        @case('projet')
            <livewire:client.pages.projets />
            @break
        @case('volontaire')
            <livewire:client.pages.volontaires />
            @break
        @default
            
    @endswitch
    {{-- <livewire:client.home.nous />
    <livewire:client.home.actualites />
    <livewire:client.home.projets />
    <livewire:client.home.volontaires />
    <livewire:client.home.temoignages />
    <livewire:client.home.partenaires /> --}}
    <livewire:client.nav />
    <livewire:client.footer />
@endsection