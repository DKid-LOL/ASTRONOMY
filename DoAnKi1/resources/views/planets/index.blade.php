@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Danh sách các Hành Tinh</h1>
    <ul>
        @foreach ($planets as $planet)
            <li><a href="{{ route('planets.show', $planet->id) }}">{{ $planet->name }}</a></li>
        @endforeach
    </ul>
</div>
@endsection
