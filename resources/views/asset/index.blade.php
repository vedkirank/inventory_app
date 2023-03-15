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
                    
                    @if(session()->get('success'))
                    {{ session()->get('success') }}
                @endif
                <table class="inventory-table">
                    <tr class="table-hdr"><td>Name</td><td>Description</td><td>Value</td><td>Date Purchased</td><td>Action</td><td></td></tr>
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
                <br/>
                <a href="{{ route('asset.create') }}" class="add-link">Add item to inventory</a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>



       
   

