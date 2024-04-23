<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AbsenceController;

Route::get('/test', function () {
    return 'welcome';
});


Route::post('/absences', [AbsenceController::class, 'store']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
