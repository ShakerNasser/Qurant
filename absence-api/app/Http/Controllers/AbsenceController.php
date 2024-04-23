<?php

namespace App\Http\Controllers;

use App\Models\Absence;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class AbsenceController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        try {
            $validatedData = $request->validate([
                'employee_name' => 'required|string',
                'start_date' => 'required|date',
                'end_date' => 'required|date|after_or_equal:start_date',
                'reason' => 'required|string',
            ]);

            $absence = Absence::create($validatedData);

            return response()->json(['message' => 'Absence created successfully', 'data' => $absence], 201);
        } catch (ValidationException $e) {

            return response()->json(['message' => 'Validation failed', 'errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            
            return response()->json(['message' => 'Absence creation failed', 'error' => $e->getMessage()], 500);
        }
    }
}