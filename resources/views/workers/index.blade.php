@php
    $title = 'Pracownicy Fundacji';
    $route = ['Pracownicy Fundacji'];
@endphp

<x-main :title="$title" :route="$route">

    <div class="relative overflow-x-auto mx-auto sm:rounded-lg">
        <table class="w-full text-sm mb-4 text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3"></th>
                    <th scope="col" class="px-6 py-3">
                        Imię i nazwisko
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stanowisko
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Opis
                    </th>
                    @auth
                    <th scope="col" class="px-6 py-3">
                        Akcja
                    </th>
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach ($workers as $worker)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="pl-6 py-4">
                        @if(isset($worker->picture))
                        <img class="w-10 h-10 rounded-full" src="{{ asset('storage/' . $worker->picture)}}"
                            alt="Jese image">
                        @endif
                    </td>
                    <th scope="row"
                        class="flex items-center pr-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        <div class="ps-3">
                            <div class="text-base font-semibold">{{ $worker->firstname }} {{ $worker->lastname }}</div>
                            <div class="font-normal text-gray-500">{{ $worker->email }}</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        {{ $worker->position }}
                    </td>
                    <td class="px-6 py-4 break-all">
                        {{ $worker->description }}
                    </td>
                    @auth
                    <td class="px-6 py-4">
                        <a href="/pracownicy/edit/{{ $worker->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edytuj</a>
                        <form class="inline ml-4" method="POST" action="/pracownicy/{{ $worker->id }}">
                            @csrf
                            @method('DELETE')

                            <button class="font-medium text-red-600 dark:text-red-500 hover:underline">Usuń</button>
                        </form>
                    </td>
                    @endauth
                </tr>
                @endforeach
            </tbody>
        </table>
        @auth
        <div
            class="mb-10 bg-cyan-400 text-white text-center w-40 h-10 leading-10 mx-auto transition duration-200 hover:bg-cyan-600">
            <a href="/pracownicy/create" class="inline-block w-full h-full">Dodaj Pracownika</a>
        </div>
        @endauth
    </div>

</x-main>
