<button x-show="open" x-transition:enter="transition ease-out duration-400"
    x-transition:enter-start="opacity-0 -translate-x-6" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-400" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 -translate-x-6" type="button"
    class=" absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
    data-carousel-prev>
    <span class="inline-flex items-center justify-center w-10 h-10 bg-white/30 group-focus:outline-none">
        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 1 1 5l4 4" />
        </svg>
        <span class="sr-only">Previous</span>
    </span>
</button>
<button x-show="open" x-transition:enter="transition ease-out duration-400"
    x-transition:enter-start="opacity-0 translate-x-6" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-400" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 translate-x-6" type="button"
    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
    data-carousel-next>
    <span class="inline-flex items-center justify-center w-10 h-10 bg-white/30 group-focus:outline-none">
        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 9 4-4-4-4" />
        </svg>
        <span class="sr-only">Next</span>
    </span>
</button>
