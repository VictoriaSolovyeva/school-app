<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('students.index', [
            'students' => $students,
        ]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {

        Student::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'user_id' => $request->id,
        ]);

        return redirect()->route('students.index');
    }
}
