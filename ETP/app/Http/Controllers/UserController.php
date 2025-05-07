<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        // Validate data
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:100',
            'gender' => 'required|in:male,female,other',
            'skills' => 'nullable',
            'city' => 'required',
            'ageRange' => 'required|integer|min:10|max:100',
        ]);

        // Access data using $request->input('name')
        // For now, just return the input for demo purposes
        return response()->json($request->all());
    }
}

