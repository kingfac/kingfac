<div class="px-10 pt-10 pb-40 font-bold text-center text-white bg-yellow-600" id="nous">
    <h1>CENTRE POUR LA PROMOTION  DU MONDE RURAL
        ACTION EVANGILE ET  PROMOTION HUMAINE</h1>
</div>

<div class="relative grid w-full grid-cols-1 gap-6 px-10 md:grid-cols-3 -top-32 md:px-10 lg:px-20 animate__animated animate__bounceIn xl:px-60">
    <a class="flex flex-col items-center justify-center py-10 text-center transition duration-300 transform bg-white rounded shadow hover:scale-105" href="{{route('pages', ['page'=>'dons', 'el'=>'null'])}}">
        {{-- <i class="font-bold text-blue-900 text-7xl fa fa-user"></i> --}}
        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 text-blue-900" viewBox="0 0 20 20" fill="currentColor">
            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
            <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
        </svg>
        <h1 class="py-5 text-xl font-bold">Donnations</h1>
        <p>Faîtes un don pour soutenir l'association</p>
    </a>
    <a class="flex flex-col items-center justify-center py-10 text-center transition duration-300 transform bg-white rounded shadow hover:scale-105" href="{{route('pages', ['page'=>'faqs', 'el'=>'null'])}}">
        {{-- <i class="font-bold text-blue-900 text-7xl fa fa-user"></i> --}}
        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 text-blue-900" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
        </svg>
        <h1 class="py-5 text-xl font-bold">FAQ</h1>
        <p>Posez des questions en toute liberté et nous allons vous repondre dans un plus bref delais</p>
    </a>
    <a class="flex flex-col items-center justify-center py-10 text-center transition duration-300 transform bg-white rounded shadow hover:scale-105" href="{{route('pages', ['page'=>'volontaire', 'el'=>'null'])}}">
        {{-- <i class="font-bold text-blue-900 text-7xl fa fa-user"></i> --}}
        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 text-blue-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
        <h1 class="py-5 text-xl font-bold">Volontaires</h1>
        <p>Faîtes un don pour soutenir l'association</p>
    </a>
</div>

<div class="flex flex-col px-10 pb-10 xl:px-72 md:px-10 lg:px-20 md:flex-row">
    <div class="flex-1">
        <img src="{{asset('images/IMG_20200721_160847_236.jpg')}}" alt="" srcset="" class="object-cover">
    </div>
    <div class="flex-1 pt-10 md:px-10 md:pt-0">
        <h1 class="pb-10 text-xl font-bold text-center xl:text-3xl md:text-left md:text-1xl lg:text-2xl"><span class="border-b-8 border-yellow-600">Bien</span>venu à <span class="text-yellow-600">Cepromor</span> & Aeph </h1>
        <div class="flex flex-col justify-between h-4/5">
            <div class="text-justify text-article">
                <?php echo $ceproInfos[0]->info; ?>
            </div>...
            <a href="{{route('pages', ['page'=>'cepromor', 'el'=>'1'])}}" class="flex justify-between w-1/2 p-5 mt-10 text-center text-white transition duration-200 transform bg-yellow-600 md:mt-0 hover:scale-105">
                <b>En savoir plus</b>
                <b>></b>
            </a>
        </div>
    </div>
</div>