<x-layout>
    <form action="/pracownicy" method="POST" enctype="multipart/form-data">
        @csrf

        <x-form.input name='firstname' placeholder="Imię"/>
        <x-form.input name='lastname' placeholder="Nazwisko"/>
        <x-form.input name='email' placeholder="Email"/>
        <x-form.input name='position' placeholder="Stanowisko"/>
        <x-form.input name='picture' type='file'/>
        <x-form.textarea name='description' placeholder="O sobie"/>

        <x-form.button>Dodaj</x-form.button>
    </form>
</x-layout>
