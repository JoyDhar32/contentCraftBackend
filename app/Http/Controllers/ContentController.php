<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\ContentInput;
use Illuminate\Support\Facades\Validator;

class ContentController extends Controller
{
    /**
     * Store AI-generated content (output).
     */
    public function storeContent(Request $request)
    {
        // Validate the input
        $validator = Validator::make($request->all(), [
            'content_input_id' => 'required|integer|exists:content_inputs,id', // Reference the content input ID
            'content' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Store in the database
        $response = Content::create([
            'content_input_id' => $request->content_input_id, // Link to the content input
            'content' => $request->content,
        ]);

        return response()->json(['message' => 'AI response saved successfully!', 'data' => $response], 201);
    }

    /**
     * Store user input.
     */
    public function storeUserInput(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'form_data' => 'nullable|json', // Validate the collected form data as JSON
        ]);
    
        $input = new ContentInput(); // Replace with your model
        $input->user_id = $validated['user_id'];
        $input->title = $validated['title'];
        $input->form_data = $validated['form_data']; // Save the form data as JSON
        $input->save();
    
        return response()->json([
            'message' => 'Form data saved successfully!',
            'data' => $input,
        ], 201);
}

}
