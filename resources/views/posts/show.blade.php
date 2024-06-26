@php
    $title = Str::ucfirst(explode('/', $_SERVER['REQUEST_URI'])[1]);
    $routeFirstArgument = Str::ucfirst(explode('/', $_SERVER['REQUEST_URI'])[1]);
    $routeSecondArgument = Str::ucfirst(explode('/', $_SERVER['REQUEST_URI'])[2]);
    $route = [$routeFirstArgument, $routeSecondArgument];
    $description = $post->title;
@endphp

<x-main :title="$title" :route="$route" :description="$description">
    <div class="flex-start py-10 space-y-10 w-full md:pr-32">
        <h1 class="text-4xl font-semibold">{{ $post->title }}</h1>
        <div class="space-y-2">
            <hr />
            <span class="text-gray-300 transition duration-200 hover:text-red-300 hover:underline"><i class="fa-solid fa-folder-open mx-2"></i><a
                    href="/category/{{ $post->category->name }}">{{ $post->category->name }}</a></span>
            <hr />
        </div>
        <div class="text-lg space-y-4">
            {!! $post->body !!}
        </div>
        <div class="flex row font-semibold">
            <div
                class="{{ !isset($previous_record) ? 'invisible' : '' }} bg-gray-100 w-1/2 leading-[48px] text-left text-blue-600 transition duration-300 hover:bg-blue-600 hover:text-white">
                @if (isset($previous_record))
                    <a href="/posts/{{ $previous_record->slug }}">
                        <p class="h-full w-full pl-2">
                            <svg class="w-3 h-3 inline mb-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 10 16">
                                <path
                                    d="M8.766.566A2 2 0 0 0 6.586 1L1 6.586a2 2 0 0 0 0 2.828L6.586 15A2 2 0 0 0 10 13.586V2.414A2 2 0 0 0 8.766.566Z" />
                            </svg>
                            {{ $previous_record->title }}
                        </p>
                    </a>
                @endif
            </div>
            <div
                class="{{ !isset($next_record) ? 'hidden' : '' }} bg-gray-100 w-1/2 leading-[48px] text-right text-blue-600 transition duration-300 hover:bg-blue-600 hover:text-white">
                @if (isset($next_record))
                    <a href="/posts/{{ $next_record->slug }}">
                        <p class="h-full w-full pr-2">
                            {{ $next_record->title }}
                            <svg class="w-3 h-3 inline mb-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 10 16">
                                <path
                                    d="M3.414 1A2 2 0 0 0 0 2.414v11.172A2 2 0 0 0 3.414 15L9 9.414a2 2 0 0 0 0-2.828L3.414 1Z" />
                            </svg>
                        </p>
                    </a>
                @endif
            </div>
        </div>
        <div class="row justify-content-center">
            <p>Udostępnij</p>
</div>
        <div class="row justify-content-center">
        <a title="Facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ url('page') }}" target="_blank" class="iconLink" style="filter: invert(35%) sepia(86%) saturate(443%) hue-rotate(182deg) brightness(93%) contrast(88%);">
            <img src="{{ asset('images/facebook.svg') }}" alt="Udostępnij na Facebook'u" class="icon">
        </a>
</div>
        @auth
        <x-buttons.layout>
            <x-buttons.edit route="/posts/edit/{{ $post->id }}"/>
            <x-buttons.delete route="/posts/{{ $post->id }}"/>
        </x-buttons.layout>
        @endauth
    </div>
</x-main>
