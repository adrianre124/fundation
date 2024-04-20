@props(['post'])

<div class="flex flex-col md:max-w-80 md:min-h-96 border bg-white shadow mx-auto">
    <a href="/posts/{{ $post->slug }}/" class="min-w-48 w-1/2 md:w-full h-[300px] overflow-hidden">
        <img src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : 'https://fundacjaglosmlodych.org/wp-content/uploads/2018/04/pexels-photo-1483891-300x200.jpeg'}}"
            alt="" class="w-full h-full object-cover"/>
    </a>
    <div class="p-5">
        <a href="/posts/{{ $post->slug }}/">
            <h5 class="mb-2 text-sm font-bold tracking-tight text-blue-500 hover:text-red-500">{{ $post->title }}
            </h5>
        </a>
        <hr>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{!! Str::limit($post->body, 240) !!}</p>
        <a href="/posts/{{ $post->slug }}/"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-300 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Czytaj Dalej
        </a>
    </div>
</div>
