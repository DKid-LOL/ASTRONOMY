<header class="font-sans antialiased dark:bg-gray-800 dark:text-gray-200">
    <div class="container mx-auto px-8 py-12 ">
        <div class="flex justify-between items-center">
            <h1 class="text-5xl font-bold"><a href="{{ route('home') }}">Astronomy</a></h1>
            {{-- Đây là menu --}}
            <div class="relative">
                <button id="menuButton" class="text-black focus:outline-none">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
                <div id="menu" class="hidden absolute right-1 mt-3 py-2 w-48 bg-black rounded-lg shadow-xl">
                    <a href="{{ route('login') }}" class="block px-4 py-2 text-lg text-white hover:bg-blue-500 hover:text-white">Sign In</a>
                    <a href="{{ route('planets.index') }}" class="block px-4 py-2 text-lg text-white hover:bg-blue-500 hover:text-white">Planet</a>
                    <a href="{{ route('constellation.index') }}" class="block px-4 py-2 text-lg text-white hover:bg-blue-500 hover:text-white">Constellation</a>
                    <a href="{{ route("comet.index")}}" class="block px-4 py-2 text-lg text-white hover:bg-blue-500 hover:text-white">Comet</a>
                    <a href="{{ route('news.index')}}" class="block px-4 py-2 text-lg text-white hover:bg-blue-500 hover:text-white">News</a>
                    <a href="{{ route('observatory.index') }}" class="block px-4 py-2 text-lg text-white hover:bg-blue-500 hover:text-white">Observatory</a>
                    <a href="{{ route('about') }}" class="block px-4 py-2 text-lg text-white hover:bg-blue-500 hover:text-white">About</a>
                </div>
            </div>
            {{-- Hết Menu --}}
        </div>
    </div>
     {{-- Script cho menu --}}
    <script>
        document.getElementById('menuButton').addEventListener('click', function() {
            const menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        });
    </script>
</header>