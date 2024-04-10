@php
    $title = ucfirst(substr($_SERVER["REQUEST_URI"], 1));
    $route = [ucfirst(substr($_SERVER["REQUEST_URI"], 1))];
@endphp

<x-layout :title="$title">
    <x-route :route="$route"/>
    <main class="flex mx-20">
        <x-menu/>
        <div class="flex flex-wrap my-2 gap-2">
            @foreach ($posts as $post)
                <x-post :post="$post"/>
            @endforeach

            <div class="flex-start text-white w-full">
                {{ $posts->links("pagination::tailwind") }}
            </div>
        </div>
    </section>
    </main>
</x-layout>
