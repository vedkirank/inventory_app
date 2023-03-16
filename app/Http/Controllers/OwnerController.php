<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\Person;
class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $owner = Asset::with('person')->get();
        return view('owner.index', compact('owner'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $person = Person::all();
        $asset = Asset::all();
        $item = [ "persons" => $person,"assets" => $asset];
        return view('owner.create', array('item'=> $item));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'name' => 'required|max:100',
        //     'description' => 'required|max:255',
        //     'value' => 'numeric',
        //     'purchased' => 'date',
        // ]);
        // $asset = Asset::findOrFail($request->input('id'));
        // $asset->personID = $request->input('personID');
        // $asset->update($request->all());
        $assetId = $request->input('id');
        // $personId = $request->input('personID');
        $validated = $request->validate([
            'personID' => 'required'
            // 'name' => 'required|max:100',
            // 'description' => 'required|max:255',
            // 'value' => 'numeric',
            // 'purchased' => 'date',
        ]);
        Asset::where('id',$assetId)->update($validated);
        
        return redirect('/owner')->with('success', 'Item is saved to inventory');
    }

    /**
     * Display the specified resource.
     */
    public function show(Owner $owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $person = Person::all();
        $item = [ "persons" => $person,"id" => $id];
        return view('owner.edit', array('item'=> $item));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'personID' => 'required'
            // 'name' => 'required|max:100',
            // 'description' => 'required|max:255',
            // 'value' => 'numeric',
            // 'purchased' => 'date',
        ]);
        Asset::where('id',$id)->update($validated);
        
        return redirect('/owner')->with('success', 'Item updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $assetId)
    {
        Asset::where('id',$assetId)->update(['personID' => NULL]);
        return redirect('/owner')->with('success', 'removed owner!');
    }
}
