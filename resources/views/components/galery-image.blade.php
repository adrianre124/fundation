<div class="relative w-[300px] h-[200px] overflow-hidden">
    <div x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false" class="tranform duration-500 hover:scale-110">
        <img src="{{ $src }}" alt="" class="min-w-[200px] min-h-[150px] w-[300px] h-[200px] object-cover">
        <div x-show="open"
            x-transition:enter="transition linear duration-500"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-500"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="flex justify-center text-center items-center absolute top-0 left-0 h-full w-full bg-gray-700 bg-opacity-50">
            <p class="font-bold text-white">{{ $text }}</p>
        </div>
    </div>
</div>
