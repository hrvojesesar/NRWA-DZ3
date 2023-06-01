<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Region;

class RegionControllerRestAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $region = Region::all();
        return [
            'status' => 1,
            'data' => $region
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
            'RegionID' => 'required',
            'RegionDescription' => 'required'
        ]);

        $region = Region::create($request->all());
        return [
            'status' => 1,
            'data' => $region
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(Region $region)
    {
        return [
            'status' => 1,
            'data' => $region
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Region $region)
    {
        $request->validate([
            'RegionID' => 'required',
            'RegionDescription' => 'required'
        ]);

        $region->update($request->all());
        return [
            'status' => 1,
            'data' => $region,
            'message' => 'Region updated successfully.'
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $region = Region::find($id);
        $region->delete();
        return [
            'status' => 1,
            'message' => 'Region deleted successfully.'
        ];

    }
}
