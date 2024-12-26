<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Letter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'number' => 'required | integer | between:0,99999999',
        ]);

        if($validator->fails()) {
            return response()->json([
                'message' => 'El dato introducido es incorrecto',
                'errors' => $validator->errors(),
            ], 400);
        }

        $validated = $validator->validated();

        $mod = ($validated['number'] % 23) + 1;

        $result = Letter::findOrFail($mod);

        return response()->json([
            'letter' => $result->letter,
        ], 200);
    }
}
