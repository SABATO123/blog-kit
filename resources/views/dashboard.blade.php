<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SabatoBlog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create New Post</a>

                <table class="min-w-full border-collapse border border-gray-200">
                    <thead>
                        <tr>
                            <th class="border border-gray-200 px-4 py-2">Title</th>
                            <th class="border border-gray-200 px-4 py-2">Author</th>
                            <th class="border border-gray-200 px-4 py-2">Content</th>
                            <th class="border border-gray-200 px-4 py-2">Image</th>
                            <th class="border border-gray-200 px-4 py-2">Created At</th>
                            <th class="border border-gray-200 px-4 py-2">Actions</th>
                            <th class="border border-gray-200 px-4 py-2">Explore</th> <!-- New column -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td class="border border-gray-200 px-4 py-2">{{ $post->title }}</td>
                                <td class="border border-gray-200 px-4 py-2">{{ $post->author }}</td>
                                <td class="border border-gray-200 px-4 py-2">{{ Str::limit($post->content, 50) }}</td> <!-- Limit content for display -->
                                <td class="border border-gray-200 px-4 py-2">
                                    @if ($post->image)
                                        <img src="{{ asset($post->image) }}" alt="Post Image" width="100">
                                    @else
                                        <span>No Image</span>
                                    @endif
                                </td>
                                <td class="border border-gray-200 px-4 py-2">{{ $post->created_at->format('Y-m-d') }}</td>
                                <td class="border border-gray-200 px-4 py-2">
                                    <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-500">Edit</a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500">Delete</button>
                                    </form>
                                </td>
                                <td class="border border-gray-200 px-4 py-2">
                                    <a href="{{ route('posts.show', $post->id) }}" class="bg-green-500 text-white px-4 py-2 rounded">Explore</a> <!-- Explore button -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
