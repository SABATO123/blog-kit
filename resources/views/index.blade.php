@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold">Blog Posts</h1>
    <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create New Post</a>

    <table class="min-w-full border-collapse border border-gray-200">
        <thead>
            <tr>
                <th class="border border-gray-200 px-4 py-2">Title</th>
                <th class="border border-gray-200 px-4 py-2">Author</th>
                <th class="border border-gray-200 px-4 py-2">Created At</th>
                <th class="border border-gray-200 px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td class="border border-gray-200 px-4 py-2">{{ $post->title }}</td>
                    <td class="border border-gray-200 px-4 py-2">{{ $post->author }}</td>
                    <td class="border border-gray-200 px-4 py-2">{{ $post->created_at->format('Y-m-d') }}</td>
                    <td class="border border-gray-200 px-4 py-2">
                        <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-500">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
