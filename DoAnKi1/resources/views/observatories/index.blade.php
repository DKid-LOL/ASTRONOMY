@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Danh sách Đài Quan Sát</h1>
    <ul>
        @foreach ($observatories as $observatory)
            <li><a href="{{ route('observatories.show', $observatory->id) }}">{{ $observatory->name }}</a></li>
        @endforeach
    </ul>
</div>
@endsection
