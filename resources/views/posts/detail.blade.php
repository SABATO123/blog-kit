<!-- resources/views/posts/detail.blade.php -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
        @if ($post->image)
                    <div class="mt-4">
                        <h4 class="font-semibold">Full Details:</h4>
                        <img src="{{ asset($post->image) }}" alt="Post Image" class="mt-2" width="400">
                    </div>
                @endif
            <div class="p-4">
                <h1 class="text-2xl font-semibold">{{ $post->title }}</h1>
                <p class="text-gray-600 text-sm mt-2">By {{ $post->author }}</p>
                <p class="mt-4 text-gray-700">{{ $post->content }}</p>
            </div>
        </div>
        <div class="mt-4">
            <a href="{{ route('start') }}" class="bg-blue-300 text-white px-4 py-2 rounded">Back to Posts</a>
        </div>
    </div>
</body>
</html>

