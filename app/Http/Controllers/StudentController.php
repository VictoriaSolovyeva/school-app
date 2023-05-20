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
            'last_name' => $request->lastName,
            'first_name' => $request->firstName,
            'birth_date' => $request->birthDate,
            'address' => $request->address,
            'classe_id' => $request->classeId,
        ]);

        return redirect()->route('students.index');
    }
}
