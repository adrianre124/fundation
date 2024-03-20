<x-layout>
        <form action="/praktyki" method="POST" enctype="multipart/form-data">
            @csrf

            <x-form.input name='title'/>
            <x-form.input name='slug'/>
            <x-form.input name='thumbnail' type='file'/>
            <x-form.textarea name='description'/>
            <x-form.textarea name='duties'/>
            <x-form.textarea name='tools'/>


            <x-form.button>Publish</x-form.button>
        </form>
</x-layout>
