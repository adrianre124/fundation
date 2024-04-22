<x-layout>
    <form action="/posts" method="POST" enctype="multipart/form-data">
        @csrf

        <x-form.input name='title' placeholder="Title"/>
        <x-form.input name='thumbnail' type='file'/>

        <select name="category_id" id="category" class="mt-4">
            @foreach (\App\Models\Category::all() as $category)
                <option
                    value="{{ $category->id }}"
                    {{ old('category_id') == $category->id ? 'selected' : ''}}
                >{{ ucwords($category->name) }}</option>
            @endforeach
        </select>

        <x-form.error name="category"/>

        <x-form.textarea name='body'/>

        <x-form.button>Stwórz</x-form.button>
    </form>
</x-layout>
