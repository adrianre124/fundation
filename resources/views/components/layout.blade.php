<!doctype html>

<title>Laravel From Scratch Blog</title>
{{--<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@vite('resources/css/app.css')
<style>
    html {
        scroll-behavior: smooth;
    }

    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <div class="px-9">
        <div>
            <header class="max-w-full bg-white cursor-pointer">
                <div class="flex justify-center items-center">
                    <a href="/"><img class="h-42" src="{{ asset('images/cropped-logo_fgm-2-1.png')}}" alt="Logo Fundacji" ></a>
                </div>
            </header>

            <nav class="bg-black text-white h-10">
                <ul class="flex flex-row flex-wrap items-center align-middle justify-center text-xs text-nowrap py-auto h-full">
                    <li class="box-border cursor-pointer transform duration-300 h-full flex items-center px-2 hover:bg-teal-400">
                        <a href="/"><p class=py-2>STRONA GŁÓWNA</p></a>
                    </li>

                    <li x-data="{open: false}" @mouseover="open = true" @mouseout="open = false"
                        class="z-50 relative box-border cursor-pointer transform duration-300 h-full flex items-center px-2 hover:bg-teal-400">
                        <span class="inline-flex items-center">
                            <a href="/o-fundacji">O FUNDACJI</a> <svg class="w-2.5 h-2.5 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </span>

                        <!-- Dropdown menu -->
                        <div x-show="open" x-transition:enter="transition ease-out duration-400"
                            x-transition:enter-start="opacity-0 -translate-x-6"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-400"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0 -translate-x-6"
                            class="absolute top-10 left-0 z-50 bg-teal-400 divide-y divide-teal-100 min-w-48">
                            <ul class="text-xs text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="/statut-fundacji" class="block px-4 py-2 transform duration-200 hover:bg-teal-300"><p class=py-2>STATUT FUNDACJI</p></a>
                                </li>
                                <li>
                                    <a href="/zarzad-fundacji" class="block px-4 py-2 transform duration-200 hover:bg-teal-300"><p class=py-2>ZARZĄD FUNDACJI</p></a>
                                </li>
                                <li>
                                    <a href="/cele-i-zasady-dzialania" class="block px-4 py-2 transform duration-200 hover:bg-teal-300"><p class=py-2>CELE I ZASADY DZIAŁANIA</p></a>
                                </li>
                                <li>
                                    <a href="/dzialalnosc-gospodarcza" class="block px-4 py-2 transform duration-200 hover:bg-teal-300"><p class=py-2>DZIAŁALNOŚĆ GOSPODARCZA</p></a>
                                </li>
                                <li>
                                    <a href="/sprawozdania" class="z-50 block px-4 py-2 transform duration-200 hover:bg-teal-300"><p class=py-2>SPRAWOZDANIA</p></a>
                                </li>
                                </ul>
                        </div>
                    </li>

                    <li x-data="{open: false}" @mouseover="open = true" @mouseout="open = false"
                        class="z-50 relative box-border cursor-pointer transform duration-300 h-full flex items-center px-2 hover:bg-teal-400">
                        <span class="inline-flex items-center">
                            PRACOWNICY FUNDACJI <svg class="w-2.5 h-2.5 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </span>

                        <!-- Dropdown menu -->
                        <div x-show="open" x-transition:enter="z-10 transition ease-out duration-400"
                            x-transition:enter-start="opacity-0 -translate-x-6"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-400"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0 -translate-x-6"
                            class="absolute top-10 left-0 z-10 bg-teal-400 divide-y divide-teal-100 min-w-48">
                            <ul class="text-xs text-gray-700 dark:text-gray-200">
                            <li>
                                <a href="#" class="block px-4 py-2 transform duration-200 hover:bg-teal-300">SPECJALIŚCI FUNDACJI</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 transform duration-200 hover:bg-teal-300">REDAKCJA PROTALU GLOSWSCHODU</a>
                            </li>
                            </ul>
                        </div>
                    </li>


                    <li class="box-border cursor-pointer transform duration-300 h-full flex items-center px-2 hover:bg-teal-400"><a href="/praktyki"><p class=py-2>PRAKTYKI</p></a></li>
                    <li class="box-border cursor-pointer transform duration-300 h-full flex items-center px-2 hover:bg-teal-400"><p class=py-2>PROJEKTY</p></li>
                    <li class="box-border cursor-pointer transform duration-300 h-full flex items-center px-2 hover:bg-teal-400"><p class=py-2>AKTUALNOŚCI</p></li>
                    <li class="box-border cursor-pointer transform duration-300 h-full flex items-center px-2 hover:bg-teal-400"><p class=py-2>GALERIA</p></li>
                    <li class="box-border cursor-pointer transform duration-300 h-full flex items-center px-2 hover:bg-teal-400"><p class=py-2>KONTAKT</p></li>
                </ul>
            </nav>
        </div>

        {{ $slot }}

        <div class="h-128">
            <footer class="h-auto my-5 bottom-0">
                    <div class="bg-cover bg-center h-full" style="background-image: url({{ asset('images/tlo1234.png') }});">
                        <div class="grid grid-cols-2 gap-4 text-white text-sm pb-4">
                            <div class="flex flex-wrap justify-center gap-4 italic mt-6">
                                <h2>Oświadczenie</h2>
                                <h4 class="text-center">Niniejszym, w imieniu własnym oraz Fundacji na Rzecz Promocji i Rozwoju „ Głos Młodych” deklarujemy, że Fundacja przyjmuje i stosuje zasady równego traktowania. Prowadzi działalność wolną od dyskryminacji, w szczególności ze względu na takie cechy jak płeć, rasa (kolor skóry), pochodzenie etniczne, narodowość bądź wyznania religijne.</h4>
                                <h5 class="ml-auto mr-24">Zarząd</h5>
                            </div>

                            <div class="flex-1 flex-wrap justify-self-center gap-4 italic relative">
                                <div>
                                    <img class="max-h-28 mx-auto" src="{{ asset('images/cropped-logo_fgm-2-1.png')}}" alt="Logo Fundacji" >
                                </div>

                                <div class="absolute w-full top-24">
                                    <h2 class="text-center text-xs"><strong>Wsparcie</strong></h2>
                                    <h4 class="text-center text-xs">
                                        Fundacja na Rzecz Promocji i Rozwoju „Głos Młodych”
                                        <br>
                                        Konto: Bank Pekao SA. Poznań ul. Masztalerska 8a
                                        <br>
                                        Nr Konta: <strong>92 1240 1763 1111 0010 7475 8053</strong>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center text-gray-400 italic mt-12">
                        <a href="https://fundacjaglosmlodych.org/" class="hover:text-blue-400">Copyright © <time>{{ date('Y') }}</time> Fundacja na rzecz promocji i rozwoju – Głos Młodych.</a>
                    </div>

                    <div class="flex flex-nowrap justify-center space-x-2.5 mt-11">

                        <a class="relative" href="https://www.facebook.com/Fundacja.Glos.Mlodych">
                            <img class="pointer-events-none relative z-10" src="{{ asset('images/Facebook.png') }}" alt="Nasz profil na facebook">
                            <div class="absolute top-0 left-0 bg-blue-600 rounded-sm h-full w-full transform duration-300 hover:rotate-90 hover:bg-cyan-400"></div>
                        </a>

                        <a class="relative" href="https://twitter.com/Portal_e_magnes">
                            <img class="pointer-events-none relative z-10" src="{{ asset('images/Twitter.png') }}" alt="Twitter">
                            <div class="absolute top-0 left-0 bg-blue-600 rounded-sm h-full w-full transform duration-300 hover:rotate-90 hover:bg-cyan-400"></div>
                        </a>

                        <a class="relative" href="mailto:kontakt@fundacjaglosmlodych.org">
                            <img class="pointer-events-none relative z-10" src="{{ asset('images/Mail.png') }}" alt="Napisz do nas">
                            <div class="absolute top-0 left-0 bg-blue-600 rounded-sm h-full w-full transform duration-300 hover:rotate-90 hover:bg-cyan-400"></div>
                        </a>

                        <a class="relative" href="https://fundacjaglosmlodych.org/manifest/">
                            <img class="pointer-events-none relative z-10" src="{{ asset('images/AboutMe.png') }}" alt="AboutMe">
                            <div class="absolute top-0 left-0 bg-blue-600 rounded-sm h-full w-full transform duration-300 hover:rotate-90 hover:bg-cyan-400"></div>
                        </a>
                    </div>
            </footer>
        </div>
    </div>
</body>
