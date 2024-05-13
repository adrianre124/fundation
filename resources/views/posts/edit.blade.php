<x-layout>
    <form action="/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")

        <x-form.input name='title' placeholder="Title" value="{{ $post->title }}"/>
        <x-form.input name='thumbnail' type='file'/>

        <select name="category_id" id="category" class="mt-4">
            @foreach (\App\Models\Category::all() as $category)
                <option
                    value="{{ $category->id }}"
                    {{ $post->category_id == $category->id ? 'selected' : ''}}
                >{{ ucwords($category->name) }}</option>
            @endforeach
        </select>

        <x-form.error name="category"/>

        <x-form.textarea name='body' bodyText="{{ $post->body }}"/>

        <x-form.button>Edytuj</x-form.button>
    </form>
</x-layout>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ), {
            ckfinder: {
                'uploadUrl': "{{route('ckeditor.upload',['_token'=>csrf_token()])}}",
            }
        })
        .catch( error => {
            console.error( error );
        } );
</script>
