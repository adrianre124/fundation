<div class="border min-w-96 basis-1/3 flex-1 max-w-1/2 max-h-96 shadow-lg transition duration-300 hover:shadow-2xl">
    <div class="items-center px-2 w-full bg-white md:flex-row">
        <img class="float-left pr-2 pb-2 max-w-[150px] max-h-[150px] object-cover" src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : '/images/o1.png'}}" alt="">
        <div class="flex flex-col justify-center flex-wrap  p-4 leading-normal">
            <h5 class="mb-2 font-bold tracking-tight">{{ $post->title}}</h5>
            <p class="mb-3 text-xs font-normal">{!! Str::limit($post->body, 240) !!}</p>
            <p class="self-end"><a href="posts/{{ $post->slug }}" class="block bg-sky-400 text-white text-center w-24 py-1 transition duration-200 hover:bg-sky-500">Czytaj Dalej</a></p>
        </div>
    </div>
</div>
