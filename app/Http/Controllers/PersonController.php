<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $person = Person::all();
        return view('person.index', compact('person'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        $person = Person::find($person);
        return view('person.show', array('person' => $person));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Person::findOrFail($id);
        return view('person.edit', compact('item'));
        // return view('person.show');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $person)
    {
        $validated = $request->validate([
            'fname' => 'required|max:20',
            'lname' => 'required|max:20',
            'dob' => 'date',
            'email' => 'email',
        ]);
        Person::whereId($person)->update($validated);
        
        return redirect('/person')->with('success', 'Item updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $person)
    {
        $item = Person::findOrFail($person);
        $item->delete();
        
        return redirect('/person')->with('success', 'It was deleted from inventory');
    }
}
