@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $comet->name }}</h1>
    <p>Kích thước: {{ $comet->size }}</p>
    <p>Thành phần: {{ $comet->composition }}</p>
    <p>Chu kỳ quỹ đạo: {{ $comet->orbit_period }} năm</p>
</div>
@endsection
