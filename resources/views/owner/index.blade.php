<!DOCTYPE html>
<html>

<body>
    @if (session()->get('success'))
    {{ session()->get('success') }}
@endif
    <table>
        <tr>
            <td>Owner Name</td>
            <td>Asset Owned</td>
            @if (auth()->check())
            <td>Actions</td>
            @endif

            
        </tr>
    @foreach ($owner as $item)
    <tr>
        @if ($item->personID != NULL)
            
        <td>{{ $item->person->fname }}</td>
        <td>{{ $item->name }}</td>
        @if (auth()->check())        
        <td><a href="{{ route('owner.edit', $item->id) }}">Edit</a></td>
        <td>
            <form action="{{ route('owner.destroy', $item->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type='submit'>Delete</button>
            </form>
        </td>
        @endif

        @endif
    </tr>
    @endforeach
</table>
    @if (auth()->check())
    <a href="{{ route('owner.create') }}">Create Ownership</a>
    @endif
</body>

</html>
