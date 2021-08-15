<div x-data>
    {{-- The best athlete wants his opponent at his best. --}}
    <style>
    
        #projet {
            background-image: url("{{asset('images/IMG_20200511_091026.jpg')}}");        
            background-repeat: no-repeat;
            background-position: center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .zoom {
            background-repeat: no-repeat;
            background-position: center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .container{
        /* width: calc(33% - 6px); */
        overflow:hidden;
        /* height: fit-content; */
        margin:3px;
        padding: 0;
        display:block;
        position:relative;
        float:left;
        }
        img{
        /* width: 100%; */
        transition-duration: .3s;
        /* max-width: 100%; */
        display:block;
        overflow:hidden;
        cursor:pointer;
        }
        .title{
        position:absolute;
        display:block;
        cursor:pointer;
        top: 35%;
        display: none;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        font-weight: bold;
        font-size: 1.6em;
        text-shadow: 1px 5px 10px black;
        transition-duration: .3s;
        }
        .text{
        position:absolute;
        top: 70%;
        cursor:pointer;
        max-width: 80%;
        text-align:center;
        left: 50%;
        text-shadow: 1px 5px 10px black;
        font-size: 1em;
        display:none;
        margin-right: -50%;
        transition-duration: .3s;
        transform: translate(-50%, -50%) 
        }
        .container:hover img{
        transform: scale(1.2);
        transition-duration: .3s;
        filter: grayscale(50%);
        opacity: .7;
        }
        .container:hover span{
        color:white;
        display: block;
        transition-duration: .3s;
        }
        
    </style>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="flex items-center justify-center h-1/3" id="projet">
        {{-- <img src="{{asset('storage/domaine/'.$domaine_id.'.png')}}" alt="" srcset="" class="object-cover w-full h-full obj"> --}}
        <h1 class="p-3 text-2xl font-bold text-white bg-orange-transparent">PROJETS DE CEPROMOR & AEPH</h1>
    </div>
    <div class="min-h-screen px-10 py-5 mt-10 xl:px-60">
        @foreach ($projets as $pro)    
        <div class="mb-5">
            <div class="flex flex-col justify-between md:flex-row">
                <h1 class="flex-1 text-2xl font-extrabold border-b text-orange"><b class="px-2 py-1 mr-2 text-white bg-blue-900">{{$loop->index+1}}</b>{{$pro->nom}}</h1>
                @if (strlen($pro->url) > 0)
                    <button class="px-5 py-1 text-white bg-blue-900" @click="voir('<?php echo $pro->url; ?>')">Suivre la(les) vidéo(s) du projet</button>
                @endif
            </div>
            <p class="py-4 text-2xl">{{$pro->descri}}</p>
        </div>
        <div class="grid lg:grid-cols-{{($galler($pro->id) < 4) ? $galler($pro->id) : 4}} gap-2 grid-cols-1">
            @foreach ($galleries as $gal)
                @if ($gal->projet_id == $pro->id)
                    <div class="container">
                        <img src="{{asset('storage/galleries/'.$gal->id.'.png')}}" alt="" class="w-full">
                         <span class="title">{{$gal->titre}}</span>
                        <span class="text">
                            <button class="px-10 py-3 text-lg bg-blue-900" @click="zoom=true;img={{$gal->id}}">Zoom</button>
                        </span>
                    </div>
                @endif
            @endforeach
        </div>
        @endforeach
    </div>
    <div class="fixed top-0 flex flex-col w-full min-h-screen gap-4 px-2 md:p-20" style="background-color: rgba(0, 0, 0, 0.801)" x-show="zoom" x-transition.duration.500ms>
        <div class="relative flex justify-between text-lg font-bold text-white md:top-0 top-2">
            <h1 x-text="chemin">IMAGE ZOOME</h1>
            <button class="px-5 bg-red-700 hover:bg-red-900" @click="zoom=false">X</button>
        </div>
        <div class="md:border zoom">
            <img :src="zoomer('<?php echo asset('storage/galleries/'); ?>')" alt="Pas d'image" class="object-contain w-full" style="height: 80vh">
        </div>
    </div>
    <div class="fixed top-0 flex flex-col w-full min-h-screen gap-4 px-2 lg:p-20" style="background-color: rgba(0, 0, 0, 0.801)" x-show="youtube" x-transition.duration.500ms>
        <div class="relative flex justify-between text-lg font-bold text-white md:top-0 top-2">
            <h1>Videos</h1>
            <button class="px-5 bg-red-700 hover:bg-red-900" @click="youtube=false">X</button>
        </div>
        <div class="border zoom">
            <iframe 
                class="w-full md:h-full ring-blue-900 ring-8 ring-inset"
                style="height: 80vh"
                :src="video" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
        </div>
    </div>
</div>
