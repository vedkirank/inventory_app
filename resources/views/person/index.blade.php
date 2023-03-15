
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Asset List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
    @if (session()->get('success')){
        {{ session()->get('success') }}
        }
    @endif
    <table class="inventory-table">
        <tr class="table-hdr">
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
</div>
</div>
</div>
</div>
</x-app-layout>
