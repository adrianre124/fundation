<!doctype html>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>
    @isset($title)
        {{ $title }} -
    @endisset
    Fundacja Głos Młodych
</title>
{{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
<link rel="icon" type="image/x-icon" href="/images/cropped-logo-32x32.webp">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://kit.fontawesome.com/d96bec4722.js" crossorigin="anonymous"></script>
<script src="https://cdn.tailwindcss.com"></script>
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
    <div class="px-2 lg:px-9">
        <div>
            <header class="max-w-full bg-white cursor-pointer">
                <div class="flex justify-center items-center">
                    <a href="/"><img class="h-42" src="{{ asset('images/cropped-logo_fgm-2-1.png') }}"
                            alt="Logo Fundacji"></a>
                </div>
            </header>

            <x-nav.mobile />

            <nav class="hidden md:block bg-black text-white min-h-14 lg:h-14">
                <ul
                    class="flex flex-row flex-wrap items-center align-middle justify-center text-sm text-nowrap py-auto h-full">
                    <x-nav.list-item route="/" name="STRONA GŁÓWNA" />

                    <li x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false"
                        class="z-50 box-border text-sm cursor-pointer transform duration-300 flex items-center h-full
                        {{ request()->is('o-fundacji', 'statut-fundacji', 'zarzad-fundacji', 'cele-i-zasady-dzialania', 'dzialalnosc-gospodarcza', 'sprawozdania') ? '' : 'hover:bg-teal-300' }}">
                        <a href="/o-fundacji" class="block py-2 w-full h-full">
                            <p class="py-2 px-2">O FUNDACJI <i class="fa-solid fa-chevron-down fa-sm"></i></p>
                        </a>

                        <!-- Dropdown menu -->
                        <x-dropdown>
                            <x-nav.dropdown-item route="/statut-fundacji">STATUT FUNDACJI</x-nav.dropdown-item>
                            <x-nav.dropdown-item route="/zarzad-fundacji">ZARZĄD FUNDACJI</x-nav.dropdown-item>
                            <x-nav.dropdown-item route="/cele-i-zasady-dzialania">CELE I ZASADY
                                DZIAŁANIA</x-nav.dropdown-item>
                            <x-nav.dropdown-item route="/dzialalnosc-gospodarcza">DZIAŁALNOŚĆ
                                GOSPODARCZA</x-nav.dropdown-item>
                            <x-nav.dropdown-item route="/sprawozdania">SPRAWOZDANIA</x-nav.dropdown-item>
                        </x-dropdown>
                    </li>

                    {{-- <li x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false"
                        class="z-50 box-border text-sm cursor-pointer transform duration-300 flex items-center h-full hover:bg-teal-300">
                        <a href="/#" class="block py-2 w-full h-full">
                            <p class="py-2 px-2">PRACOWNICY FUNDACJI <i class="fa-solid fa-chevron-down fa-sm"></i></p>
                        </a>

                        <x-dropdown>
                        <li>
                            <a href="#" class="block px-4 py-2 transform duration-200 hover:bg-teal-300">
                                <p class="py-2">SPECJALIŚCI FUNDACJI</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 transform duration-200 hover:bg-teal-300">
                                <p class="py-2">REDAKCJA PROTALU GLOSWSCHODU</p>
                            </a>
                        </li>
                        </x-dropdown>
                    </li> --}}


                    <x-nav.list-item route="/praktyki" name="PRAKTYKI" />
                    <x-nav.list-item route="/projekty" name="PROJEKTY" />
                    <x-nav.list-item route="/aktualnosci" name="AKTUALNOŚCI" />
                    <x-nav.list-item route="/galeria" name="GALERIA" />
                    <x-nav.list-item route="/kontakt" name="KONTAKT" />
                </ul>
            </nav>
        </div>

        {{ $slot }}

        <div class="h-128">
            <footer class="h-auto my-5 bottom-0">
                <div class="bg-cover bg-center h-full"
                    style="background-image: url({{ asset('images/tlo1234.png') }});">
                    <div class="grid grid-cols-2 gap-4 text-white text-sm pb-4">
                        <div class="flex flex-wrap justify-center gap-4 italic mt-6">
                            <h2>Oświadczenie</h2>
                            <h4 class="text-center">Niniejszym, w imieniu własnym oraz Fundacji na Rzecz Promocji i
                                Rozwoju „ Głos Młodych” deklarujemy, że Fundacja przyjmuje i stosuje zasady równego
                                traktowania. Prowadzi działalność wolną od dyskryminacji, w szczególności ze względu na
                                takie cechy jak płeć, rasa (kolor skóry), pochodzenie etniczne, narodowość bądź wyznania
                                religijne.</h4>
                            <h5 class="ml-auto mr-24">Zarząd</h5>
                        </div>

                        <div class="flex-1 flex-wrap justify-self-center gap-4 italic relative">
                            <div>
                                <img class="max-h-28 mx-auto" src="{{ asset('images/cropped-logo_fgm-2-1.png') }}"
                                    alt="Logo Fundacji">
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
                    <a href="https://fundacjaglosmlodych.org/" class="hover:text-blue-400">Copyright ©
                        <time>{{ date('Y') }}</time> Fundacja na rzecz promocji i rozwoju – Głos Młodych.</a>
                </div>

                <div class="flex flex-nowrap justify-center space-x-2.5 mt-11">

                    <a class="relative" href="https://www.facebook.com/Fundacja.Glos.Mlodych">
                        <img class="pointer-events-none relative z-10" src="{{ asset('images/Facebook.png') }}"
                            alt="Nasz profil na facebook">
                        <div
                            class="absolute top-0 left-0 bg-blue-600 rounded-sm h-full w-full transform duration-300 hover:rotate-90 hover:bg-cyan-400">
                        </div>
                    </a>

                    <a class="relative" href="https://twitter.com/Portal_e_magnes">
                        <img class="pointer-events-none relative z-10" src="{{ asset('images/Twitter.png') }}"
                            alt="Twitter">
                        <div
                            class="absolute top-0 left-0 bg-blue-600 rounded-sm h-full w-full transform duration-300 hover:rotate-90 hover:bg-cyan-400">
                        </div>
                    </a>

                    <a class="relative" href="mailto:kontakt@fundacjaglosmlodych.org">
                        <img class="pointer-events-none relative z-10" src="{{ asset('images/Mail.png') }}"
                            alt="Napisz do nas">
                        <div
                            class="absolute top-0 left-0 bg-blue-600 rounded-sm h-full w-full transform duration-300 hover:rotate-90 hover:bg-cyan-400">
                        </div>
                    </a>

                    <a class="relative" href="https://fundacjaglosmlodych.org/manifest/">
                        <img class="pointer-events-none relative z-10" src="{{ asset('images/AboutMe.png') }}"
                            alt="AboutMe">
                        <div
                            class="absolute top-0 left-0 bg-blue-600 rounded-sm h-full w-full transform duration-300 hover:rotate-90 hover:bg-cyan-400">
                        </div>
                    </a>
                </div>
            </footer>
        </div>
    </div>
</body>
