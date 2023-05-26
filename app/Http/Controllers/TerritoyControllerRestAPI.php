<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Territory;

class TerritoyControllerRestAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $territory = Territory::all();
        return [
            'success' => 1,
            'data' => $territory
        ];
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'TerritoryID' => 'required',
            'TerritoryDescription' => 'required',
            'RegionID' => 'required',
        ]);

        $territory = Territory::create($request->all());
        return [
            'success' => 1,
            'data' => $territory
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(Territory $territory)
    {
        return [
            'success' => 1,
            'data' => $territory
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Territory $territory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Territory $territory)
    {
        $request->validate([
            'TerritoryID' => 'required',
            'TerritoryDescription' => 'required',
            'RegionID' => 'required',
        ]);


        $territory->update($request->all());

        return [
            'success' => 1,
            'data' => $territory,
            'message' => 'Territory updated successfully.'
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Territory $territory)
    {
        $territory->delete();
        return [
            'success' => 1,
            'data' => $territory,
            'message' => 'Territory deleted successfully.'
        ];
    }
}
