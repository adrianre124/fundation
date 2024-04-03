<div class="items-center px-2 w-full bg-white md:flex-row">
    <img class="float-left pr-2 pb-2" src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : '/images/o1.png'}}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 font-bold tracking-tight">{{ $post->title}}</h5>
        <p class="mb-3 text-xs font-normal">{!! Str::limit($post->body, 240) !!}</p>
        <a href="posts/{{ $post->slug }}" class="block bg-sky-400 text-white text-center w-24 py-1 transition duration-200 hover:bg-sky-500">Czytaj Dalej</a>
    </div>
</div>
