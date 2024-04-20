<div x-show="open" x-transition:enter="transition ease-out duration-400"
    x-transition:enter-start="opacity-0 -translate-x-6"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-400"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 -translate-x-6"
    class="absolute top-9 lg:top-14 left-0 z-50 bg-teal-400 divide-y divide-teal-100 min-w-48">
    <ul class="text-xs text-gray-700 dark:text-gray-200">
        {{ $slot }}
    </ul>
</div>
