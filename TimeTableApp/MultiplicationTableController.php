<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplicationTableController extends Controller
{
    // Display the form for generating a multiplication table
    public function index()
    {
        return view('multiplication-form');
    }

    // Generate and display the multiplication table
    public function generate(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'number' => 'required|integer|min:1|max:100', // Index number
            'range' => 'required|integer|min:1|max:20',    // Range (number of rows)
        ]);

        // Get the inputs
        $number = $request->input('number');
        $range = $request->input('range');

        // Generate the multiplication table
        $table = [];
        for ($i = 1; $i <= $range; $i++) {
            $table[] = "$number x $i = " . ($number * $i);
        }

        // Pass the table data to the view
        return view('multiplication-table', [
            'number' => $number,
            'range' => $range,
            'table' => $table,
        ]);
    }
}