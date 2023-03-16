<!DOCTYPE html>
<html>

<head>
    <title>Edit Person Details</title>
</head>

<body>
    @if ($errors->any()){
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul><br>
        }
    @endif
    <form method='post' action="{{ route('person.update', $item->id) }}">
    @csrf
    @method('PATCH') {{-- Used when updating and deleting --}}
    First Name: <input type="text" name="fname" value="{{ $item->fname }}"><br>
    Last Name: <input type="text" name="lname" value="{{ $item->lname }}"><br>
    Date of birth: <input type="date" name="dob" value="{{ $item->dob }}"><br>
    Email: <input type="email" name="email" value="{{ $item->email }}"><br>
    <button type="submit">Edit to Persons</button>
    </form>
</body>

</html>