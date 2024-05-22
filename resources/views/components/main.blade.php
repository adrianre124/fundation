<x-layout :title="$title" :description="$description ?? 'Fundacja Głos Młodych'">
    <x-route :route="$route"/>
    <main class="flex mx-auto max-w-[1470px]">
        <div class="inline-block">
            <x-menu/>
            <x-menu-practices/>
            {{ $slot }}
        </div>
    </main>
</x-layout>
