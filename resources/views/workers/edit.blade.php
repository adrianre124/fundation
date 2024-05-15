<x-layout>
    <form action="/pracownicy/{{ $worker->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")

        <x-form.input name='firstname' placeholder="Imię" value="{{ $worker->firstname }}"/>
        <x-form.input name='lastname' placeholder="Nazwisko" value="{{ $worker->lastname }}"/>
        <x-form.input name='email' placeholder="Email" value="{{ $worker->email }}"/>
        <x-form.input name='position' placeholder="Stanowisko" value="{{ $worker->position }}"/>
        <x-form.input name='picture' type='file'/>
        <x-form.textarea name='description' placeholder="O sobie" bodyText="{{ $worker->description }}"/>

        <x-form.button>Edytuj</x-form.button>
    </form>
</x-layout>
