@props(['name'])

<x-form.field>
    <textarea class="border border-gray-200 p-2 w-full rounded"
        name="{{ $name }}"
        id="editor"
        {{ $attributes }}
    ></textarea>

    <x-form.error name="{{ $name }}"/>
</x-form.field>

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
