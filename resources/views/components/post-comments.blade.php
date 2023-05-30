@props(['comment'])

<x-panel class="bg-gray-100">

<article class="flex space space-x-5">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/102?u={{ $comment->user_id }}" alt="" width="60" height="60" class="rounded">
    </div>
    <div>
        <header class="mb-5">
            <h3 class="font-bold">{{$comment->author->username}}</h3>
            <p class="text-xs">Poster <time> {{$comment->created_at->format('d.m.Y G:i')}} </time> </p>
        </header>
        <p>
            {{$comment->body}}
        </p>
    </div>
</article>
</x-panel>
