<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
            <h1 class="text-center font-bold text-xl mb-10">Log In!</h1>

            <form method="POST" action="/login">
                @csrf

                <div class="mb-6">

                    <x-form.input name='email' autocomplete='username' type='email'/>
                    <x-form.input name='password' type='password' auto-complete='new-password'/>

                </div>

                <x-form.button> Log in </x-form.button>
                {{-- <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-400">
                        Log in
                    </button>
                </div> --}}
                {{-- {{dd($errors);}} --}}
                {{-- @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach --}}
            </form>
        </x-panel>
        </main>
    </section>
</x-layout>
