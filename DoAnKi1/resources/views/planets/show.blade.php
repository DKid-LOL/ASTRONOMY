@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $planet->name }}</h1>
    <p>Khối lượng: {{ $planet->size }}</p>
    <p>Khí quyển: {{ $planet->atmosphere }}</p>
    <p>Khoảng cách từ Mặt Trời: {{ $planet->distance_from_sun }} km</p>
    <p>Khoảng cách từ Trái Đất: {{ $planet->distance_from_earth }} km</p>
</div>
@endsection
