<li class="box-border text-sm cursor-pointer transform duration-300 flex items-center h-full {{ (request()->is($route)) ? '' : 'md:hover:bg-teal-300' }}">
    <a href="{{ $route }}" class="block py-2 w-full h-full"><p class="py-2 px-2">{{ $name }}</p></a>
</li>
