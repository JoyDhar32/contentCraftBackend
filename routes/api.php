<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/store-content',[ContentController::class, 'storeContent']);
Route::post('/store-user-input',[ContentController::class, 'storeUserInput']);

// Store the template
Route::post('/templates', [TemplateController::class, 'store']); // Store the template
Route::get('/templates', [TemplateController::class, 'index']); // Fetch all templates
