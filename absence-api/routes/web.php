<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $message = "This is a message from the API route.";
    return view('welcome', compact('message'));
});