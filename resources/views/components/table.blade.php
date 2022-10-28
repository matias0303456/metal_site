<table class="w-full text-center">
    <thead>
        @foreach($columns as $column)
        <th>{{ $column }}</th>
        @endforeach
    </thead>
    <tbody>
        @if (count($registers) == 0)
        <tr>
            <td colspan="4">No data to show.</td>
        </tr>
        @else
        @foreach($registers as $key => $reg)
        <tr>
            <td>
                {{ $reg->id }}
            </td>
            @foreach($columns as $column)
            @if($column != '#' && $column != 'Actions')
            <td>
                {{ json_decode($reg, true)[strtolower(str_replace(' ', '_', $column))] }}
            </td>
            @endif
            @endforeach
            <td>
                <a href="{{ route($deleteRoute, ['id' => $reg->id]) }}">
                    <button class="bg-red-600 text-slate-50 p-1 rounded-sm text-sm">
                        Delete
                    </button>
                </a>
                <a href="{{ route($editRoute, ['id' => $reg->id]) }}">
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