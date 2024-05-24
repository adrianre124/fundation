@php
    $title = Str::ucfirst(explode('/', $_SERVER['REQUEST_URI'])[1]);
    $routeFirstArgument = "Praktyki";
    $routeSecondArgument = Str::ucfirst(explode('/', $_SERVER['REQUEST_URI'])[1]);
    $route = [$routeFirstArgument, $routeSecondArgument];
    $description = 'Praktyki '. $practice->title;
@endphp

<x-main :title="$title" :route="$route" :description="$description">
    <div class="py-10 space-y-10 text-lg pr-32">
        <h1 class="text-3xl text-center text-blue-700 font-semibold">{{ $practice->title }} - Praktyki</h1>
        <div class="space-y-4">{!! $practice->description !!}</div>

        @if (isset($practice->thumbnail))
            <div class="container w-full mx-auto">
                @if (file_exists(public_path('storage/' . $practice->thumbnail)))
                <img src="{{ asset('storage/' . $practice->thumbnail) }}" alt="Praktyki . {{ $practice->title }}" class="w-full object-cover mx-auto">
                @else
                <img src="{{ asset('storage/thumbnails/' . $practice->thumbnail) }}" alt="obrazek do praktyk" class="w-full object-cover mx-auto">
                @endif
            </div>
        @endif

        <div>
            <h2 class="text-lg"><strong>Obowiązki</strong> (dostosowane do umiejętności praktykanta):</h2>
            <ul class="ml-5 list-disc space-y-2">
                {!! $practice->duties !!}
            </ul>
        </div>

        <div>
            <h2 class="text-lg"><strong>Najważniejsze narzędzia wykorzystywane podczas praktyk:</strong></h2>
            <ul class="ml-5 list-disc space-y-2">
                {!! $practice->tools !!}
            </ul>
        </div>

        <div>
            <figure>
                <a href="/praktyki" target="_blank"
                    class="vc_single_image-wrapper   vc_box_border_grey"><img
                        src="{{asset('images/infografika.png')}}"
                        width="1080" height="566" /></a>
            </figure>
        </div>

        @auth
        <x-buttons.layout>
            <x-buttons.edit route="/praktyki/edit/{{ $practice->id }}"/>
            <x-buttons.delete route="/praktyki/{{ $practice->id }}"/>
        </x-buttons.layout>
        @endauth

        <div class="flex flex-col md:flex-row justify-center">
            <div
                class="border rounded-lg mb-10 bg-blue-400 text-white text-center p-2 mx-auto transition duration-200 hover:bg-cyan-600">
                <a href="/praktyki" class="inline-block h-10 leading-10">Powrót do ofert praktyk</a>
            </div>
        </div>
    </div>
</x-main>
