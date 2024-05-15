@props(['route'])

<div class="bg-red-400 text-white text-center w-40 mx-auto transition duration-200 hover:bg-red-600">
    <form method="POST" action="{{ $route }}">
        @csrf
        @method('DELETE')

        <button class="inline-block text-white w-40 h-10">Usuń</button>
    </form>
</div>
