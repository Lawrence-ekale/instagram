<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function save(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'ward_id' => 'required|exists:wards,id',
        ]);

        $location = Location::create([
            'name' => $validatedData['name'],
            'ward_id' => $validatedData['ward_id'],
        ]);

        return response()->json([
            'message' => 'Ward saved successfully',
            'data' => $location,
        ]);
    }
}
