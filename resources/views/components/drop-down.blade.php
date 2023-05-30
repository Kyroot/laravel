@props(['trigger'])

<div x-data="{show: false}" x-on:click.away = "show = false" class="relative">
    {{-- TRIGGER --}}
    <div x-on:click="show = !show">

        {{$trigger}}

    </div>

    <div x-show="show" class="absolute bg-gray-100 mt-2 w-full rounded-xl z-50 overflow-auto max-h-28" style="display:none">

        {{$slot}}

    </div>
</div>
