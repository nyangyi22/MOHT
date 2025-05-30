<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return response()->json($destinations);
    }

    // public function show($id)
    // {
    //     $destination = Destination::findOrFail($id);
    //     return response()->json($destination);
    // }

    // public function store(Request $request)
    // {
    //     $destination = Destination::create($request->all());
    //     return response()->json($destination, 201);
    // }

    // public function update(Request $request, $id)
    // {
    //     $destination = Destination::findOrFail($id);
    //     $destination->update($request->all());
    //     return response()->json($destination);
    // }

    // public function destroy($id)
    // {
    //     $destination = Destination::findOrFail($id);
    //     $destination->delete();
    //     return response()->json(null, 204);
    // }
}
