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
            'name' => 'required|string',
            'type'=>'required|string',
            'description'=>'string',
            'img_url'=>'string',
            'trip_duration'=>'required|string',
            'avg_vote'=>'required|decimal:1',
            'tot_person_vote'=>'required|integer',
            'price'=>'required|integer',

        ]);

        // Create new instance from Destination Model
        Destination::create([
            'name'=>$request->input('name'),
            'type'=>$request->input('type'),
            'description'=>$request->input('description'),
            'img_url'=>$request->input('img_url'),
            'trip_duration'=>$request->input('trip_duration'),
            'avg_vote'=>$request->input('avg_vote'),
            'tot_person_vote'=>$request->input('tot_person_vote'),
            'price'=>$request->input('price'),
        ]);

        // Redirect after save
        return redirect()->route('destinations.index');
    }

    public function edit(string $id){

        $destination = Destination::findOrFail($id);

        return view('destinations.edit', compact('destination'));
    }

    public function update(Request $request, $id){

        $formData = $request->all();// Get data from edit form
        $destination = Destination::findOrFail($id);// Find the specific destinaiton with id

        $destination->update([
            'name'=>$formData['name'],
            'type'=>$formData['type'],
            'description'=>$formData['description'],
            'img_url'=>$formData['img_url'],
            'trip_duration'=>$formData['trip_duration'],
            'avg_vote'=>$formData['avg_vote'],
            'tot_person_vote'=>$formData['tot_person_vote'],
            'price'=>$formData['price'],
        ]);

        // Redirect after save
        return redirect()->route('destinations.index');
    }

    public function destroy(string $id){

        $destination = Destination::findOrFail($id);
        $destination->delete();

        return redirect()->route('destinations.index');
    }

}