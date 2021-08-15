<div class="" style="background-image: url({{asset('images/IMG_20200511_091026.jpg')}})" id="projetRecent">

    <div class="flex flex-col justify-between gap-4 px-10 py-20 pb-10 xl:px-60 md:px-10 lg:px-20 bg-image-1 gradient" >
        {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
        <div class="flex flex-col md:flex-row">
            <div class="flex-1 text-justify">
                <div class="p-2 text-xl font-bold text-center text-white xl:w-1/2 md:w-1/2 bg-orange-transparent">Projets récents</div>
                <div class="py-4 text-3xl font-bold text-white">
                    <h1>{{$projets[0]->nom}}</h1>
                </div>
                <p class="text-lg text-white">
                    {{$projets[0]->descri}}
                </p>
            </div>
            <div class="flex-1 lg:pl-20 h-96 md:pl-10">
                <iframe 
                    class="w-full md:h-full ring-blue-900 ring-8 ring-inset h-96"
                    src="https://www.youtube.com/embed/{{$projets[0]->url}}" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
        <div class="py-2 text-center bg-black-transparent">
            <a class="p-3 text-xl font-bold text-white transition duration-100 transform rounded-lg hover:scale-95 min-w-screen" href="{{route('pages', ['page'=>'projet', 'el'=>'null'])}}">Voir autres projets</a>
        </div>
    </div>
</div>
