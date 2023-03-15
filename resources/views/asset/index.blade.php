<!DOCTYPE html>
<html>
    <head>
        <title>Inventory List</title>
    </head>
    <body>
        @if(session()->get('success'))
            {{ session()->get('success') }}
        @endif
        <table>
            <tr><td>Name</td><td>Description</td><td>Value</td><td>Date Purchased</td><td>Action</td><td></td></tr>
            @foreach($asset as $item)
            <tr>
                <td><a href="{{ route('asset.show', $item->id) }}">{{ $item->name }}</a></td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->value }}</td>
                <td>{{ $item->purchased }}</td>
                <td><a href="{{ route('asset.edit', $item->id) }}">Edit</a></td>
                <td>
                    <form action="{{ route('asset.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type='submit'>Delete</button>         
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        <a href="{{ route('asset.create') }}">Add item to inventory</a>
    </body>
</html>