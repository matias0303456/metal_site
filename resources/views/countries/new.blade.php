@extends('layout')

@section('title')
@if($country == null)
<title>New country</title>
@else
<title>Edit {{ $country->name }}</title>
@endif
@endsection

@section('content')
<div class="flex relative">
    @if($country == null)
    <form action="{{ route('store_country') }}" method="POST" class="bg-zinc-200 p-3 m-3 text-center rounded-sm mx-auto">
        @method('POST')
        @csrf
        <div class="flex justify-between gap-3">
            <label class="block" for="name">Name</label>
            <input type="text" name="name" class="px-2 rounded-sm" value="{{ old('name') }}" />
        </div>
        <div class="mt-2 flex justify-between gap-3">
            <label for="iso_code">ISO code</label>
            <input type="text" name="iso_code" class="px-2 rounded-sm" value="{{ old('iso_code') }}" />
        </div>
        <input type="submit" value="Save" class="mt-3 w-full bg-zinc-500 text-slate-50 p-1 text-sm rounded-sm hover:cursor-pointer" />
    </form>
    @else
    <form action="{{ route('update_country', ['id' => $country->id]) }}" method="PUT" class="bg-zinc-200 p-3 m-3 text-center rounded-sm mx-auto">
        @method('PUT')
        @csrf
        <div class="flex justify-between gap-3">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $country->name }}" class="px-2 rounded-sm" />
        </div>
        <div class="mt-2 flex justify-between gap-3">
            <label for="iso_code">ISO code</label>
            <input type="text" name="iso_code" value="{{ $country->iso_code }}" class="px-2 rounded-sm" />
        </div>
        <input type="submit" value="Update" class="mt-3 w-full bg-zinc-500 text-slate-50 p-1 text-sm rounded-sm hover:cursor-pointer" />
    </form>
    @endif
    @if($errors->any())
    @endif
    <a href="{{ route('get_countries') }}" class="absolute right-0 bg-zinc-500 text-slate-50 p-2 text-sm rounded-sm">
        Go back
    </a>
</div>
<div class="text-red-800 text-center">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endsection