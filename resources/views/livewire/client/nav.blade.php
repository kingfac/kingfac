<div class="absolute top-0 w-full bg-transparent" x-data="{cepro:false, domaine:false, open:false}">
    <nav class="bg-gray-900 ">
        <div class="max-w-full px-2 mx-auto lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center justify-between w-full">
                    <a href="{{route('client')}}" class="flex flex-row ">
                        <img src="{{asset('images/logocepro.png')}}" alt="" class="w-12 h-12">
                        <div class="relative w-4/5 px-3 text-white md:block">
                            <h1 class="font-bold">CEPROMOR&AEPH</h1>
                            <h1 class="text-xs font-bold">ASBL/ONGD</h1>
                        </div>
                    </a>
                    <div class="hidden lg:block">
                        <ul class="flex items-baseline ml-10 space-x-4">
                            <a href="{{route('client')}}" class="px-3 py-2 text-sm font-bold text-gray-300 rounded-md hover:text-gray-800">Accueil</a>
                            <a href="#" @click="cepro = !cepro" @click.outside="cepro=false" class="px-3 py-2 text-sm font-bold text-gray-300 rounded-md hover:text-gray-800">
                                Cepromor&Aeph
                            </a>
                            <a href="{{route('client')}}" class="px-3 py-2 text-sm font-bold text-gray-300 rounded-md hover:text-gray-800">Projets</a>
                            <a href="{{route('client')}}" class="px-3 py-2 text-sm font-bold text-gray-300 rounded-md hover:text-gray-800">Actualité</a>
                            <a href="{{route('client')}}" class="px-3 py-2 text-sm font-bold text-gray-300 rounded-md hover:text-gray-800">Domaines d'intervention</a>
                            <a href="{{route('client')}}" class="px-3 py-2 text-sm font-bold text-gray-300 rounded-md hover:text-gray-800">Contacts</a>
                        </ul>
                    </div>
                </div>
                
                <div class="block">
                    <div class="flex items-center ml-4 lg:ml-6"></div>
                </div>
                {{-- <div class="w-full px-20 py-3 text-center text-white lg:hidden">
                    <h1 class="font-bold">CEPROMOR&AEPH</h1>
                    <h1 class="text-xs font-bold">ASBL/ONGD</h1>
                </div> --}}
                <div class="flex -mr-2 lg:hidden">
                    <button class="inline-flex items-center justify-center p-2 text-gray-800 rounded-md dark:text-white hover:text-gray-300 focus:outline-none" @click="open=!open">
                        <svg width="20" height="20" fill="currentColor" class="w-8 h-8" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="lg:hidden" >
            <div class="flex flex-col px-2 pt-2 pb-3 space-y-1 transform sm:px-3" x-show="open"
                :class=""
                x-transition.durantion.500ms
            >
                <a href="{{route('client')}}" class="px-3 py-2 text-sm font-bold text-gray-300 rounded-md hover:text-gray-800">Accueil</a>
                <a href="#" class="px-3 py-2 text-sm font-bold text-gray-300 rounded-md hover:text-gray-800" @click="cepro=!cepro" @click.outside="cepro=false">
                    Cepromor&Aeph
                </a>
                <a href="{{route('client')}}" class="px-3 py-2 text-sm font-bold text-gray-300 rounded-md hover:text-gray-800">Projets</a>
                <a href="{{route('client')}}" class="px-3 py-2 text-sm font-bold text-gray-300 rounded-md hover:text-gray-800">Actualité</a>
                <a href="{{route('client')}}" class="px-3 py-2 text-sm font-bold text-gray-300 rounded-md hover:text-gray-800">Domaines d'intervention</a>
                <a href="{{route('client')}}" class="px-3 py-2 text-sm font-bold text-gray-300 rounded-md hover:text-gray-800">Contacts</a>
            </div>
        </div>
        <div class="p-5 text-white transform border-t" 
            x-show="cepro"
            x-transition.duration.500ms
        >
            <h1 class="hidden pb-10 font-extrabold text-center divide-y-2">A PROPOS DE CEPROMOR & AEPH</h1>
            <div class="flex justify-between px-10 lg:hidden">
                <h1 class="font-extrabold">A PROPOS DE CEPROMOR & AEPH</h1>
                <button class="px-4 bg-red-900 animate-pulse" @click="cepro=!cepro">X</button>
            </div>
            <div class="grid gap-4 lg:grid-cols-2 lg:divide-x-2">
                <div class="flex-col items-center justify-center hidden lg:flex">
                    <img src="{{asset('images/logocepro.png')}}" alt="image" class="animate-pulse">
                </div>
                <div class="flex flex-col justify-between gap-6 p-10">
                    <a href="{{route('client')}}" class="py-5 text-xl font-bold text-center transition duration-300 transform bg-indigo-500 hover:scale-95">Notre identite</a>
                    <a href="{{route('client')}}" class="py-5 text-xl font-bold text-center transition duration-300 transform bg-indigo-500 hover:scale-95">Notre identite</a>
                    <a href="{{route('client')}}" class="py-5 text-xl font-bold text-center transition duration-300 transform bg-indigo-500 hover:scale-95">Notre identite</a>
                    <a href="{{route('client')}}" class="py-5 text-xl font-bold text-center transition duration-300 transform bg-indigo-500 hover:scale-95">Notre identite</a>
                </div>
            </div>
        </div>
    </nav>
</div>
