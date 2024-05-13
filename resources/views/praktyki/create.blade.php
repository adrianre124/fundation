<x-layout>
        <form action="/praktyki" method="POST" enctype="multipart/form-data">
            @csrf

            <x-form.input name='title' placeholder="Title"/>
            <x-form.input name='thumbnail' type='file'/>
            <x-form.textarea name='description' placeholder="Description"/>
            <x-form.textarea name='duties' placeholder="Duties"/>
            <x-form.textarea name='tools' placeholder="Tools"/>


            <x-form.button>Stwórz</x-form.button>
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
