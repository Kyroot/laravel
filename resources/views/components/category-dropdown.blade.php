<div>
    <x-drop-down>


        <x-slot name='trigger'>

            <button

            class="text-left flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 inline-flex"

        >
            {{isset($selectedCategory) ? ucwords($selectedCategory->name) : 'Categories'}}

            <x-icon name='drop-down' class='absolute pointer-events-none' style="right: 12px;"/>

            </button>

        </x-slot>

        <x-dropdown-item href="/?{{ http_build_query(request()->except('category', 'page'))}}" :active="request()->routeIs('/')">
            All
        </x-dropdown-item>

@foreach($categories as $category)

    <x-dropdown-item

       href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
        :active="request('category') === $category->slug"
    > {{ucwords($category->name)}}

    </x-dropdown-item>

@endforeach

    </x-drop-down>
</div>
