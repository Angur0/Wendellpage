<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactController;

// API routes for form submissions
Route::post('/api/contact', [ContactController::class, 'submit']);

// Catch-all route for Vue Router - serves the main Vue SPA
Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');
