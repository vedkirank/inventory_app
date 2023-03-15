<!DOCTYPE html>
<html>
    <head>
        <title>person list</title>
    </head>
</html>
<body>
    
    @if (session()->get('success')){
        {{ session()->get('success') }}
        }
    @endif
    <table>
        <tr>
            <td>Name</td>
            <td>Date of Birth</td>
            <td>Email</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        @foreach ($person as $item)
            <tr>
                <td><a href="{{ route('person.show', $item->id) }}">{{ $item->fname }} {{ $item->lname }}</a></td>
                {{-- <td><a href="{{route:'person.show', $item->id}}">{{ $item->fname }} {{ $item->lname }}</a></td> --}}
                <td>{{ $item->dob }}</td>
                <td>{{ $item->email }}</td>
                <td><a href="{{ route('person.edit', $item->id) }}">Edit</a></td>
                <td>
                    <form action="{{ route('person.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type='submit'>Delete</button>         
                    </form>
                </td> 
            </tr>
        @endforeach
    </table> 
</body>