<style>
    
    #tout {
        background-image: url("{{asset('storage/headerInfo/'.$headers[0]->id.'.png')}}");        
        background-repeat: no-repeat;
        background-position: center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
<div class="bg-fixed" id="tout">
  <div class="" style="background-color: rgba(137, 153, 243, 0.719)">
        {{-- Do your work, then step back. --}}
    <div class="text-center">
        {{-- <img src="{{asset('storage/headerInfo/'.$headers[0]->id.'.png')}}" alt="" class="object-cover w-full h-60"> --}}
        <h1 class="mb-5 text-2xl font-bold">APROPOS DU CEPROMOR&AEPH</h1>
        <hr>
    </div>
    <div class="flex flex-col">
        @foreach ($infos as $inf)
            <div class="flex flex-col py-5 bg-gray-{{($inf->id % 2) ? 1 : 0}}00 min-h-screen justify-center place-items-center text-{{($inf->id % 2) ? 'black' : 'white'}} info" id="info{{$inf->id}}">
                <h2 class="px-10 py-5 text-lg font-bold border-l-8 border-r-8 border-blue-900 lg:text-4xl lg:px-72 md:text-3xl">{{$inf->lib}}</h2>
                <div class="flex items-center flex-1 px-10 py-5 text-justify tex-lg lg:text-3xl lg:px-72 md:text-2xl">
                    <div class="">
                        <?php echo $inf->info ;?>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
  </div>
</div>
