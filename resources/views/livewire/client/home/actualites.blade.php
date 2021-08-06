{{-- L'actualite doit etre un carousel --}}

<div class="py-10 bg-gray-100" id="actu">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="flex flex-col items-center justify-center pb-20 text-center">
        <h1 class="text-xl font-bold text-center xl:text-3xl md:text-1xl lg:text-2xl">Récentes actualités</h1>
        <h1 class="w-16 mt-1 border-b-8 border-yellow-600"></h1>
    </div>
    <div class="px-10 py-1">
        <div class="splide" id="actuSplide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="{{asset('images/DSC05884.JPG')}}" alt="" srcset="" class="object-cover w-screen hv-60 animate__animated animate__flash">
                        <div class="relative h-48 px-5 py-5 -mt-40 md:-mt-28 bg-actu-transparent md:h-36 -top-8">
                            <h1 class="pl-4 text-xl font-bold text-white border-l-8 border-blue-900">Titre de l'actualité</h1>
                            <p class="text-justify text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ex, nihil neque tempore ducimus, et omnis quo doloremque nesciunt laborum voluptatibus impedit. Est, quis enim! Pariatur eos quam repellendus veniam?</p>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <img src="{{asset('images/DSC05928.JPG')}}" alt="" srcset="" class="object-cover w-screen hv-60 animate__animated animate__flash">
                        <div class="relative h-48 px-5 py-5 -mt-40 md:-mt-28 bg-actu-transparent md:h-36 -top-8">
                            <h1 class="pl-4 text-xl font-bold text-white border-l-8 border-yellow-600">Bonjour les mamans</h1>
                            <p class="text-justify text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ex, nihil neque tempore ducimus, et omnis quo doloremque nesciunt laborum voluptatibus impedit. Est, quis enim! Pariatur eos quam repellendus veniam?</p>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <img src="{{asset('images/20191229_142307.jpg')}}" alt="" srcset="" class="object-cover w-screen hv-60 animate__animated animate__flash">
                        <div class="relative h-48 px-5 py-5 -mt-40 md:-mt-28 bg-actu-transparent md:h-36 -top-8">
                            <h1 class="pl-4 text-xl font-bold text-white border-l-8 border-white">Titre de PAPA</h1>
                            <p class="text-justify text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ex, nihil neque tempore ducimus, et omnis quo doloremque nesciunt laborum voluptatibus impedit. Est, quis enim! Pariatur eos quam repellendus veniam?</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="py-10 {{-- bg-gradient-to-t from-transparent to-blue-900 --}} flex px-10 gap-4 xl:px-64 md:px-32 lg:px-28 flex-col lg:flex-row" id="resume">
    <div class="flex flex-col items-center justify-between border-2 border-gray-300 border-dotted">
        <div class="img">
            <img src="" alt="CEO-IMAGE" class="object-cover">
        </div>
        <div class="py-2 text-center content">
            <h1 class="text-xl font-bold">Jonathan lutala</h1>
            <p class="text-gray-500 text-bold">CEO et Directeur</p>
            <p class="py-10">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam sunt, obcaecati ex repudiandae, soluta, sapiente tempore consequatur magni repellat quidem neque debitis eaque praesentium laborum blanditiis illo temporibus nostrum dolore?
            </p>
        </div>
    </div>
    <div class="flex flex-col items-center justify-between shadow">
        <div class="img">
            <img src="{{asset('images/IMG-20200612-WA0025.jpg')}}" alt="" class="object-cover">
        </div>
        <div class="px-6 py-2 text-justify content">
            <h1 class="text-xl font-bold">Nôtre Mission</h1>
            <p class="py-3">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum officia quo impedit? Nesciunt, suscipit id ea nisi, fuga perspiciatis possimus aliquam tempora odit repudiandae quia vitae aut perferendis consectetur quisquam!
            </p>
        </div>
        <a href="#" class="w-11/12 px-6 py-3 mb-2 text-lg font-bold text-center text-white bg-yellow-600 rounded">Lire la suite</a>

    </div>
    <div class="flex flex-col items-center justify-between shadow">
        <div class="img">
            <img src="{{asset('images/IMG-20200612-WA0025.jpg')}}" alt="" class="object-cover">
        </div>
        <div class="px-6 py-2 text-justify content">
            <h1 class="text-xl font-bold">Nôtre Mission</h1>
            <p class="py-3">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum officia quo impedit? Nesciunt, suscipit id ea nisi, fuga perspiciatis possimus aliquam tempora odit repudiandae quia vitae aut perferendis consectetur quisquam!
            </p>
        </div>
        <a href="#" class="w-11/12 px-6 py-3 mb-2 text-lg font-bold text-center text-white bg-yellow-600 rounded">Lire la suite</a>

    </div>    
    
</div>
