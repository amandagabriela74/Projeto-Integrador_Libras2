<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index()
    {
        //dd('Olá Mundo');
        $cursos = Curso::all();
        //dd($cursos);
        return view('painel-admin');
    }
}
