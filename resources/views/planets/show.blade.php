<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $planet->name }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-900 text-gray-100">
    @include('layouts.header')
    <div class="max-w-screen-lg mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-4">{{ $planet->name }}</h1>
        <div class="flex flex-col md:flex-row md:space-x-6 mt-6">
            <img src="{{ asset($planet->image) }}" alt="{{ $planet->name }}"
                class="md:w-1/3 rounded-lg shadow-lg mb-4 md:mb-0">
            <div class="mt-4 md:mt-0 md:w-2/3 space-y-4">
                <p class="text-lg"><span class="font-semibold">Description:</span> {{ $planet->description }}</p>
                <p class="text-lg"><span class="font-semibold">Diameter:</span> {{ $planet->diameter }} km</p>
                <p class="text-lg"><span class="font-semibold">Atmosphere:</span> {{ $planet->atmosphere }}</p>
                <p class="text-lg"><span class="font-semibold">Distance from Sun:</span>
                    {{ $planet->distance_from_sun }} million km</p>
                <p class="text-lg"><span class="font-semibold">Distance from Earth:</span>
                    {{ $planet->distance_from_earth }} million km</p>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>

</html>
