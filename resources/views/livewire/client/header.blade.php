<div class="w-screen bg-gray-900 hv-60" style=""{{--  x-data="carousel()" x-init="start()" --}} id="header">
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="text-center carousel">
        
        <div class="flex items-center justify-center w-screen splide hv-60">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($infos as $inf)
                        <li class="splide__slide">
                            <img src="{{asset('storage/headerInfo/'.$inf->id.'.png')}}" alt="" srcset="" class="object-cover w-screen hv-60 animate__animated animate__flash">
                            
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="absolute items-center w-4/5 text-center bg-blue-900 splide__progress md:bottom-48 bottom-36 md:w-1/2">
                <div class="splide__progress__bar">
                </div>
            </div>            
        </div>
        <div class="absolute flex flex-col justify-end w-screen px-10 py-2 text-white {{-- sm:px-30 --}} hv-60 md:px-10 lg:px-36 xl:px-96">
            <div class="flex flex-col items-center  text-white hv-60 {{-- bg-black-transparent --}} w-screen left-0 absolute top-0 pt-20">
                <img src="{{asset('images/logocepro.png')}}" alt="" srcset="" class="mb-5 h-1/4">
                <p class="px-5 mb-2 bg-blue-900">BIENVENUE</p>
                <h1 class="pb-3 text-4xl font-extrabold">CEPROMOR & AEPH</h1>
                {{-- <h1 class="text-6xl font-bold">Ensemble Aidons Nos Frères</h1> --}}
                <h1 class="p-4 text-lg font-extrabold xl:text-6xl bg-black-transparent animate__animated animate__bounceInDown md:text-4xl lg:text-4xl">ASSOCIATION A BUT SANS LUCRATIF</h1>
                                
            </div>
            <div class="grid grid-rows-2 gap-6 md:grid-cols-2 lg:px-40 xl:px-1">
                <button class="p-3 font-semibold transition duration-300 transform bg-yellow-600 rounded-lg hover:scale-90">Devenir partenaire</button>
                <button class="p-3 font-semibold transition duration-300 transform rounded-lg ring-yellow-600 ring-2 hover:scale-90">Devenir partenaire</button>
            </div>
        </div>
    </div>
</div>

<script>
    /* carousel = ()=>{
        return {
            slide:[true, false, false], 
            index : 0,
            interval : 3000,
            start(){
                //console.log(this.slide[this.index]);
                setTimeout(() => {
                    //console.log(this.index, this.slide.length);
                    if(this.index < this.slide.length-1)
                    {
                        this.slide[this.index] = false;
                        this.index++;                        
                        this.slide[this.index] = true;
                        this.start();
                    }
                    else{
                        this.slide[this.index] = false;
                        this.index = 0;
                        this.slide[this.index] = true;
                        this.start();
                    }
                }, this.interval);
            }
        }
    } */
</script>
