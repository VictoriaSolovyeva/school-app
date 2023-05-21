<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Student;
use \App\Models\Classe;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('students.index', [
            'classe' => null,
            'students' => $students,
        ]);
    }

    public function create()
    {
        $classes = Classe::all();

        return view('students.create', [
            'classes' => $classes,
        ]);
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

        return redirect()->route('classe.detail', ['id' => $request->classeId]);
    }
}
