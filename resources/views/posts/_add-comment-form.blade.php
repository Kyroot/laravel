@auth

<x-panel>
<form method="POST" action="/post/{{$post->slug}}/comment">
    @csrf

    <header class="flex space-x-5 items-center">
        <img src="https://i.pravatar.cc/102?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">
        <h1>You can leave a comment too</h1>
    </header>

    <div class="mt-5">
        <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" rows="5" placeholder="Your text goes here" required></textarea>
        @error('body')
            <span class="text-red-500 text-sm">{{$message}}</span>
        @enderror
    </div>
    <div class="flex justify-end mt-6 pt-6 border-t border-grey-200">
        <x-form.button> Post </x-form.button>
    </div>
</form>
</x-panel>
@else
<p class="font-semibold"> <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">Log in </a> to leave a comment </p>

@endauth
