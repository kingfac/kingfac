<div class="" x-data>
    <style>
    
        #don {
            background-image: url("{{asset('images/IMG_20200511_091026.jpg')}}");        
            background-repeat: no-repeat;
            background-position: center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        
    </style>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="flex items-center justify-center h-1/3" id="don">
        {{-- <img src="{{asset('storage/domaine/'.$domaine_id.'.png')}}" alt="" srcset="" class="object-cover w-full h-full obj"> --}}
        <h1 class="p-3 text-2xl font-bold text-center text-white bg-orange-transparent">FAIRE UN DON A CEPROMO&AEPH</h1>
    </div>
    <div class="flex flex-col min-h-screen">
        <div class="px-10 py-4 text-xl text-justify xl:px-60">
            <h1 class="py-6 text-3xl font-extrabold text-center text-orange">DON EN ESPECE (FINANCE)</h1>
            <p class="text-center">Pour ceux qui veulent nous faire un don financier veillez effectuer un virement aux comptes ci-dessous</p>
        </div>
        <div class="flex-1 px-10 xl:px-60">
            <h1 class="py-6 text-3xl font-extrabold text-orange">Comptes de virement</h1>
            @foreach ($banks as $bank)    
            <div class="flex items-center justify-center gap-4 p-4 mb-4 shadow">
                <div class="p-2">
                    <img src="{{asset('storage/bank/'.$bank->id.'.png')}}" alt="" class="w-1/2">
                </div>
                <div class="flex flex-col items-end gap-5 text-right">
                    <h1 class="text-2xl font-bold"><b class="px-2">Nom du compte :</b>{{$bank->nom}}</h1>
                    <p>
                        <b class="px-2">Numéro du compte :</b>{{$bank->numero}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="px-10 py-4 text-xl text-justify xl:px-60">
            <h1 class="py-6 text-3xl font-extrabold text-center text-orange">DON EN NATURE (RESSOURCES NON FINANCIERES)</h1>
            <p class="text-center">Pour ceux qui veulent nous faire un don en nature (Matériel et Autres) veillez nous contacter à travers les coordonnées inscrites dans la section <a href="#footer" class="border-b border-yellow-600 text-orange">Contacts</a></p>
        </div>
    </div>
    
</div>
