<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Constellation</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-900 text-gray-200">
    @include('layouts.header')

    <div class="max-w-5xl mx-auto p-4">
        <h1 class="text-xl font-bold text-white border-b border-gray-700 pb-2 mb-6">List of Constellations</h1>
        <ul class="space-y-4">
            @foreach ($constellations as $constellation)
                <li class="bg-gray-800 rounded-lg p-4 hover:bg-gray-700 transition-colors">
                    <a href="{{ url('/constellation', $constellation->id) }}" class="flex items-center space-x-4">
                        <img src="{{ asset($constellation->image) }}" alt="{{ $constellation->name }}"
                            class="w-20 h-20 rounded-full">
                        <span class="text-lg font-medium text-white">{{ $constellation->name }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    @include('layouts.footer')
</body>

</html>
