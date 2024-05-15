@props(['name', 'bodyText'])

<x-form.field>
    <textarea class="border border-gray-200 p-2 w-full rounded editor"
        name="{{ $name }}"
        id="editor"
        {{ $attributes }}
    >@if (isset($bodyText)){!! $bodyText !!}@endif</textarea>

    <x-form.error name="{{ $name }}"/>
</x-form.field>
