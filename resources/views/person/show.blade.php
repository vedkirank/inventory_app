<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('View Person') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">  
<div>
    <span> The person's FirstName is {{$person[0]->fname}}</span><br>
    <span> The person's LastName is {{$person[0]->lname}}</span><br>
    <span> His Date of Birth is {{$person[0]->dob}}</span><br>
    <span> The Person's email is {{$person[0]->email}}</span>
</div>
</div>
</div>
</div>
</div>
</x-app-layout>