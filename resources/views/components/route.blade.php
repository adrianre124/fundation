<div class="bg-gray-100 h-8 w-full space-x-2 pt-1">
    <a href="/" class="ml-4 lg:ml-20">
        <i class="fa-solid fa-house fa-xs text-blue-600 hover:text-red-600"></i>
    </a>
        @foreach ($route as $page)
            <i class="fa-solid fa-chevron-right fa-2xs"></i>
            <span class="text-sm">{{$page}}</span>
        @endforeach
</div>
