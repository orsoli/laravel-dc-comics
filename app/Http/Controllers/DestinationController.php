<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index(){

        $destinations = Destination::all();

        return view('pages.destinations',compact('destinations'));
    }
    public function show($id){
        $destination = Destination::findOrFail($id);
        return view('pages.show_destination', compact('destination'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

}