<?php

namespace App\Http\Controllers;

// app/Http/Controllers/CustomerController.php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerSearchController extends Controller
{
    public function search(Request $request)
    {
        $searchInput = $request->input('searchInput');

        // Logika pretraživanja korisnika


        $customers = Customer::where('CompanyName', 'like', "%$searchInput%")
            ->orWhere('ContactName', 'like', "%$searchInput%")
            ->orWhere('ContactTitle', 'like', "%$searchInput%")
            ->orWhere('Address', 'like', "%$searchInput%")
            ->orWhere('City', 'like', "%$searchInput%")
            ->orWhere('Region', 'like', "%$searchInput%")
            ->orWhere('PostalCode', 'like', "%$searchInput%")
            ->orWhere('Country', 'like', "%$searchInput%")
            ->orWhere('Phone', 'like', "%$searchInput%")
            ->orWhere('Fax', 'like', "%$searchInput%")

            ->get();

        return response()->json($customers);
    }
}
