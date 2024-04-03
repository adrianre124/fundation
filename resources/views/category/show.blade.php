<x-layout>
    <main class="flex mx-20 px-20">
        <x-menu />
        <div class="grid grid-cols-3 my-2 space-x-2 space-y-2 wrap">
            @foreach ($posts as $post)
                <x-sprawozdanie :post="$post"/>
            @endforeach

            <div class="col-start-1 col-span-3 text-white">
                {{ $posts->links("pagination::tailwind") }}
            </div>
        </div>
    </main>
</x-layout>
