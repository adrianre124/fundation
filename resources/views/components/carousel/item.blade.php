<div class="hidden duration-700 ease-in-out" data-carousel-item>
    <img src="{{ $image }}" class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full w-full object-cover" alt="Wśród celów statutowych Fundacji znajdują się:">
    <div class="flex-col justify-center align-center absolute text-white text-center h-full w-full mt-8">
        <x-carousel.header>{{ $header }}</x-carousel.header>
        <br>
        <hr class="border-t-[1px] w-32 font-bold m-auto">
        <br>
        <div class="lg:mt-12 lg:text-2xl" >
            {{ $slot }}
        </div>
    </div>
</div>
