<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function formulario()
    {
        return view('formularios.create');
    }
    public function store(Request $request)
    {
        dd($request->all());
    }
}
