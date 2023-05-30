@props(['name'])
<x-form.field>
    <x-form.label name={{$name}}/>

    <input class="border border-gray-200 p-2 rounded w-full" id="{{$name}}" name="{{$name}}" {{$attributes(['value'=>old($name)])}}>
    <x-form.error name={{$name}} />
</x-form.field>
