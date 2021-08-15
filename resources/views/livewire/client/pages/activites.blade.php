<div class="" x-data>
    <style>
    
        #domaine {
            background-image: url("{{asset('storage/domaine/'.$domaine_id.'.png')}}");        
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
    <div class="flex items-center justify-center h-1/3" id="domaine">
        {{-- <img src="{{asset('storage/domaine/'.$domaine_id.'.png')}}" alt="" srcset="" class="object-cover w-full h-full obj"> --}}
        <h1 class="p-3 text-2xl font-bold text-white bg-orange-transparent">{{$domaines->lib}}</h1>
    </div>
    <div class="flex flex-col min-h-screen">
        <div class="px-10 py-4 text-xl text-justify xl:px-60">
            <h1 class="py-6 text-3xl font-extrabold text-orange">Description du domaine</h1>
            <p>
                <?php 
                    $tab = explode(';', $domaines->descri);
                    $ctr = 1;
                    foreach ($tab as $t) {
                        echo $ctr.'. '.$t.';<br>';
                        $ctr++;
                    }
                ?>
            </p>
        </div>
        <div class="flex-1 px-10 xl:px-60">
            <h1 class="py-6 text-3xl font-extrabold text-orange">Les activités du domaine</h1>
            @foreach ($activites as $actu)    
            <div class="flex flex-col gap-4 p-4 mb-4 shadow">
                <div>
                    <h1 class="text-2xl font-bold">{{$actu->nom}}</h1>
                    <p>
                        {{$actu->detail}}
                    </p>
                </div>
                <div class="grid lg:grid-cols-{{($galler($actu->id) < 4) ? $galler($actu->id) : 4}} gap-2 grid-cols-1">
                    @foreach ($galleries as $gal)
                        @if ($gal->activite_id == $actu->id)
                            <div class="container">
                                <img src="{{asset('storage/galleries/'.$gal->id.'.png')}}" alt="">
                                 <span class="title">{{$gal->titre}}</span>
                                <span class="text">
                                    <button class="px-10 py-3 text-lg bg-blue-900" @click="zoom=true;img={{$gal->id}}">Zoom</button>
                                </span>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="fixed top-0 flex flex-col w-full min-h-screen gap-4 px-2 lg:p-20" style="background-color: rgba(0, 0, 0, 0.801)" x-show="zoom" x-transition.duration.500ms>
        <div class="relative flex justify-between text-lg font-bold text-white lg:top-0 top-5">
            <h1 x-text="chemin">IMAGE ZOOME</h1>
            <button class="px-5 bg-red-700 hover:bg-red-900" @click="zoom=false">X</button>
        </div>
        <div class="lg:border zoom">
            <img :src="zoomer('<?php echo asset('storage/galleries/'); ?>')" alt="Pas d'image" class="object-contain w-full" style="height: 80vh">
        </div>
    </div>
</div>
