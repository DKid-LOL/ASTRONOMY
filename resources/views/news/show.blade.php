<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $news->title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-900 text-gray-100">
    @include('layouts.header')

    <div class="max-w-screen-lg mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold mb-4">{{ $news->title }}</h1>

        <div class="flex flex-col md:flex-row md:space-x-6 mt-6">
            @if ($news->image)
                <img src="{{ asset($news->image) }}" alt="{{ $news->title }}"
                    class="md:w-1/3 rounded-lg shadow-lg mb-4 md:mb-0">
            @endif

            <div class="md:w-2/3 space-y-4">
                <p class="text-lg">{!! $news->content !!}</p>
                <p class="text-lg"><span class="font-semibold">Website:</span> <a href="{{ $news->website }}"
                        class="text-blue-500 hover:text-blue-700" target="_blank">{{ $news->website }}</a></p>
                <p class="text-sm text-gray-400">
                    Published: {{ $news->published_at }}
                </p>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>

</html>
