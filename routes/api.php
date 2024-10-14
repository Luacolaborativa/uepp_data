<?php

use App\Http\Controllers\ExpenseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    dd($token);
    return ['token' => $token->plainTextToken];
});

Route::apiResource('expense', ExpenseController::class);
