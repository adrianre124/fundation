@php
    $title = 'Fundacja Głos Młodych - Fundacja na rzecz promocji i rozwoju';
    $contents = File::get(storage_path('achivements.json'));
    $achivements = json_decode($contents, true);
@endphp

<x-layout :title="$title">
    <main class="flex flex-col justify-center items-center w-full">
        <x-carousel />

        <section class="bg-zinc-100 bg-opacity-25 min-h-72 px-4 w-full">
            <div
                class="flex flex-nowrap flex-col md:flex-row justify-center py-8 w-full md:space-x-12 space-y-12 md:space-y-0">
                <x-info-square bgColor="border-sky-400" header="Praktyki uczelniane i nie tylko"
                    text="Ideą przedsięwzięcia jest umożliwienie wykorzystania posiadanej wiedzy w celu jej praktycznego wykorzystania. Zdobycie doświadczenia będącego przepustka do przyszłej kariery i osiągniecia zaplanowanych celów." />

                <x-info-square bgColor="border-green-400" header="Fundacja na rzecz promocji i rozwoju Głos Młodych"
                    text="to organizacja pozarządowa o charakterze non-profit. Fundacja utrzymywana jest ze środków własnych Fundatora i drobnych darowizn ludzi dobrej woli." />

                <x-info-square bgColor="border-fuchsia-600" header="Realizując praktyki uczelniane uwzględniamy"
                    text="programy edukacyjne poszczególnych uczelni zawarte w regulaminach praktyk. Wystawiamy stosowne dokumenty. Najlepsi otrzymują referencje i rekomendacje wraz z dokładnym opisem swoich osiągnieć i umiejętności." />
            </div>
        </section>

        @auth
            <section class="w-full relative">
                <div
                    class="relative w-full max-w-full min-h-40 mx-auto h-full md:h-[450px] lg:w-[1470px] bg-[url('./images/licznik22.png')] bg-cover">
                    <div class="grid lg:grid-cols-8 gap-y-20 md:gap-4 text-white text-center h-full w-full py-8">
                        <form id="achivements" method="POST" action="{{ route('updateJson') }}">
                            @csrf
                            <button></button>
                        </form>
                        <h3 class="col-start-4 md:col-start-2 md:col-span-6 text-4xl">Nasze ostatnie dokonania <strong>w
                                liczbach!</strong></h3>
                        <div class="col-start-4 md:col-start-2 md:col-span-2 text-3xl">Zrealizowaliśmy <br><strong
                                class="text-5xl">
                                <input class="text-black" type="text" id="realized" name="realized" form="achivements"
                                    value="{{ $achivements['realized'] }}">
                            </strong><br> praktyk</div>
                        <div class="col-start-4 md:col-span-2 text-3xl">w tym <br><strong class="text-5xl">
                                <input class="text-black" type="text" id="college" name="college" form="achivements"
                                    value="{{ $achivements['college'] }}"></strong><br> praktyk uczelnianych</div>
                        <div class="col-start-4 md:col-start-6 md:col-span-2 text-3xl">Współpracujemy z <br><strong
                                class="text-5xl"><input class="text-black" type="text" id="people" name="people"
                                    form="achivements" value="{{ $achivements['people'] }}"></strong><br> osobami</div>
                        <div class="col-start-4 md:col-start-1 md:col-span-8 text-xl">Z zakresu dziennikarstwa, redakcji,
                            tłumaczeń, moderowania, programowania -różne technologie, reklamy, social mediów, administracji
                            systemów serwerowych, fotografii, ogólnie rozumianej grafiki , HR-u, administracji.</div>
                    </div>
                </div>
            </section>
        @endauth

        @guest
            <section class="w-full relative">
                <div
                    class="relative w-full max-w-full min-h-40 mx-auto h-full md:h-[450px] lg:w-[1470px] bg-[url('./images/licznik22.png')] bg-cover">
                    <div class="grid lg:grid-cols-8 gap-y-20 md:gap-4 text-white text-center h-full w-full py-8">
                        <h3 class="col-start-4 md:col-start-2 md:col-span-6 text-4xl">Nasze ostatnie dokonania <strong>w
                                liczbach!</strong></h3>
                        <div class="col-start-4 md:col-start-2 md:col-span-2 text-3xl">Zrealizowaliśmy <br><strong
                                class="text-5xl">{{ $achivements['realized'] }}</strong><br> praktyk</div>
                        <div class="col-start-4 md:col-span-2 text-3xl">w tym <br><strong
                                class="text-5xl">{{ $achivements['college'] }}</strong><br> praktyk uczelnianych</div>
                        <div class="col-start-4 md:col-start-6 md:col-span-2 text-3xl">Współpracujemy z <br><strong
                                class="text-5xl">{{ $achivements['people'] }}</strong><br> osobami</div>
                        <div class="col-start-4 md:col-start-1 md:col-span-8 text-xl">Z zakresu dziennikarstwa, redakcji,
                            tłumaczeń, moderowania, programowania -różne technologie, reklamy, social mediów, administracji
                            systemów serwerowych, fotografii, ogólnie rozumianej grafiki , HR-u, administracji.</div>
                    </div>
                </div>
            </section>
        @endguest

        <section>
            <div class="grid lg:grid-cols-2 items-start w-full max-w-full xl:max-w-[1470px] mx-auto my-4">
                <div class="space-x-2 flex flex-col mb-12">
                    <h1 class="text-center text-3xl font-bold">Aktualności</h1>

                    @foreach (\App\Models\Post::take(3)->get() as $post)
                        <x-welcome-post :post="$post" />
                    @endforeach

                    <div class="text-center font-semibold text-blue-600"><a href="/aktualnosci">Zobacz Wszystkie</a>
                    </div>
                </div>

                <div class="space-x-2 flex flex-col mb-12">
                    <h1 class="text-center text-3xl font-bold">Projekty</h1>

                    @foreach ($projects as $project)
                        <x-welcome-post :post="$project" />
                    @endforeach

                    <div class="text-center font-semibold text-blue-600"><a href="/projekty">Zobacz Wszystkie</a></div>
                </div>
            </div>
        </section>

        <section>
            <div class="flex flex-col justify-center align-center items-center my-24">
                <h4 class="font-semibold text-lg">Pomóż nam promować talenty !</h4><br>
                <h2 class="font-semibold text-3xl">Skontaktuj się z nami!</h2><br>
                <p>Tel: <a href="tel:+48794250440" class="underline text-blue-600">794 250 440</a>, <a
                        href="tel:+48733636477" class="underline text-blue-600">733 636 477</a></p><br>
                <p>e-mail: <a href="mailto:kontakt@fundacjaglosmlodych.org"
                        class="underline text-blue-600">kontakt@fundacjaglosmlodych.org</a></p><br>
            </div>
        </section>
    </main>
</x-layout>
