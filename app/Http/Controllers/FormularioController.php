<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personas;
use App\Models\Aspirantes;
use App\Models\Hermanos;
use App\Models\HistoriaAcademica;
use App\Models\RelacionColegio;
use App\Models\Padres;

class FormularioController extends Controller
{
    public function formulario()
    {
        return view('formularios.create');
    }
    public function store(Request $request)
    {
        //dd($request->all());
        //dd($request->col_grado[0]);
        request()->validate([
            'foto_est' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.request()->foto_est->getClientOriginalExtension();
        request()->foto_est->move(public_path('foto-estudiantes'), $imageName);
        
        $aspirante_persona = New Personas();
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

        $aspirante = New Aspirantes();
            $aspirante->personas_id = $aspirante_persona->id;
            $aspirante->grado = $request->grado_ingresar;
            $aspirante->numero_formulario = '123';
            $aspirante->fecha_inscripcion = $request->as_fecha_nacimiento;
            $aspirante->direccion = $request->as_direccion;
            $aspirante->barrio = $request->as_barrio;
            $aspirante->telefono = $request->as_telefono;
            $aspirante->municipio = $request->as_municipio;
            $aspirante->zona = $request->as_zona;
            $aspirante->estrato = $request->as_estrato;
            $aspirante->eps = $request->as_eps;
            $aspirante->Foto = $imageName;
            $aspirante->reponsable = $request->pago_estrato;
            $aspirante->religion = $request->as_religio;
            $aspirante->observacion = $request->Observaciones;
        $aspirante->save();

        $padre_persona = New Personas();
            $padre_persona->primer_nombre = $request->pa_primer_nombre;
            $padre_persona->segundo_nombre = $request->pa_segundo_nombre;
            $padre_persona->primer_apellido = $request->pa_primer_apellido;
            $padre_persona->segundo_apellido = $request->pa_segundo_apellido;
            $padre_persona->tipo_documento = 'CC';
            $padre_persona->numero_documento = $request->pa_cedula;
            $padre_persona->lugar_expedicion_documento = $request->pa_lugar_expedicion_documento;
            $padre_persona->fecha_nacimiento = $request->pa_fecha_nacimiento;
            $padre_persona->lugar_nacimiento = $request->pa_lugar_nacimiento;
        $padre_persona->save();

        $padre = New Padres();
            $padre->personas_id = $padre_persona->id;
            $padre->aspirantes_id = $aspirante->id;
            $padre->direccion = $request->pa_direccion;
            $padre->barrio = $request->pa_barrio;
            $padre->telefono = $request->pa_telefono;
            $padre->celular = $request->pa_celular;
            $padre->correo = $request->pa_correo;
            $padre->profesion = $request->pa_profesion;
            $padre->nombre_empresa = $request->as_empresa;
            $padre->telefono_empresa = $request->pa_emp_telefono;
            $padre->direccion_empresa = $request->pa_emp_dirreccion;
            $padre->es_acudiente = false;
        $padre->save();

        $madre_persona = New Personas();
            $madre_persona->primer_nombre = $request->ma_primer_nombre;
            $madre_persona->segundo_nombre = $request->ma_segundo_nombre;
            $madre_persona->primer_apellido = $request->ma_primer_apellido;
            $madre_persona->segundo_apellido = $request->ma_segundo_apellido;
            $madre_persona->tipo_documento = $request->ma_tipo_documento;
            $madre_persona->numero_documento = $request->ma_cedula;
            $madre_persona->lugar_expedicion_documento = $request->ma_lugar_expedicion_documento;
            $madre_persona->fecha_nacimiento = $request->ma_fecha_nacimiento;
            $madre_persona->lugar_nacimiento = $request->ma_lugar_nacimiento;
        $madre_persona->save();

        $madre = New Padres();
            $madre->personas_id = $madre_persona->id;
            $madre->aspirantes_id = $aspirante->id;
            $madre->direccion = $request->ma_direccion;
            $madre->barrio = $request->ma_barrio;
            $madre->telefono = $request->ma_telefono;
            $madre->celular = $request->ma_celular;
            $madre->correo = $request->ma_correo;
            $madre->profesion = $request->ma_profesion;
            $madre->nombre_empresa = $request->ma_empresa;
            $madre->telefono_empresa = $request->ma_emp_telefono;
            $madre->direccion_empresa = $request->ma_emp_dirreccion;
            $madre->es_acudiente = false;
        $madre->save();

        $historia = New HistoriaAcademica();
            $historia->aspirantes_id = $aspirante->id;
            $historia->colegio_procedencia = $request->has_col;
            $historia->grados_repetidos = $request->anios_reiniciados or '0';
        $historia->save();
        
        $i=0;
        foreach($request->col_grado as $col_grado){
            $colegio = New RelacionColegio();
            $colegio->historia_academicas_id = $historia->id;
            $colegio->grado = $request->col_grado[$i];
            $colegio->ano = $request->col_anio[$i];
            $colegio->nombre_colegios = $request->col_nombre[$i];
            $colegio->ciudad = $request->col_ciudad[$i];
            $colegio->motivo_retiro = $request->col_motivo_retiro[$i];
            $colegio->tipo_intitucion = $request->col_estrato[$i];
            $colegio->save();
            $i++;
        }
        if($request->tieneh == 'Si'){
            $i =0;
            foreach ($request->her_primer_nombre as $her_primer_nombre) {
                $hermano = New Hermanos();
                    $hermano->aspirantes_id = $aspirante->id;
                    $hermano->primer_nombre = $request->her_primer_nombre[$i];
                    $hermano->segundo_nombre = $request->her_segundo_nombre[$i];
                    $hermano->primer_apellido = $request->her_primer_apellido[$i];
                    $hermano->segundo_apellido = $request->her_segundo_apellido[$i];
                    $hermano->grado = $request->her_grado[$i];
                $hermano->save();
                $i++;
            }

        }elseif($request->tieneh == 'No'){
            //no pasa naranjas
        }else{
            //jesucristo, este error de donde bajo
        }
        
        dd($request->all());
    }
}
