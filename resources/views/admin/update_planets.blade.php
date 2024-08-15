<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-white h-screen flex flex-col">
    @include('layouts.header')
    <div class="flex h-screen bg-gray-900 text-black">
        <!-- Hamburger Icon -->
        <div class="p-5">
            <button id="menu-btn" class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </div>
        <!-- Sidebar -->
        <div id="sidebar" class="bg-gray-800 p-5 w-64 hidden">
            <h2 class="text-lg font-semibold">Admin Dashboard</h2>
            <ul class="mt-6">
                <li><a href="{{ url('add_comets') }}" class="block p-2 hover:bg-blue-700">Add Comet</a></li>
                <li><a href="{{ url('add_constellation') }}" class="block p-2 hover:bg-blue-700">Add Constellation</a></li>
                <li><a href="{{ url('add_news') }}" class="block p-2 hover:bg-blue-700">Add News</a></li>
                <li><a href="{{ url('add_observatory') }}" class="block p-2 hover:bg-blue-700">Add Observatory</a></li>
                <li><a href="{{ url('add_planets') }}" class="block p-2 hover:bg-blue-700">Add Planet</a></li>
                <li><a href="{{ url('view_comets') }}" class="block p-2 hover:bg-blue-700">Edit Comet</a></li>
                <li><a href="{{ url('view_constellation') }}" class="block p-2 hover:bg-blue-700">Edit Constellation</a></li>
                <li><a href="{{ url('view_news') }}" class="block p-2 hover:bg-blue-700">Edit News</a></li>
                <li><a href="{{ url('view_observatory') }}" class="block p-2 hover:bg-blue-700">Edit Observatory</a></li>
                <li><a href="{{ url('view_planets') }}" class="block p-2 hover:bg-blue-700">Edit Planet</a></li>
            </ul>
        </div>
        <!-- Content Area -->
        <div class="flex-1 p-4 overflow-auto">
            <h1 class="text-xl font-bold mb-6">Update Planet</h1>
            <form action="{{url('edit_planets', $planets->id)}}" method="post" enctype="multipart/form-data" class="space-y-4">

                @csrf

                <div class="flex flex-col">
                    <label class="mb-2 font-semibold">Name</label>
                    <input type="text" name="name" value="{{$planets->name}}" class="p-2 bg-gray-700 text-white rounded">
                </div>

                <div class="flex flex-col">
                    <label class="mb-2 font-semibold">Current Image</label>
                    <img width="150" src="/{{$planets->image}}" class="rounded">
                </div>

                <div class="flex flex-col">
                    <label class="mb-2 font-semibold">New Image</label>
                    <input type="file" name="image" class="p-2 bg-gray-700 text-white rounded">
                </div>

                <div class="flex flex-col">
                    <label class="mb-2 font-semibold">Description</label>
                    <textarea name="description" class="p-2 bg-gray-700 text-white rounded">{{$planets->description}}</textarea>
                </div>

                <div class="flex flex-col">
                    <label class="mb-2 font-semibold">Diameter</label>
                    <input type="number" name="diameter" value="{{$planets->diameter}}" class="p-2 bg-gray-700 text-white rounded">
                </div>

                <div class="flex flex-col">
                    <label class="mb-2 font-semibold">Atmosphere</label>
                    <input type="text" name="atmosphere" value="{{$planets->atmosphere}}" class="p-2 bg-gray-700 text-white rounded">
                </div>
                
                <div class="flex flex-col">
                    <label class="mb-2 font-semibold">Distance From Sun</label>
                    <input type="number" name="dfs" value="{{$planets->distance_from_sun}}" class="p-2 bg-gray-700 text-white rounded">
                </div>

                <div class="flex flex-col">
                    <label class="mb-2 font-semibold">Distance From Earth</label>
                    <input type="number" name="dfe" value="{{$planets->distance_from_earth}}" class="p-2 bg-gray-700 text-white rounded">
                </div>

                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('menu-btn').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('hidden');
        });
    </script>

</body>
</html>
