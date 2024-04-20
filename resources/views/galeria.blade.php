@php
    $title = 'Galeria';
    $route = ['Galeria'];
@endphp

<x-main :title="$title" :route="$route">
    <div class="flex flex-wrap justify-center my-10">
        <x-galery-image
            src="https://fundacjaglosmlodych.org/wp-content/uploads/photo-gallery/imported_from_media_libray/Pierscionek-przod-tyl-duzy-Aleksandra-Borkowska.png?bwg=1674651742"
            text="Pierscionek przód tył duzy Aleksandra Borkowska" />
        <x-galery-image
            src="https://fundacjaglosmlodych.org/wp-content/uploads/photo-gallery/imported_from_media_libray/Pierscionek-klaudia-szczecinska.png?bwg=1674651742"
            text="Pierścionek Klaudia Szczecińska" />
        <x-galery-image
            src="https://fundacjaglosmlodych.org/wp-content/uploads/photo-gallery/imported_from_media_libray/Kartka-swiateczna-1.jpg?bwg=1674651742"
            text="Kartka świąteczna 1" />
        <x-galery-image
            src="https://fundacjaglosmlodych.org/wp-content/uploads/photo-gallery/imported_from_media_libray/Kartka-wielkanocna-Klaudia-Szczecinska.png?bwg=1674651742"
            text="Kartka wielkanocna Klaudia Szczecińska" />
        <x-galery-image
            src="https://fundacjaglosmlodych.org/wp-content/uploads/photo-gallery/imported_from_media_libray/kolczyki_pudelko-Marta-Nowacka.png?bwg=1674651742"
            text="kolczyki_pudełko Marta Nowacka" />
        <x-galery-image
            src="https://fundacjaglosmlodych.org/wp-content/uploads/photo-gallery/imported_from_media_libray/pierscionek-Natalia-Szyszka.png?bwg=1674651742"
            text="pierścionek Natalia Szyszka" />
        <x-galery-image
            src="https://fundacjaglosmlodych.org/wp-content/uploads/photo-gallery/imported_from_media_libray/Wojciech_Sobkowiak_pierscionek_zamkniety.png?bwg=1674651742"
            text="Wojciech Sobkowiak pierścionek zamknięty" />
        <x-galery-image
            src="https://fundacjaglosmlodych.org/wp-content/uploads/photo-gallery/imported_from_media_libray/DanielOlszewski_kolczyki_pudelko2.png?bwg=1674651742"
            text="Daniel Olszewski kolczyki pudełko2" />
        <x-galery-image
            src="https://fundacjaglosmlodych.org/wp-content/uploads/photo-gallery/imported_from_media_libray/Adam-Bylok-pierscionek-zareczynowy-pudelko.png?bwg=1674651742"
            text="Adam Bylok - pierścionek zaręczynowy - pudelko" />
        <x-galery-image
            src="https://fundacjaglosmlodych.org/wp-content/uploads/photo-gallery/imported_from_media_libray/kartka-wielkanocna-klonica-mateusz.png?bwg=1674651195"
            text="kartka wielkanocna Kłonica Mateusz" />
    </div>
</x-main>
