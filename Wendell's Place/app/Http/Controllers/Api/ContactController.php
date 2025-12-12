<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'guitarType' => 'nullable|string|max:50',
            'service' => 'nullable|string|max:100',
            'message' => 'required|string|max:2000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Here you would typically:
        // 1. Save to database
        // 2. Send email notification
        // 3. Send auto-reply to customer
        
        // For now, just return success
        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your message has been sent. We\'ll get back to you soon.'
        ]);
    }
}
