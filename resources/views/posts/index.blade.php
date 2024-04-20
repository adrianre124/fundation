@php
    $route = [explode('?', ucfirst(substr($_SERVER['REQUEST_URI'], 1)))[0]];
    $title = $route[0];
@endphp

<x-main :title="$title" :route="$route">
    <section>
        <div class="flex flex-wrap my-2 gap-2 text-sm">
            @foreach ($posts as $post)
                <x-post :post="$post" />
            @endforeach

            <div class="flex-start text-white w-full">
                {{ $posts->links('pagination::tailwind') }}
            </div>
        </div>
        <div
            class="mb-10 bg-cyan-400 text-white text-center w-40 h-10 leading-10 mx-auto transition duration-200 hover:bg-cyan-600">
            <a href="/posts/create" class="inline-block w-full h-full">Dodaj Post</a>
        </div>
    </section>
</x-main>
