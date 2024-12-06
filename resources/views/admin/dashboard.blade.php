<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body class="bg-gray-900 text-white">
    
@include('layouts.header')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>


    <div class="flex justify-center space-x-4 p-8">
        <p class="bg-gray-700 hover:bg-gray-600 py-2 px-4 rounded-lg">Add ====> </p>
        <a href="{{url('add_planets')}}" class="bg-gray-700 hover:bg-gray-600 py-2 px-4 rounded-lg">Planets</a>
        <a href="{{url('add_comets')}}" class="bg-gray-700 hover:bg-gray-600 py-2 px-4 rounded-lg">Comet</a>
        <a href="{{url('add_constellation')}}" class="bg-gray-700 hover:bg-gray-600 py-2 px-4 rounded-lg">Constellation</a>
        <a href="{{url('add_observatory')}}" class="bg-gray-700 hover:bg-gray-600 py-2 px-4 rounded-lg">Observatory</a>
        <a href="{{url('add_news')}}" class="bg-gray-700 hover:bg-gray-600 py-2 px-4 rounded-lg">News</a>
    </div>

    <div class="flex justify-center space-x-4 p-8">
        <p class="bg-gray-700 hover:bg-gray-600 py-2 px-4 rounded-lg">Edit/Delete ====> </p>
        <a href="{{url('view_planets')}}" class="bg-gray-700 hover:bg-gray-600 py-2 px-4 rounded-lg">Planets</a>
        <a href="{{url('view_comets')}}" class="bg-gray-700 hover:bg-gray-600 py-2 px-4 rounded-lg">Comet</a>
        <a href="{{url('view_constellation')}}" class="bg-gray-700 hover:bg-gray-600 py-2 px-4 rounded-lg">Constellation</a>
        <a href="{{url('view_observatory')}}" class="bg-gray-700 hover:bg-gray-600 py-2 px-4 rounded-lg">Observatory</a>
        <a href="{{url('view_news')}}" class="bg-gray-700 hover:bg-gray-600 py-2 px-4 rounded-lg">News</a>
    </div>


      
    </x-app-layout>
    @include('layouts.footer')

</body>
</html>