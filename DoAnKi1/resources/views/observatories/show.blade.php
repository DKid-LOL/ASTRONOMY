@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $observatory->name }}</h1>
    <p>Địa điểm: {{ $observatory->location }}</p>
    <p>Vĩ độ: {{ $observatory->latitude }}</p>
    <p>Kinh độ: {{ $observatory->longitude }}</p>
</div>
@endsection
