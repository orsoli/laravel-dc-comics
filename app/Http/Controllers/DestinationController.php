<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;


class DestinationController extends Controller
{
    public function index(){

        $destinations = Destination::all();

        return view('destinations.index',compact('destinations'));
    }

    public function show($id){
        $destination = Destination::findOrFail($id);
        return view('destinations.show', compact('destination'));
    }

    public function create()
    {
        return view('destinations.create');
    }

    public function store(Request $request)
    {
        // Request Validation
        $request->validate([
            'name' => 'required|string|min:3|max:10',
            'type'=>'required|string|min:3|max:50',
            'description'=>'required|string',
            'img_url'=>'url',
            'trip_duration'=>'required|string|min:3|max:100',
            'avg_vote'=>'required|numeric|max:5',
            'tot_person_vote'=>'required|integer',
            'price'=>'required|integer|min:1',

        ]);

        // Create new instance from Destination Model
        $destination = Destination::create($request);

        // Redirect after save
        return redirect()->route('destinations.index');
    }

    public function edit(string $id){

        $destination = Destination::findOrFail($id);

        return view('destinations.edit', compact('destination'));
    }

    public function update(Request $request, $id){

        // Request Validation
        $request->validate([
            'name' => 'required|string|min:3|max:10',
            'type'=>'required|string|min:3|max:50',
            'description'=>'required|string',
            'img_url'=>'url',
            'trip_duration'=>'required|string|min:3|max:100',
            'avg_vote'=>'required|numeric|max:5',
            'tot_person_vote'=>'required|integer',
            'price'=>'required|integer|min:1',

        ]);
        $formData = $request->all();// Get data from edit form

        $destination = Destination::findOrFail($id);// Find the specific destinaiton with id

        $destination->update($formData);

        // Redirect after save
        return redirect()->route('destinations.index');
    }

    public function destroy(string $id){

        $destination = Destination::findOrFail($id);
        $destination->delete();

        return redirect()->route('destinations.index');
    }

}