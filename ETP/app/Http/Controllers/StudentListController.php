<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentListController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('/studentlist', compact('students'));
    }
}

