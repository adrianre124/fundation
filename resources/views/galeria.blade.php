@php
    $title = 'Galeria';
    $route = ['Galeria'];
@endphp

<x-main :title="$title" :route="$route">
    <div class="flex flex-wrap justify-center my-10">
        <x-galery-image
            src="{{ asset('images/galeria/g1.jpg')}}"
            text="Pierscionek przód tył duzy Aleksandra Borkowska" />
        <x-galery-image
            src="{{ asset('images/galeria/g2.jpg')}}"
            text="Pierścionek Klaudia Szczecińska" />
        <x-galery-image
            src="{{ asset('images/galeria/g3.jpg')}}"
            text="Kartka świąteczna 1" />
        <x-galery-image
            src="{{ asset('images/galeria/g4.jpg')}}"
            text="Kartka wielkanocna Klaudia Szczecińska" />
        <x-galery-image
            src="{{ asset('images/galeria/g5.jpg')}}"
            text="kolczyki_pudełko Marta Nowacka" />
        <x-galery-image
            src="{{ asset('images/galeria/g6.jpg')}}"
            text="pierścionek Natalia Szyszka" />
        <x-galery-image
            src="{{ asset('images/galeria/g7.jpg')}}"
            text="Wojciech Sobkowiak pierścionek zamknięty" />
        <x-galery-image
            src="{{ asset('images/galeria/g8.jpg')}}"
            text="Daniel Olszewski kolczyki pudełko2" />
        <x-galery-image
            src="{{ asset('images/galeria/g9.jpg')}}"
            text="Adam Bylok - pierścionek zaręczynowy - pudelko" />
        <x-galery-image
            src="{{ asset('images/galeria/g10.jpg')}}"
            text="kartka wielkanocna Kłonica Mateusz" />
    </div>
</x-main>
