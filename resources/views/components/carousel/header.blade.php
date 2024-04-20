<h2 class="text-xl font-semibold w-11/12 m-auto text-shadow shadow-gray-400 lg:text-4xl"
    x-transition:enter="transition ease-out duration-400" x-transition:enter-start="opacity-0 -translate-y-6"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-400"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 -translate-y-6">{{ $slot }}</h2>
