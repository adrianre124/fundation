@php
    $title = "Category";
    $route = ["Category"];
    $description = "Kategorie";
@endphp

<x-main :title="$title" :route="$route" :description="$description">
    <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 wrap my-2 md:space-x-2 space-y-2 md:space-y-0 auto-rows-auto md:px-20 xl:px-0 2xl:px-40">
        @foreach ($posts as $post)
            <x-sprawozdanie :post="$post" />
        @endforeach

        <div class="col-start-1 md:col-span-2 lg:col-span-3 text-white">
            {{ $posts->links('pagination::tailwind') }}
        </div>
    </div>
</x-main>
