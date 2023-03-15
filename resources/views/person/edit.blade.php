<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Person') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
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

</div>
</div>
</div>
</div>
</x-app-layout>