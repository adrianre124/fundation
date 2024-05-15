<div class="min-w-96 max-w-1/2 basis-1/3 flex-1 min-h-48">
    <div class="items-center px-2 min-h-[150px] w-full bg-white md:flex-row">
        <img class="float-left pr-2 w-[150px] max-w-full h-[150px] max-h-full object-cover" src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : {{asset('images/o1.png')}}}}" alt="">
        <div class="flex flex-col justify-center flex-wrap p-4 leading-normal text-sm">
            <h5 class="mb-2 font-semibold tracking-tight text-base text-blue-700 hover:text-red-500"><a href="posts/{{ $post->slug }}">{{ $post->title}}</a></h5>
            <p class="mb-3 font-normal break-all">{!! Str::limit(strip_tags($post->body), 240) !!}</p>
            <p class="self-end"><a href="posts/{{ $post->slug }}" class="block bg-sky-400 text-white text-center w-24 py-1 transition duration-200 hover:bg-sky-500">Czytaj Dalej</a></p>
        </div>
    </div>
</div>


