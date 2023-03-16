<!DOCTYPE html>
<html>
    <head>
        <title>Edit Ownership</title>
    </head>
    <body>
        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul><br/>
        @endif
        <form method="post" action="{{ route('owner.update', $item['id']) }}"> 
            @csrf
            @method('PATCH')
            Asset: <p>{{ $item['id'] }}<p/>
            <select name="personID">
                @foreach ($item['persons'] as $person)
                <option value='{{ $person->id}}'> {{ $person->fname }}</option>
                @endforeach
            </select>    
            
            
            <button type="submit">Update asset</button>
        </form>
    </body>
</html>
