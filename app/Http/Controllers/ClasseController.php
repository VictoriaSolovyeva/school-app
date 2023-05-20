<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Classe;

class StudentController extends Controller
{
    public function index()
    {
        $classes = Classe::all();

        return view('index', [
            'classes' => $classes,
        ]);
    }

}
