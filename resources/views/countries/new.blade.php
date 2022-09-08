@extends('layout')

@section('title')
<title>Nuevo país</title>
@endsection

@section('content')
@if($errors->any())
{{ var_dump($errors) }}
@endif
<form action="/store-country" method="POST">
    @csrf
    @method('POST')
    <label for="name">Nombre</label>
    <input type="text" name="name" />
    <label for="iso_code">Código ISO</label>
    <input type="text" name="iso_code" />
    <input type="submit" value="Guardar" />
</form>
<a href="/paises">
    <button type="button">
        Cancelar
    </button>
</a>
@endsection