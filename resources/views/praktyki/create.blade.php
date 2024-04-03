<x-layout>
        <form action="/praktyki" method="POST" enctype="multipart/form-data">
            @csrf

            <x-form.input name='title' placeholder="Title"/>
            <x-form.input name='thumbnail' type='file'/>
            <x-form.textarea name='description' placeholder="Description"/>
            <x-form.textarea name='duties' placeholder="Duties"/>
            <x-form.textarea name='tools' placeholder="Tools"/>


            <x-form.button>Publish</x-form.button>
        </form>
</x-layout>
