<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index()
    {
        //dd('Olá Mundo');
        return view('painel-admin');
    }
}
