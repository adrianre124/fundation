@php
    $title = ucfirst(substr($_SERVER["REQUEST_URI"], 1));
    $route = [ucfirst(substr($_SERVER["REQUEST_URI"], 1))];
@endphp

<x-layout :title="$title">
    <x-route :route="$route"/>
    <main class="flex mx-20 px-20">
        <x-menu/>
        <div class="flex flex-wrap my-2 gap-2 text-sm">
            @foreach ($posts as $post)
                <x-post :post="$post"/>
            @endforeach

            <div class="flex-start text-white w-full">
                {{ $posts->links("pagination::tailwind") }}
            </div>
        </div>
    </section>
    </main>
    <div class="mb-10 bg-cyan-400 text-white text-center w-40 h-10 leading-10 mx-auto transition duration-200 hover:bg-cyan-600">
        <a href="/posts/create" class="inline-block w-full h-full">Dodaj Post</a>
    </div>
</x-layout>
