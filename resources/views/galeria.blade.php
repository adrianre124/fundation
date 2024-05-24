@php
    $title = 'Galeria';
    $route = ['Galeria'];
    $description = "Galeria Fundacji Głos Młodych";
@endphp

<x-main :title="$title" :route="$route" :description="$description">
    <div class="flex flex-wrap justify-center content-start my-10">
        <x-galery-image
            src="{{ asset('images/galeria/g1.jpg')}}"
            alt="Pierscionek przód tył duzy Aleksandra Borkowska"
            text="Pierscionek przód tył duzy Aleksandra Borkowska" />
        <x-galery-image
            src="{{ asset('images/galeria/g2.jpg')}}"
            alt="Pierścionek Klaudia Szczecińska"
            text="Pierścionek Klaudia Szczecińska" />
        <x-galery-image
            src="{{ asset('images/galeria/g3.jpg')}}"
            alt="Kartka świąteczna 1"
            text="Kartka świąteczna 1" />
        <x-galery-image
            src="{{ asset('images/galeria/g4.jpg')}}"
            alt="Kartka wielkanocna Klaudia Szczecińska"
            text="Kartka wielkanocna Klaudia Szczecińska" />
        <x-galery-image
            src="{{ asset('images/galeria/g5.jpg')}}"
            alt="kolczyki_pudełko Marta Nowacka"
            text="kolczyki_pudełko Marta Nowacka" />
        <x-galery-image
            src="{{ asset('images/galeria/g6.jpg')}}"
            alt="pierścionek Natalia Szyszka"
            text="pierścionek Natalia Szyszka" />
        <x-galery-image
            src="{{ asset('images/galeria/g7.jpg')}}"
            alt="Wojciech Sobkowiak pierścionek zamknięty"
            text="Wojciech Sobkowiak pierścionek zamknięty" />
        <x-galery-image
            src="{{ asset('images/galeria/g8.jpg')}}"
            alt="Daniel Olszewski kolczyki pudełko2"
            text="Daniel Olszewski kolczyki pudełko2" />
        <x-galery-image
            src="{{ asset('images/galeria/g9.jpg')}}"
            alt="Adam Bylok - pierścionek zaręczynowy - pudelko"
            text="Adam Bylok - pierścionek zaręczynowy - pudelko" />
        <x-galery-image
            src="{{ asset('images/galeria/g10.jpg')}}"
            alt="kartka wielkanocna Kłonica Mateusz"
            text="kartka wielkanocna Kłonica Mateusz" />
    </div>
</x-main>
