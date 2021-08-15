<div class="" x-data="{commenter : false}" x-init="startCom({{$faqs}})">
    <style>
    
        #faq {
            background-image: url("{{asset('images/20191229_121556.jpg')}}");        
            background-repeat: no-repeat;
            background-position: center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        
    </style>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="flex items-center justify-center h-1/3" id="faq">
        {{-- <img src="{{asset('storage/domaine/'.$domaine_id.'.png')}}" alt="" srcset="" class="object-cover w-full h-full obj"> --}}
        <h1 class="p-3 text-2xl font-bold text-center text-white bg-blue-transparent">POSEZ VOS QUESTION</h1>
    </div>
    <div class="flex flex-col min-h-screen bg-gray-200">
        <div class="px-10 py-4 text-xl text-justify xl:px-60">
            {{-- <h1 class="py-6 text-3xl font-extrabold text-center text-orange">faq EN ESPECE (FINANCE)</h1>
            <p class="text-center">Pour ceux qui veulent nous faire un faq financier veillez effectuer un virement aux comptes ci-dessous</p> --}}
        </div>
        <div class="flex flex-1 px-10 xl:px-52">
            <div class="flex-1 bg-white">
                <h1 class="px-6 py-6 text-3xl font-extrabold text-orange">Questions recentes</h1>
                <div class="flex flex-col gap-4">                    
                    {{-- Debut de la boucle des question --}}
                    @foreach ($faqs as $faq)    
                    <div class="flex flex-col bg-gray-100">
                        <div class="flex justify-between">
                            <h1 class="text-2xl font-bold"><b class="relative inline-block px-2 py-2 text-white transform skew-x-6 bg-blue-900 -left-5">Objet</b>{{$faq->objet}}</h1>
                        </div>
                        <p class="p-6">
                            {{$faq->contenu}}
                        </p>
                        <div class="flex justify-between">
                            <h1 class="px-6 py-2 font-bold text-gray-400">Par : {{$faq->name}}</h1>
                            <h1 class="px-6 py-2 font-bold text-gray-400">Date : {{$faq->created_at}}</h1>
                        </div>
                        <div class="flex justify-end px-6 py-2 text-white bg-orange">
                            <b class="cursor-pointer hover:text-gray-200" @click="navCom({{$loop->index}})">[{{$ctr($faq->id)}}] Commentaires </b>
                            <button class="px-6 text-blue-900" wire:click="charger({{$faq}})" @click="commenter=!commenter">
                                <p x-show="!commenter">Commnter ici</p>
                                <p x-show="commenter">Nouvelle question ici</p>
                            </button>
                        </div>
                        {{-- Les commentaires --}}
                        <div class="flex flex-col items-end justify-center gap-4 px-10 py-2 bg-orange" x-show="com[{{$loop->index}}]" x-transition.duration.500ms>
                            @foreach ($commentaires as $com)   
                            @if ($com->question == $faq->id)    
                            <div class="bg-gray-100 rounded-lg">
                                <div class="flex justify-between px-5 py-1">
                                    <h1 class="font-bold">{{$com->name}}</h1>
                                </div>
                                <p class="px-5 text-right">
                                    {{$com->comment}}
                                </p>
                                <div class="flex justify-end">
                                    {{-- <h1 class="px-6 py-2 font-bold text-gray-400">Par : {{$com->name}}</h1> --}}
                                    <h1 class="px-6 py-2 text-sm text-gray-400">Date : {{$com->created_at}}</h1>
                                </div>
                                
                            </div>
                            @endif 
                            @endforeach
                        </div>
                        {{-- Fin des commentaires --}}
                    </div>
                    @endforeach
                    {{-- Fin de la boucle des questions --}}
                </div>
            </div>
            <div class="px-10 py-2 text-center bg-gray-100 border-l-8">
                <div x-show="!commenter">
                    <h1 class="py-6 text-3xl font-extrabold text-center text-orange">NOUVELLE QUESTION</h1>
                    <hr>

                    <div class="flex flex-col gap-4 pt-10">
                        <input type="text" wire:model="name" placeholder="Votre nom" class="p-3 rounded-lg">
                        <input type="text" wire:model="objet" placeholder="Objet ou sujet" class="p-3 rounded-lg">
                        <textarea name="contenu" id="" wire:model="contenu" placeholder="Contenu de la question" class="px-3 h-36"></textarea>
                        <div class="flex items-center justify-end">
                            <button class="px-10 py-2 text-lg text-white rounded bg-orange " wire:click="store">Envoyer</button>
                        </div>
                    </div>
                </div>
                <div x-show="commenter">
                    <h1 class="py-6 text-3xl font-extrabold text-center text-orange">Votre commentaire ici</h1>
                    <hr>

                    <div class="flex flex-col gap-4 pt-10">
                        <input type="text" wire:model="nameCom" placeholder="Votre nom" class="p-3 rounded-lg">
                        <textarea name="contenu" id="" wire:model="comment" placeholder="Contenu du commentaire" class="px-3 h-36"></textarea>
                        <div class="flex items-center justify-end">
                            <button class="px-10 py-2 text-lg text-white rounded bg-orange " wire:click="commenter">Envoyer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="px-10 py-4 text-xl text-justify xl:px-60">
            <h1 class="py-6 text-3xl font-extrabold text-center text-orange">faq EN NATURE (RESSOURCES NON FINANCIERES)</h1>
            <p class="text-center">Pour ceux qui veulent nous faire un faq en nature (Matériel et Autres) veillez nous contacter à travers les coorfaqnées inscrites dans la section <a href="#footer" class="border-b border-yellow-600 text-orange">Contacts</a></p>
        </div> --}}
    </div>
    
</div>
