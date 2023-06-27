<?php

namespace App\Http\Controllers;

use App\Models\Subcounty;
use Illuminate\Http\Request;

class SubCountyController extends Controller
{
    public function save(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'county_id' => 'required|exists:counties,id',
        ]);

        $subcounty = Subcounty::create([
            'name' => $validatedData['name'],
            'county_id' => $validatedData['county_id'],
        ]);

        return response()->json([
            'message' => 'SubCounty saved successfully',
            'data' => $subcounty,
        ]);
    }
}
