<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerDemographic;
class CustomerDemographicControllerRestAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customerdemographic = CustomerDemographic::all();
        return [
            'status' => 1,
            'data' => $customerdemographic
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
            'CustomerTypeID' => 'required',
            'CustomerDesc' => 'required'
        ]);

        $customerdemographic = CustomerDemographic::create($request->all());
        return [
            'status' => 1,
            'data' => $customerdemographic
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerDemographic $customerdemographic)
    {
        return [
            'status' => 1,
            'data' => $customerdemographic
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CustomerDemographic $customerdemographic)
    {
        $request->validate([
            'CustomerTypeID' => 'required',
            'CustomerDesc' => 'required'
        ]);

        $customerdemographic->update($request->all());
        return [
            'status' => 1,
            'data' => $customerdemographic,
            'msg' => 'Customer Demographic updated successfully.'
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customerdemographic = CustomerDemographic::find($id);
        $customerdemographic->delete();
        return [
            'status' => 1,
            'data' => $customerdemographic,
            'msg' => 'Customer Demographic deleted successfully.'
        ];
    }
}
