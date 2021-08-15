<div id="partenaires" class="py-10 overflow-auto"> 
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="flex flex-col items-center justify-center pb-20 text-center">
        <h1 class="text-xl font-bold text-center xl:text-3xl md:text-1xl lg:text-2xl">Partenaires</h1>
        <h1 class="w-10 mt-1 border-b-8 border-yellow-600"></h1>
    </div>

    <div class="grid grid-cols-2 gap-5 px-10 text-center lg:grid-cols-4 md:px-10 md:grid-cols-3 lg:px-20">
        @foreach ($partenaires as $part)
        <a class="flex flex-col items-center justify-center mb-20 transition duration-200 transform cursor-pointer hover:scale-105"  href="<?php echo $part->url; ?>">
            <img src="{{asset('storage/partenaire/'.$part->id.'.png')}}" alt="" class="w-1/2">
            <p class="pt-2 text-lg font-bold">{{$part->lib}}</p>
        </a>
        @endforeach        
    </div>
</div>
