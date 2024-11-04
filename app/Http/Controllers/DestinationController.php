<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDestinationRequest;
use App\Models\Destination;


class DestinationController extends Controller
{
    public function index(){

        $destinations = Destination::all();

        return view('destinations.index',compact('destinations'));
    }

    public function show($id){
        $destination = Destination::findOrFail($id);

        // Calcolate stars for review
        $fullStar = floor($destination->avg_vote);
        $halfStar = ($destination->avg_vote - $fullStar) >= 0.4?  1 : 0;
        $emptyStar = 5 - $fullStar - $halfStar;


        return view('destinations.show', compact('destination','fullStar', 'halfStar', 'emptyStar'));
    }

    public function create()
    {
        return view('destinations.create');
    }

    public function store(StoreDestinationRequest $request)
    {
        $data = $request->all();
        $destination = Destination::create($data);

        return redirect()->route('destinations.index');
    }

    public function edit(string $id){

        $destination = Destination::findOrFail($id);

        return view('destinations.edit', compact('destination'));
    }

    public function update(StoreDestinationRequest $request, $id){

        $data = $request->all();// Get data from edit form
        $destination = Destination::findOrFail($id);
        $destination->update($data);

        return redirect()->route('destinations.index');
    }

    public function destroy(string $id){

        $destination = Destination::findOrFail($id);
        $destination->delete();

        return redirect()->route('destinations.index');
    }

    public function trashed(){
        $deletedDestinations = Destination :: onlyTrashed()->get();
        return view('pages.trash', compact('deletedDestinations'));
    }

}