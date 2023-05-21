<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Classe;
use \App\Models\Student;

class ClasseController extends Controller
{
    public function index()
    {
        $classes = Classe::all();

        return view('index', [
            'classes' => $classes,
        ]);
    }

    public function detail($id)
    {
        $classe = Classe::find($id);
        $students = Student::where('classe_id', $id)->get();

        return view('students.index', [
            'classe' => $classe,
            'students' => $students,
        ]);

    }

}
