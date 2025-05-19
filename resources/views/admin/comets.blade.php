<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comets</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.header')
    <div class="flex h-screen bg-gray-900 text-white">
        <!-- Hamburger Icon -->
        <div class="p-5">
            <button id="menu-btn" class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>
        <!-- Sidebar -->
        <div id="sidebar" class="bg-gray-800 p-5 w-1/5 hidden">
            <h2 class="text-lg font-semibold">Admin Dashboard</h2>
            <ul class="mt-6">
                <li><a href="{{ url('add_comets') }}" class="block p-2 hover:bg-blue-700">Add Comet</a></li>
                <li><a href="{{ url('add_constellation') }}" class="block p-2 hover:bg-blue-700">Add Constellation</a>
                </li>
                <li><a href="{{ url('add_news') }}" class="block p-2 hover:bg-blue-700">Add News</a></li>
                <li><a href="{{ url('add_observatory') }}" class="block p-2 hover:bg-blue-700">Add Observatory</a></li>
                <li><a href="{{ url('add_planets') }}" class="block p-2 hover:bg-blue-700">Add Planet</a></li>
                <li><a href="{{ url('view_comets') }}" class="block p-2 hover:bg-blue-700">Edit Comet</a></li>
                <li><a href="{{ url('view_constellation') }}" class="block p-2 hover:bg-blue-700">Edit Constellation</a>
                </li>
                <li><a href="{{ url('view_news') }}" class="block p-2 hover:bg-blue-700">Edit News</a></li>
                <li><a href="{{ url('view_observatory') }}" class="block p-2 hover:bg-blue-700">Edit Observatory</a>
                </li>
                <li><a href="{{ url('view_planets') }}" class="block p-2 hover:bg-blue-700">Edit Planet</a></li>
            </ul>
        </div>
        <div class="flex-1 p-4">
            <h1 class="text-xl font-bold text-white border-b border-gray-700 pb-2 mb-6">List of Comets</h1>
            <ul class="space-y-4">
                @foreach ($comets as $comet)
                    <li
                        class="bg-gray-800 rounded-lg p-4 hover:bg-gray-700 transition-colors flex justify-between items-center">
                        <div class="flex items-center">
                            <img src="{{ asset($comet->image) }}" alt="{{ $comet->name }}"
                                class="w-20 h-20 rounded-full mr-4">
                            <span class="text-lg font-medium text-white">{{ $comet->name }}</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                <a href="{{ url('update_comets', $comet->id) }}">Edit</a>
                            </button>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                <a href="{{ url('delete_comets', $comet->id) }}">Delete</a>
                            </button>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <script>
        document.getElementById('menu-btn').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('hidden');
        });
    </script>

    @include('layouts.footer')

</body>

</html>
