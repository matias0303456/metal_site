@extends('layout')

@section('title')
<title>Countries</title>
@endsection

@section('content')
<a href="{{ route('get_country') }}" class="block mb-3 bg-zinc-500 text-slate-50 p-2 text-sm rounded-sm w-28 text-center">
    <button type="button">
        Add country
    </button>
</a>
<x-table :columns="['#', 'Name', 'ISO code', 'Actions']" :registers="$countries" delete-route="delete_country" edit-route="get_country" />
@endsection