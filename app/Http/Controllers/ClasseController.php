<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Classe;

class ClasseController extends Controller
{
    public function index()
    {
        $classes = Classe::all();

        return view('index', [
            'classes' => $classes,
        ]);
    }

}
