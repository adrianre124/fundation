@php
    $title = ucfirst(substr($_SERVER["REQUEST_URI"], 1));
    $route = [ucfirst(substr($_SERVER["REQUEST_URI"], 1))];
@endphp

<x-layout :title="$title">
    <x-route :route="$route"/>
    <main class="flex mx-20 px-20">
        <x-menu/>
        <div class="grid grid-cols-2 my-2 space-x-2 space-y-2 wrap">
            @foreach ($posts as $post)
                <div class="border shadow-lg transition duration-300 hover:shadow-2xl">
                    <x-post :post="$post"/>
                </div>
            @endforeach

            <div class="col-start-1 col-span-2 text-white">
                {{ $posts->links("pagination::tailwind") }}
            </div>
        </div>
    </section>
    </main>
</x-layout>
