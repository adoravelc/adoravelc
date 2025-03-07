<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-md border-b border-gra-300">
        <h2 class="mb-1 text-3xl tracking-tighter font-bold textgray-900">{{ $post['title']}}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4">{{ $post['content'] }}</p><br>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to Posts</a>
    </article>
</x-layout>