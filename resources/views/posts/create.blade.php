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
    <h1 class="text-2xl font-bold">Create New Post</h1>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Title</label>
            <input type="text" name="title" class="border rounded w-full" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Content</label>
            <textarea name="content" class="border rounded w-full" required></textarea>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Author</label>
            <input type="text" name="author" class="border rounded w-full" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Image (optional)</label>
            <input type="file" name="image" class="border rounded w-full">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create Post</button>
    </form>
</div>
</div>
</body>
</html>
