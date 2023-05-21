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
            'students' => $students,
        ]);
    }

    public function detail($id)
    {
        if ($id == 'create') {
            return view('students.create');
        }

        $student = Student::find($id);

        if ($student === null) {
            return abort(404);
        }
        $classe = Classe::find($student->classe_id);

        return view('students.detail', ['student' => $student, 'classe' => $classe]);
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
        // TODO: rediriger vers page de la classe
        return redirect()->route('students.index');
    }
}
