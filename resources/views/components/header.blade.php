<header class="w-full bg-blue-500 shadow-sm rounded-lg py-5 flex justify-between items-center">
    <div class="text-2xl font-bold">CarStoreBlog</div>
    <nav class="space-x-6">
        <a href="#" class="text-gray-700 hover:text-blue-600">Home</a>
        @if (auth()->user())
        <a href="{{route('dashboard')}}" class="text-gray-700 hover:text-blue-600">Dashboard</a>

        @else

        <a href="{{route('login')}}" class="text-gray-700 hover:text-blue-600">Login</a>
        <a href="{{route('register')}}" class="text-gray-700 hover:text-blue-600">Register</a>
            
        @endif
       
        
    </nav>
    
</header>