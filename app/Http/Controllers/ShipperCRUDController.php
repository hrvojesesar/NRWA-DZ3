<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShipperCRUDController extends Controller
{
    public function index()
    {
        $shippers = Shipper::all();

        return response()->json($shippers);
    }

    public function show($id)
    {
        $shipper = Shipper::findOrFail($id);

        return response()->json($shipper);
    }

    public function store(Request $request)
    {
        $shipper = new Shipper();

        $shipper->field1 = $request->input('field1');
        $shipper->field2 = $request->input('field2');
        // ...
        $shipper->save();

        return response()->json($shipper);
    }

    public function update(Request $request, $id)
    {
        $shipper = Shipper::findOrFail($id);

        $shipper->field1 = $request->input('field1');
        $shipper->field2 = $request->input('field2');
        // ...
        $shipper->save();

        return response()->json($shipper);
    }

    public function destroy($id)
    {
        $shipper = Shipper::findOrFail($id);
        $shipper->delete();

        return response()->json('Shipper deleted successfully');
    }
}
