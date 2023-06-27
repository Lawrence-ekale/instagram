<?php

namespace App\Http\Controllers;

use App\Models\County;
use Illuminate\Http\Request;

class CountyController extends Controller
{
    public function save(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'country_id' => 'required|exists:countries,id',
        ]);

        $county = County::create([
            'name' => $validatedData['name'],
            'country_id' => $validatedData['country_id'],
        ]);

        return response()->json([
            'message' => 'County saved successfully',
            'data' => $county,
        ]);
    }
}
