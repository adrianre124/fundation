@php

@endphp

<x-layout>
    <main>
        <section class="w-full h-auto cursor-pointer">
            <div x-data="{open: false}" @mouseover="open = true" @mouseout="open = false" id="default-carousel" class="relative w-11/12 mx-auto" data-carousel="slide">
                <!-- Carousel wrapper /fix images getting smaller on screen resize -->
                <div class="relative h-56 max-width-full overflow-hidden md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./images/19.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Wśród celów statutowych Fundacji znajdują się:">
                        <div class="flex-col justify-center align-center absolute text-white text-center h-full w-full mt-8">
                            <h2 class="text-3xl font-semibold w-11/12 m-auto text-shadow shadow-gray-400"
                                x-transition:enter="transition ease-out duration-400"
                                x-transition:enter-start="opacity-0 -translate-y-6"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-400"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0 -translate-y-6"
                            >Wśród celów statutowych Fundacji znajdują się:</h2>
                            <br>
                            <hr class="w-20 font-bold m-auto">
                            <br>
                            <div class="text-2xl mt-12" >
                                <ul class="space-y-3">
                                    <li class="inline-block bg-stone-900 bg-opacity-25 w-auto">- Działania i inicjatywy wspierające rozwój innowacyjności.</li>
                                    <br>
                                    <li class="inline-block bg-stone-900 bg-opacity-25 w-auto">- Popieranie i realizacja wszelkich inicjatyw kulturalnych, edukacyjnych i społecznych.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./images/20.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Promocja">
                        <div class="flex-col justify-center align-center absolute text-white text-center h-full w-full mt-8">
                            <h2 class="text-3xl font-semibold w-11/12 m-auto text-shadow shadow-gray-400"
                                x-transition:enter="transition ease-out duration-400"
                                x-transition:enter-start="opacity-0 -translate-y-6"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-400"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0 -translate-y-6"
                            >Promocja</h2>
                            <br>
                            <hr class="w-20 font-bold m-auto">
                            <br>
                            <div class="text-2xl mt-12" >
                                <ul class="space-y-3">
                                    <li class="inline-block bg-stone-900 bg-opacity-25 w-auto">- Zachęcanie do rozwoju, pogłębiania swojej wiedzy i podnoszenia swoich kwalifikacji.</li>
                                    <br>
                                    <li class="inline-block bg-stone-900 bg-opacity-25 w-auto">- Popularyzacja polskiej kultury i sztuki za granicą.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./images/21.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Wsparcie">
                        <div class="flex-col justify-center align-center absolute text-white text-center h-full w-full mt-8">
                            <h2 class="text-3xl font-semibold w-11/12 m-auto text-shadow shadow-gray-400"
                                x-transition:enter="transition ease-out duration-400"
                                x-transition:enter-start="opacity-0 -translate-y-6"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-400"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0 -translate-y-6"
                            >Wsparcie</h2>
                            <br>
                            <hr class="w-20 font-bold m-auto">
                            <br>
                            <div class="text-2xl mt-12" >
                                <ul class="space-y-3">
                                    <li class="inline-block bg-stone-900 bg-opacity-25 w-auto">- Integrowanie środowisk twórczych.</li>
                                    <br>
                                    <li class="inline-block bg-stone-900 bg-opacity-25 w-auto">- Wspieranie projektów proekologicznych oraz propagowanie idei ochrony środowiska.</li>
                                    <br>
                                    <li class="inline-block bg-stone-900 bg-opacity-25 w-auto">- Wspieranie transferu polskich osiągnięć naukowych do praktyki gospodarczej.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./images/22.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Rozwój">
                        <div class="flex-col justify-center align-center absolute text-white text-center h-full w-full mt-8">
                            <h2 class="text-3xl font-semibold w-11/12 m-auto text-shadow shadow-gray-400"
                                x-transition:enter="transition ease-out duration-400"
                                x-transition:enter-start="opacity-0 -translate-y-6"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-400"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0 -translate-y-6"
                            >Rozwój</h2>
                            <br>
                            <hr class="w-20 font-bold m-auto">
                            <br>
                            <div class="text-2xl mt-12" >
                                <ul class="space-y-3">
                                    <li class="inline-block bg-stone-900 bg-opacity-25 w-auto">- Działalność wspomagająca rozwój gospodarczy, w tym rozwój przedsiębiorczości.</li>
                                    <br>
                                    <li class="inline-block bg-stone-900 bg-opacity-25 w-auto">- Działania na rzecz realizacji projektów badawczo-rozwojowych.</li>
                                    <br>
                                    <li class="inline-block bg-stone-900 bg-opacity-25 w-auto">- Działalność wspomagająca rozwój wspólnot i społeczności lokalnych.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="./images/23.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Pomoc">
                        <div class="flex-col justify-center align-center absolute text-white text-center h-full w-full mt-8">
                            <h2 class="text-3xl font-semibold w-11/12 m-auto text-shadow shadow-gray-400"
                                x-transition:enter="transition ease-out duration-400"
                                x-transition:enter-start="opacity-0 -translate-y-6"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-400"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0 -translate-y-6"
                            >Pomoc</h2>
                            <br>
                            <hr class="w-20 font-bold m-auto">
                            <br>
                            <div class="text-2xl mt-12" >
                                <ul class="space-y-3">
                                    <li class="inline-block bg-stone-900 bg-opacity-25 w-auto">- Pomoc edukacyjna dla dzieci niewidomych, słabowidzących i niepełnosprawnych.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 opacity-75 transition duration-200 hover:opacity-100 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-2 h-2 rounded-full outline outline-2 outline-gray-200" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-2 h-2 rounded-full outline outline-2 outline-gray-200" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-2 h-2 rounded-full outline outline-2 outline-gray-200" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-2 h-2 rounded-full outline outline-2 outline-gray-200" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    <button type="button" class="w-2 h-2 rounded-full outline outline-2 outline-gray-200" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button x-show="open"  x-transition:enter="transition ease-out duration-400"
                    x-transition:enter-start="opacity-0 -translate-x-6"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-400"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0 -translate-x-6" type="button" class=" absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 bg-white/30 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button x-show="open" x-transition:enter="transition ease-out duration-400"
                    x-transition:enter-start="opacity-0 translate-x-6"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-400"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0 translate-x-6" type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 bg-white/30 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </section>

        <section class="bg-gray-100 min-h-72">
            <div class="flex flex-nowrap justify-center py-6 max-w-11/12 space-x-12">
                <div class="block max-w-sm p-6 bg-white border-y-4 border-sky-400 shadow">
                    <h5 class="mb-2 text-lg font-semibold tracking-tight">Praktyki uczelniane i nie tylko</h5>
                    <p class="font-normal text-gray-700">Ideą przedsięwzięcia jest umożliwienie wykorzystania posiadanej wiedzy w celu jej praktycznego wykorzystania. Zdobycie doświadczenia będącego przepustka do przyszłej kariery i osiągniecia zaplanowanych celów.</p>
                </div>

                <div class="block max-w-sm p-6 bg-white border-y-4 border-green-400 shadow">
                    <h5 class="mb-2 text-lg font-semibold tracking-tight">Fundacja na rzecz promocji i rozwoju Głos Młodych</h5>
                    <p class="font-normal text-gray-700">to organizacja pozarządowa o charakterze non-profit. Fundacja utrzymywana jest ze środków własnych Fundatora i drobnych darowizn ludzi dobrej woli.</p>
                </div>

                <div class="block max-w-sm p-6 bg-white border-y-4 border-fuchsia-600 shadow">
                    <h5 class="mb-2 text-lg font-semibold tracking-tight">Realizując praktyki uczelniane uwzględniamy</h5>
                    <p class="font-normal text-gray-700">programy edukacyjne poszczególnych uczelni zawarte w regulaminach praktyk. Wystawiamy stosowne dokumenty. Najlepsi otrzymują referencje i rekomendacje wraz z dokładnym opisem swoich osiągnieć i umiejętności.</p>
                </div>
            </div>
        </section>

        <section class="w-full relative">
            <div class="relative h-56 max-width-full overflow-hidden w-10/12 mx-auto md:h-96">
                <img class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" src="./images/licznik22.png" alt="Nasze ostatnie dokonania w liczbach!">

                <div class="grid grid-cols-8 gap-4 absolute text-white text-center h-full w-full py-8">
                    <h3 class="col-start-2 col-span-6 text-4xl">Nasze ostatnie dokonania <strong>w liczbach!</strong></h3>
                    <div class="col-start-2 col-span-2 text-3xl">Zrealizowaliśmy <br><strong class="text-5xl">3768</strong><br> praktyk</div>
                    <div class="col-start-4 col-span-2 text-3xl">w tym <br><strong class="text-5xl">3242</strong><br> praktyk uczelnianych</div>
                    <div class="col-start-6 col-span-2 text-3xl" >Współpracujemy z <br><strong class="text-5xl">70</strong><br> osobami</div>
                    <div class="col-start-1 col-span-8 text-xl">Z zakresu dziennikarstwa, redakcji, tłumaczeń, moderowania, programowania -różne technologie, reklamy, social mediów, administracji systemów serwerowych, fotografii, ogólnie rozumianej grafiki , HR-u, administracji.</div>
                </div>
            </div>
        </section>

        <section>
            <div class="grid grid-cols-2 w-10/12 mx-auto my-8">
                <div>
                    <h1 class="text-center text-3xl font-bold">Aktualności</h1>

                    @foreach ($aktualnosci as $post)
                        <x-post :post="$post"/>
                    @endforeach

                    <div class="mt-4 text-center text-lg font-semibold text-blue-600"><a href="/aktualnosci">Zobacz Wszystkie</a></div>
                </div>

                <div>
                    <h1 class="text-center text-3xl font-bold">Projekty</h1>

                    @foreach ($projects as $project)
                        <x-post :post="$project"/>
                    @endforeach

                    <div class="mt-4 text-center text-lg font-semibold text-blue-600"><a href="/projekty">Zobacz Wszystkie</a></div>
                </div>
            </div>
        </section>

        <section>
            <div class="flex flex-col justify-center align-center items-center my-24">
                <h4 class="font-semibold text-lg">Pomóż nam promować talenty !</h4><br>
                <h2 class="font-semibold text-3xl">Skontaktuj się z nami!</h2><br>
                <p>Tel: <a href="tel:+48794250440" class="underline text-blue-600">794 250 440</a>, <a href="tel:+48733636477" class="underline text-blue-600">733 636 477</a></p><br>
                <p>e-mail: <a href="mailto:kontakt@fundacjaglosmlodych.org" class="underline text-blue-600">kontakt@fundacjaglosmlodych.org</a></p><br>
            </div>
        </section>
    </main>
</x-layout>
