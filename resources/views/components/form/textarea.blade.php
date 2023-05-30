@props(['name'])

<x-form.field>
    <x-form.label name={{$name}}/>
    <textarea class="w-full border border-gray-200 rounded p2" name="{{$name}}" id="{{$name}}" required>{{$slot ?? old($name)}}</textarea>
    <x-form.error name={{$name}}/>
</x-form.field>
