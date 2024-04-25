@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $constellation->name }}</h1>
    <p>Mô tả: {{ $constellation->description }}</p>
    <p>Làm thế nào nó được hình thành: {{ $constellation->formation }}</p>
</div>
@endsection
