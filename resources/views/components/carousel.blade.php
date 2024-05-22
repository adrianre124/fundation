<section class="w-full min-h-auto hidden md:block ">
    <div x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false" id="default-carousel"
        class="relative cursor-pointer w-full" data-carousel="slide">
        <!-- Carousel wrapper /fix images getting smaller on screen resize -->
        <x-wrapper>
            <!-- Item 1 -->
            <x-carousel.item image="{{asset('images/19.png')}}" alt="Weseli uczniowie" header="Wśród celów statutowych Fundacji znajdują się:">
                <x-carousel.list>
                    <x-carousel.list-item>- Działania i inicjatywy wspierające rozwój
                        innowacyjności.</x-carousel.list-item>
                    <x-carousel.list-item>- Popieranie i realizacja wszelkich inicjatyw kulturalnych, edukacyjnych i
                        społecznych.</x-carousel.list-item>
                </x-carousel.list>
            </x-carousel.item>
            <!-- Item 2 -->
            <x-carousel.item image="{{asset('images/20.png')}}" alt="Wesoła grupa studentów " header="Promocja">
                <x-carousel.list>
                    <x-carousel.list-item>- Zachęcanie do rozwoju, pogłębiania swojej wiedzy i podnoszenia swoich
                        kwalifikacji.</x-carousel.list-item>
                    <x-carousel.list-item>- Popularyzacja polskiej kultury i sztuki za granicą</x-carousel.list-item>
                </x-carousel.list>
            </x-carousel.item>
            <!-- Item 3 -->
            <x-carousel.item image="{{asset('images/21.png')}}" alt="sześć dłoni położonych na sobie " header="Wsparcie">
                <x-carousel.list>
                    <x-carousel.list-item>- Integrowanie środowisk twórczych.</x-carousel.list-item>
                    <x-carousel.list-item>- Wspieranie projektów proekologicznych oraz propagowanie idei ochrony
                        środowiska.</x-carousel.list-item>
                    <x-carousel.list-item>- Wspieranie transferu polskich osiągnięć naukowych do praktyki
                        gospodarczej.</x-carousel.list-item>
                </x-carousel.list>
            </x-carousel.item>
            <!-- Item 4 -->
            <x-carousel.item image="{{asset('images/22.png')}}" alt="cztery wesołe osoby patrzące do przodu " header="Rozwój">
                <x-carousel.list>
                    <x-carousel.list-item>- Działalność wspomagająca rozwój gospodarczy, w tym rozwój
                        przedsiębiorczości.</x-carousel.list-item>
                    <x-carousel.list-item>- Działania na rzecz realizacji projektów
                        badawczo-rozwojowych.</x-carousel.list-item>
                    <x-carousel.list-item>- Działalność wspomagająca rozwój wspólnot i społeczności
                        lokalnych.</x-carousel.list-item>
                </x-carousel.list>
            </x-carousel.item>
            <!-- Item 5 -->
            <x-carousel.item image="{{asset('images/23.png')}}" alt="dwie dłonie w uścisku " header="Pomoc">
                <x-carousel.list>
                    <x-carousel.list-item>- Pomoc edukacyjna dla dzieci niewidomych, słabowidzących i
                        niepełnosprawnych.</x-carousel.list-item>
                </x-carousel.list>
            </x-carousel.item>
            <!-- Slider controls -->
            <x-carousel.slider-controls />
            <!-- Slider indicators -->
            <x-carousel.slider />
        </x-wrapper>
    </div>
</section>
