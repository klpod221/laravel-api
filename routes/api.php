<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/', (function (Request $request) {
    return response()->json([
        'status' => 'OK',
        'message' => "Welcome to the klpod221's API",
    ]);
}));
