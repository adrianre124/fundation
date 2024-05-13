<x-layout>
    <form action="/praktyki/{{ $practice->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")

        <x-form.input name='title' placeholder="Title" value="{{ $practice->title}}"/>
        <x-form.input name='thumbnail' type='file'/>
        <x-form.textarea name='description' placeholder="Description" bodyText="{{ $practice->description}}"/>
        <x-form.textarea name='duties' placeholder="Duties" bodyText="{{ $practice->duties}}"/>
        <x-form.textarea name='tools' placeholder="Tools" bodyText="{{ $practice->tools}}"/>


        <x-form.button>Edytuj</x-form.button>
    </form>
</x-layout>

<script>
var allEditors = document.querySelectorAll('.editor');
console.log(allEditors);
for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor
    .create( allEditors[i], {
        ckfinder: {
            'uploadUrl': "{{route('ckeditor.upload',['_token'=>csrf_token()])}}",
        }
    })
    .catch( error => {
        console.error( error );
    } );
}
</script>
