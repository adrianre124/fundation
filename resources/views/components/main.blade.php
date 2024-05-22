<x-layout :title="$title" :description="$description ?? 'Fundacja Głos Młodych'">
    <x-route :route="$route"/>
    <main class="flex mx-auto max-w-[1470px]">
        <x-menu/>
        {{ $slot }}
    </main>
</x-layout>
