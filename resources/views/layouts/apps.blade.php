
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
    <div class="container mx-auto px-4 py-8">
        <!-- Navbar -->
        
        @include('components.header')

        <!-- Blog Header -->
        <section class="my-8">
        <div class="mb-6">
        <div class="relative">
    <img src="\images\blog.jpg" alt="Featured Image" class="w-full h-74 object-cover rounded-lg">
    <h2 class="absolute inset-0 flex items-center justify-center text-white text-3xl font-bold bg-black bg-opacity-50">Welcome to our car shop</h2>
</div>
        </div>
            <h1 class="text-4xl font-bold text-center">Latest Blog Posts</h1>
            <p class="text-gray-500 text-center mt-2">Stay updated with the latest articles</p>
        </section>

      @yield('content')
    </div>
</body>
</html>
