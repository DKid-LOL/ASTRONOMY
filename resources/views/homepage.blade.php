<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-800 text-gray-200">

    @include('layouts.header')

    <div class="bg-black text-white p-8">
        <h1 class="text-4xl font-bold mb-6">FEATURED STORIES</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <a href="{{ route('planets.index') }}" class="space-y-2 group block">
                <img src="{{ asset('/images/earth.jpg') }}" alt="Telescope" class="w-full object-cover h-48">
                <div class="text-xl font-semibold group-hover:text-blue-300">About Planets</div>
                <p>Our solar system has eight planets, and five dwarf planets - all located in an outer spiral arm of the Milky Way galaxy called the Orion Arm.</p>
            </a>
            <a href="{{ route('comet.index') }}" class="space-y-2 group block">
                <img src="{{ asset('/images/halley.jpg') }}" alt="Sun" class="w-full object-cover h-48">
                <div class="text-xl font-semibold group-hover:text-blue-300">About Comets</div>
                <p>Comets are frozen leftovers from the formation of the solar system composed of dust, rock, and ices. They range from a few miles to tens of miles wide, but as they orbit closer to the Sun, they heat up and spew gases and dust into a glowing head that can be larger than a planet</p>
            </a>
            <a href="{{ route('constellation.index') }}" class="space-y-2 group block">
                <img src="{{ asset('/images/orion.jpg') }}" alt="Mars" class="w-full object-cover h-48">
                <div class="text-xl font-semibold group-hover:text-blue-300">About Constellations</div>
                <p>A constellation is a group of stars that appears to form a pattern or picture like Orion the Great Hunter, Leo the Lion, or Taurus the Bull.</p>
            </a>
            <a href="{{ route('observatory.index') }}" class="space-y-2 group block">
                <img src="{{ asset('/images/mauna_kea.jpg') }}" alt="NASA Logo" class="w-full object-cover h-48">
                <div class="text-xl font-semibold group-hover:text-blue-300">About Observatory</div>
                <p>An observatory is a place for making observations</p>
            </a>
            <a href="{{ route('news.index') }}" class="space-y-2 group block">
                <img src="{{ asset('/images/news.jpg') }}" alt="Night Sky" class="w-full object-cover h-48">
                <div class="text-xl font-semibold group-hover:text-blue-300">News</div>
                <p>News about Astronomy</p>
            </a>
        </div>
    </div>

    @include('layouts.footer')


</body>
</html>
