<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TemplateController extends Controller
{


    public function index()
    {
        try {
            // Fetch all templates
            $templates = Template::all();

            // Return the templates as a JSON response
            return response()->json($templates, 200);
        } catch (\Exception $e) {
            // Handle any errors
            return response()->json([
                'message' => 'Failed to fetch templates.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'desc' => 'required|string',
            'category' => 'required|string',
            'icon' => 'nullable',
            'aiPrompt' => 'required|string',
            'slug' => 'required|string|unique:templates,slug',
            'form' => 'required|array',
        ]);

        // Handle file upload
        if ($request->hasFile('icon')) {
            $filePath = $request->file('icon')->store('icons', 'public'); // Store in 'storage/app/public/icons'
            $validated['icon'] = Storage::url($filePath); // Generate public URL for the file
        }

        $template = Template::create([
            'name' => $validated['name'],
            'desc' => $validated['desc'],
            'category' => $validated['category'],
            'icon' => $validated['icon'], // Use the uploaded file URL or null
            'aiPrompt' => $validated['aiPrompt'],
            'slug' => $validated['slug'],
            'form' => json_encode($validated['form']),
        ]);

        return response()->json(['message' => 'Template created successfully!', 'data' => $template], 201);
    }
}
