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
        <form method="post" action="{{ route('owner.store') }}"> 
            @csrf
            @method('POST')
            Assign Asset:
            <p> select person </p>
            <select name="personID">
                @foreach ($item['persons'] as $person)
                <option value='{{ $person->id}}'> {{ $person->fname }}</option>
                @endforeach
            </select>  
            <p> select asset </p>  
            <select name="id">
                @foreach ($item['assets'] as $asset)
                @if ($asset->personID == NULL)
                <option value='{{ $asset->id}}'> {{ $asset->name }}</option>  
                @endif 
                @endforeach
            </select>   
            
            <button type="submit">Update asset</button>
        </form>
    </body>
</html>
