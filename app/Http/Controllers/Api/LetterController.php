<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Letter;
use Illuminate\Http\Request;

class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required | min:0 | max:99999999',
        ]);

        if(gettype($validated['number']) !== 'integer') {
            return response()->json([
                'message' => 'You must insert a number',
            ], 400);
        }

        $mod = ($validated['number'] % 23) + 1;

        $result = Letter::findOrFail($mod);

        return response()->json([
            'letter' => $result,
        ], 200);
    }
}
