@extends('layouts.apps')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SabatoBlog</title>
    <!-- Add FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="container px-4 py-8">
        <!-- Blog Cards Grid -->
        <section class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($posts as $post)
            <!-- Blog Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{$post->image}}" alt="Blog Post" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">{{$post->title}}</h3>
                    <p class="text-gray-600 text-sm mt-2">By {{$post->author}}</p>
                    <p class="mt-4 text-gray-700">{{$post->content}}</p>
                    <br>
                    <a href="{{ route('posts.show', $post->id) }}" class="bg-blue-300 text-white px-20 py-2 rounded">Explore</a>
                </div>
                <!-- Rate Us and Icons Section -->
                <div class="p-4 bg-gray-100 border-t border-gray-300">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-700 font-semibold">Rate Us</span>
                        <div class="flex space-x-4">
                            <!-- Like Icon -->
                            <button class="text-gray-600 hover:text-red-600">
                                <i class="fas fa-heart"></i> <!-- Like Icon -->
                            </button>
                            <!-- Comment Icon -->
                            <button class="text-gray-600 hover:text-blue-600">
                                <i class="fas fa-comment"></i> <!-- Comment Icon -->
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </section>
    </div>
</body>
</html>
@endsection
