<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personas;
use App\Models\Aspirantes;
use App\Models\Hermanos;
use App\Models\
class FormularioController extends Controller
{
    public function formulario()
    {
        return view('formularios.create');
    }
    public function store(Request $request)
    {
        request()->validate([
            'foto_est' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('foto-estudiantes'), $imageName);
        
        $aspirante_persona = New Persona();
        $aspirante_persona->primer_nombre = $request->as_primer_nombre;
        $aspirante_persona->segundo_nombre = $request->as_segundo_nombre;
        $aspirante_persona->primer_apellido = $request->as_primer_apellido;
        $aspirante_persona->segundo_apellido = $request->as_segundo_apellido;
        $aspirante_persona->tipo_documento = $request->as_tipo_documento;
        $aspirante_persona->numero_documento = $request->as_numero_documento;
        $aspirante_persona->lugar_expedicion_documento = $request->as_lugar_expedicion_documento;
        $aspirante_persona->fecha_nacimiento = $request->as_fecha_nacimiento;
        $aspirante_persona->lugar_nacimiento = $request->as_lugar_nacimiento;
        $aspirante_persona->save();

        $aspirante = New Aspirante();
        $aspirante->personas_id = $aspirante_persona->id;
        $aspirante->grado = $request->grado_ingresar;
        $aspirante->numero_formulario = '123';
        $aspirante->fecha_inscripcion = $aspirante_persona->create_at;
        $aspirante->direccion = $request->as_direccion;
        $aspirante->barrio = $request->as_barrio;
        $aspirante->telefono = $request->as_telefono;
        $aspirante->municipio = $request->as_municipio;
        $aspirante->zona = $request->as_zona;
        $aspirante->estrato = $request->as_estrato;
        $aspirante->eps = $request->as_eps;
        $aspirante->Foto = $imageName;
        $aspirante->reponsable = 'pendiente';
        $aspirante->religion = $request->as_religio;
        $aspirante->observacion = $request->Observaciones;

        if($request->tieneh == 'Si'){

        }elseif($request->tieneh == 'No'){

        }else{
            //error
        }

        dd($request->all());
    }
}
