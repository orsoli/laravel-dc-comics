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
        return view('destinations.show', compact('destination'));
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

}
