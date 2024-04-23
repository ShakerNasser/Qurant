<?php

namespace App\Http\Controllers;

use App\Models\Absence;
use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'employee_name' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'reason' => 'required|string',
        ]);

      
        $absence = Absence::create($validatedData);

        return response()->json(['message' => 'Absence created successfully', 'data' => $absence], 201);
    }
}