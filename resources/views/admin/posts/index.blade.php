<x-layout>
    <x-settings heading="Manage Posts">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">

                            @foreach ($posts as $post)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <a href="/post/{{ $post->slug }}"> {{ $post->title }} </a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><a
                                            href="/admin/posts/{{ $post->id }}/edit"
                                            class="text-blue-500 hover:text-blue-600">Edit</a></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <form method="POST" action="/admin/posts/{{ $post->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-xs text-gray-400"> Delete <button>
                                        </form>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-settings>
</x-layout>
