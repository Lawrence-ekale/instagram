<?php

namespace App\Http\Controllers;

use App\Models\Ward;
use Illuminate\Http\Request;

class WardController extends Controller
{
    public function save(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'subcounty_id' => 'required|exists:subcounties,id',
        ]);

        $ward = Ward::create([
            'name' => $validatedData['name'],
            'subcounty_id' => $validatedData['subcounty_id'],
        ]);

        return response()->json([
            'message' => 'Ward saved successfully',
            'data' => $ward,
        ]);
    }
}
