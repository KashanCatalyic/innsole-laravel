<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ces;
use Illuminate\Http\Request;

class CesController extends Controller
{
    public function index(Request $request)
    {
        $ces = Ces::where([['ces_code', $request->code], ['valid', 1]])->select('id', 'ces_code', 'valid')->first();

        if ($ces != null) {
            return response()->json($ces, 200);
        }
        return response()->json('Record Not Match', 200);
    }

    public function update(Request $request)
    {
        // return $request->all();
        $ces = Ces::where([['ces_code', $request->ces_code], ['valid', 1]])->first();
        // return $ces;
        $ces->update([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'phone' => $request->phone,
            'revenue' => $request->revenue,
            'package_of_choice' => $request->package_of_choice,
            'description_1' => $request->description_1,
            'description_2' => $request->description_2,
            'valid' => '0',
        ]);

        if ($ces) {
            return response()->json('Record Submitted', 200);
        }

    }
}
