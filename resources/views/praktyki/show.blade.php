@php
    $title = Str::ucfirst(explode('/', $_SERVER['REQUEST_URI'])[1]);
    $routeFirstArgument = Str::ucfirst(explode('/', $_SERVER['REQUEST_URI'])[1]);
    $routeSecondArgument = Str::ucfirst(explode('/', $_SERVER['REQUEST_URI'])[2]);
    $route = [$routeFirstArgument, $routeSecondArgument];
@endphp

<x-main :title="$title" :route="$route">
    <div class="py-10 space-y-10">
        <h1 class="text-3xl text-center text-blue-600 font-semibold">{{ $practice->title }} - Praktyki</h1>
        <div>{!! $practice->description !!}</div>

        @if (isset($practice->thumbnail))
            <div class="container w-full mx-auto">
                @if (file_exists(public_path('storage/' . $practice->thumbnail)))
                <img src="{{ asset('storage/' .$practice->thumbnail) }}" alt="" class="w-full object-cover mx-auto">
                @else
                <img src="{{ asset('storage/thumbnails/' . $practice->thumbnail) }}" alt="" class="w-full object-cover mx-auto">
                @endif
            </div>
        @endif

        <div>
            <h2 class="mb-10 text-lg"><strong>Obowiązki:</strong></h2>
            <ul class="list-disc space-y-2">
                {!! $practice->duties !!}
            </ul>
        </div>

        <div>
            <h2 class="mb-10 text-lg"><strong>Najważniejsze narzędzia wykorzystywane podczas praktyk:</strong></h2>
            <ul class="list-disc space-y-2">
                {!! $practice->tools !!}
            </ul>
        </div>

        <div class="wpb_single_image wpb_content_element vc_align_left">

            <figure class="wpb_wrapper vc_figure">
                <a href="/praktyki" target="_blank" class="vc_single_image-wrapper   vc_box_border_grey"><img
                        fetchpriority="high" decoding="async" class="vc_single_image-img "
                        src="https://fundacjaglosmlodych.org/wp-content/uploads/2021/04/infografika_inny_font.png"
                        width="1080" height="566" alt="" title="" /></a>
            </figure>
        </div>
    </div>
</x-main>
