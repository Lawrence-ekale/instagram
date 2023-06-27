<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function save(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $country = Country::create([
            'name' => $validatedData['name'],
        ]);
        return response()->json([
            'message' => 'Country saved successfully',
            'data' => $country,
        ]);
    }
}
