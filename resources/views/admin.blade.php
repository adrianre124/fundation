<x-layout>
    <form action="/admin" method="POST">
        @csrf

        <x-form.input name="email" type="email" placeholder="Email"/>
        <x-form.input name="password" type="password" placeholder="Password"/>

        <x-form.button>Zaloguj</x-form.button>
    </form>
</x-layout>
