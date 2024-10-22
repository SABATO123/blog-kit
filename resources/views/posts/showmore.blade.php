<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold">{{ $post->title }}</h1>
                <h3 class="text-gray-600">by {{ $post->author }}</h3>
                <p class="mt-4">{{ $post->content }}</p>

                @if ($post->image)
                    <div class="mt-4">
                        <h4 class="font-semibold">Image:</h4>
                        <img src="{{ asset($post->image) }}" alt="Post Image" class="mt-2" width="400">
                    </div>
                @endif

                <div class="mt-6">
                    <a href="{{ route('posts.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Back to Posts</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
