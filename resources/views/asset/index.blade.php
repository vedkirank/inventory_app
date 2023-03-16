<!DOCTYPE html>
<html>

<head>
    <title>Inventory List</title>
</head>

<body>
    @if (session()->get('success'))
        {{ session()->get('success') }}
    @endif
    <table>
        <tr>
            <td>Name</td>
            <td>Description</td>
            <td>Value</td>
            <td>Date Purchased</td>
            @if (auth()->check())
            <td>Action</td>
            @endif
            <td></td>
        </tr>
        @foreach ($asset as $item)
            <tr>
                <td><a href="{{ route('asset.show', $item->id) }}">{{ $item->name }}</a></td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->value }}</td>
                <td>{{ $item->purchased }}</td>
                @if (auth()->check())
                    <td><a href="{{ route('asset.edit', $item->id) }}">Edit</a></td>
                    <td>
                        <form action="{{ route('asset.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type='submit'>Delete</button>
                        </form>
                    </td>
                @endif
                {{-- <td><a href="{{ route('asset.edit', $item->id) }}">Edit</a></td>
                <td>
                    <form action="{{ route('asset.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type='submit'>Delete</button>         
                    </form>
                </td> --}}
            </tr>
        @endforeach
    </table>
    @if (auth()->check())
    <a href="{{ route('asset.create') }}">Add item to inventory</a>
    @endif
    
</body>

</html>
