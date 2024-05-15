<div class="border min-w-80 basis-1/3 flex-1 max-w-1/2 shadow-lg transition duration-300 hover:shadow-2xl">
    <div class="items-center px-2 w-full bg-white md:flex-row">
        <img class="float-left pr-2 pb-2 w-[150px] h-[150px] object-cover mr-2" src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : '/images/o1.png'}}" alt="">
        <h5 class="mt-2 font-bold tracking-tight text-lg text-blue-700 hover:text-red-500"><a href="posts/{{ $post->slug }}">{{ $post->title}}</a></h5>
        <hr class="my-2"/>
        <p class="mb-3 font-normal break-all">{!! Str::limit(strip_tags($post->body), 240) !!}</p>
    </div>
    <p class="flex-end flex mb-2 mx-2"><a href="posts/{{ $post->slug }}" class="block bg-sky-400 text-white text-center w-24 py-1 transition duration-200 hover:bg-sky-500">Czytaj Dalej</a></p>
</div>


