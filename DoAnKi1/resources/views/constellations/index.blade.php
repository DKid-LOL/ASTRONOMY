@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Danh sách Chòm Sao</h1>
    <ul>
        @foreach ($constellations as $constellation)
            <li><a href="{{ route('constellations.show', $constellation->id) }}">{{ $constellation->name }}</a></li>
        @endforeach
    </ul>
</div>
@endsection
