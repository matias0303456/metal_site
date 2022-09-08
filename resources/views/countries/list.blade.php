@extends('layout')

@section('title')
<title>Países</title>
@endsection

@section('content')
@if (count($countries) === 0)
<h2>No hay países registrados.</h2>
@else
<ul>
    @foreach($countries as $country)
    <li>{{ $country->name }}</li>
    @endforeach
</ul>
@endif
<a href="/nuevo-pais">
    <button type="button">
        + País
    </button>
</a>
@endsection