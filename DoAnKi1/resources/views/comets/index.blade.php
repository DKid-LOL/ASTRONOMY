@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Danh sách Sao Chổi</h1>
    <ul>
        @foreach ($comets as $comet)
            <li><a href="{{ route('comets.show', $comet->id) }}">{{ $comet->name }}</a></li>
        @endforeach
    </ul>
</div>
@endsection
