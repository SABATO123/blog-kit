<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carBlog</title>
    <link rel="icon" href="https://as2.ftcdn.net/v2/jpg/02/46/58/75/1000_F_246587518_a2nsm9R2Jvd2CWeKfRSaUyraAkG52tHT.jpg">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
<div class="container mx-auto">
    <h1 class="text-2xl font-bold">Edit Post</h1>

    <!-- Form action should point to the 'update' route and method should be PUT -->
    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Use PUT method for updating -->

        <!-- Title field pre-filled with the current title -->
        <div class="mb-4">
            <label class="block text-gray-700">Title</label>
            <input type="text" name="title" class="border rounded w-full" value="{{ old('title', $post->title) }}" required>
        </div>

        <!-- Content field pre-filled with the current content -->
        <div class="mb-4">
            <label class="block text-gray-700">Content</label>
            <textarea name="content" class="border rounded w-full" required>{{ old('content', $post->content) }}</textarea>
        </div>

        <!-- Author field pre-filled with the current author -->
        <div class="mb-4">
            <label class="block text-gray-700">Author</label>
            <input type="text" name="author" class="border rounded w-full" value="{{ old('author', $post->author) }}" required>
        </div>

        <!-- Image field for uploading a new image, optional -->
        <div class="mb-4">
            <label class="block text-gray-700">Image (optional)</label>
            <input type="file" name="image" class="border rounded w-full">
            <!-- Display current image if it exists -->
            @if ($post->image)
                <div class="mt-2">
                    <span>Current Image:</span>
                    <img src="{{ asset($post->image) }}" alt="Post Image" width="100">
                </div>
            @endif
        </div>

        <!-- Submit button for updating the post -->
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Post</button>
    </form>
</div>
</div>
</body>
</html>
