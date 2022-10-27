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
<table class="w-full text-center">
    <thead>
        <th>#</th>
        <th>Name</th>
        <th>ISO Code</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @if (count($countries) === 0)
        <tr>
            <td colspan="4">No countries registered.</td>
        </tr>
        @else
        @foreach($countries as $country)
        <tr>
            <td>{{ $country->id }}</td>
            <td>{{ $country->name }}</td>
            <td>{{ $country->iso_code }}</td>
            <td>
                <a href="{{ route('delete_country', ['id' => $country->id]) }}">
                    <button class="bg-red-600 text-slate-50 p-1 rounded-sm text-sm">
                        Delete
                    </button>
                </a>
                <a href="{{ route('get_country', ['id' => $country->id]) }}">
                    <button class="bg-red-300 text-zinc-800 p-1 rounded-sm text-sm">
                        Edit
                    </button>
                </a>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
@endsection