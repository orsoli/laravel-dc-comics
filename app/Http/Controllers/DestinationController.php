<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

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
            'avg_vote'=>'required|integer',
            'tot_person_vote'=>'required|integer',
            'price'=>'required|integer',

        ]);

        // Create new instance from Destination Model
        $destination = new Destination();
        $destination->name = $request->name;
        $destination->type = $request->type;
        $destination->description = $request->description;
        $destination->img_url = $request->img_url;
        $destination->trip_duration = $request->trip_duration;
        $destination->avg_vote = $request->avg_vote;
        $destination->tot_person_vote = $request->tot_person_vote;
        $destination->price = $request->price;

        // Save destination data në DB
        $destination->save();

        // Redirect after save
        return redirect()->route('destinations.index');
    }

    public function edit(string $id){
        $destination = Destination::findOrFail($id);
        return view('destinations.edit', compact('destination'));
    }

    public function update(Request $request, $id){

        // Find the specific destinaiton with id
        $destination = Destination::findOrFail($id);

        // Update from Destination Model
        $destination->name = $request->input('name');
        $destination->type = $request->input('type');
        $destination->description = $request->input('description');
        $destination->img_url = $request->input('img_url');
        $destination->trip_duration = $request->input('trip_duration');
        $destination->avg_vote = $request->input('avg_vote');
        $destination->tot_person_vote = $request->input('tot_person_vote');
        $destination->price = $request->input('price');

        // Save destination data në DB
        $destination->update();

        // Redirect after save
        return redirect()->route('destinations.index');
    }

}