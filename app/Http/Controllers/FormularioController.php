<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personas;
use App\Models\Aspirantes;
use App\Models\Hermanos;
use App\Models\HistoriaAcademica;
use App\Models\RelacionColegio;
use App\Models\Padres;
use App\Models\DocumentosIncripcion;
use Flash;
use Response;
use Barryvdh\DomPDF\Facade as PDF;


class FormularioController extends Controller
{
    public function formulario()
    {
        return view('formularios.create');
    }
    public function store(Request $request)
    {
    
        /*$pv = $request->pa_primer_nombre ? $request->pa_primer_nombre : 'Noname';
        dd($pv);*/
        //dd($request->col_grado[0]);
        request()->validate([
            'foto_est' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->foto_est ){
            $imageName = time().'.'.request()->foto_est->getClientOriginalExtension();
            request()->foto_est->move(public_path('foto-estudiantes'), $imageName);
        }else{
            $imageName = 'sin-foto';
        }
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
            $aspirante->contacto = $request->email_contacto;
        $aspirante->save();

        $padre_persona = New Personas();
            $padre_persona->primer_nombre = $request->pa_primer_nombre ? $request->pa_primer_nombre : 'Sin-datos';
            $padre_persona->segundo_nombre = $request->pa_segundo_nombre ? $request->pa_segundo_nombre : 'Sin-datos';
            $padre_persona->primer_apellido = $request->pa_primer_apellido ? $request->pa_primer_apellido : 'Sin-datos';
            $padre_persona->segundo_apellido = $request->pa_segundo_apellido ? $request->pa_segundo_apellido : 'Sin-datos';
            $padre_persona->tipo_documento = 'CC';
            $padre_persona->numero_documento = $request->pa_cedula ? $request->pa_cedula : 'Sin-datos';
            $padre_persona->lugar_expedicion_documento = $request->pa_lugar_expedicion_documento ? $request->pa_lugar_expedicion_documento : 'Sin-datos';
            $padre_persona->fecha_nacimiento = $request->pa_fecha_nacimiento ? $request->pa_fecha_nacimiento : NULL;
            $padre_persona->lugar_nacimiento = $request->pa_lugar_nacimiento ? $request->pa_lugar_nacimiento : 'Sin-datos';
        $padre_persona->save();

        $padre = New Padres();
            $padre->personas_id = $padre_persona->id;
            $padre->aspirantes_id = $aspirante->id;
            $padre->direccion = $request->pa_direccion ? $request->pa_direccion : 'Sin-datos';
            $padre->barrio = $request->pa_barrio ? $request->pa_barrio : 'Sin-datos';
            $padre->telefono = $request->pa_telefono ? $request->pa_telefono : 'Sin-datos';
            $padre->celular = $request->pa_celular ? $request->pa_celular : 'Sin-datos';
            $padre->correo = $request->pa_correo ? $request->pa_correo : 'Sin-datos';
            $padre->profesion = $request->pa_profesion ? $request->pa_profesion : 'Sin-datos';
            $padre->nombre_empresa = $request->as_empresa ? $request->as_empresa : 'Sin-datos';
            $padre->telefono_empresa = $request->pa_emp_telefono ? $request->pa_emp_telefono : 'Sin-datos';
            $padre->direccion_empresa = $request->pa_emp_dirreccion ? $request->pa_emp_dirreccion : 'Sin-datos';
            $padre->es_acudiente = false;
        $padre->save();

        $madre_persona = New Personas();
            $madre_persona->primer_nombre = $request->ma_primer_nombre ? $request->ma_primer_nombre : 'Sin-datos';
            $madre_persona->segundo_nombre = $request->ma_segundo_nombre ? $request->ma_segundo_nombre : 'Sin-datos';
            $madre_persona->primer_apellido = $request->ma_primer_apellido ? $request->ma_primer_apellido : 'Sin-datos';
            $madre_persona->segundo_apellido = $request->ma_segundo_apellido ? $request->ma_segundo_apellido : 'Sin-datos';
            $madre_persona->tipo_documento = 'CC';
            $madre_persona->numero_documento = $request->ma_cedula ? $request->ma_cedula : 'Sin-datos';
            $madre_persona->lugar_expedicion_documento = $request->ma_lugar_expedicion_documento ? $request->ma_lugar_expedicion_documento : 'Sin-datos';
            $madre_persona->fecha_nacimiento = $request->ma_fecha_nacimiento ? $request->ma_fecha_nacimiento : NULL;
            $madre_persona->lugar_nacimiento = $request->ma_lugar_nacimiento ? $request->ma_lugar_nacimiento : 'Sin-datos';
        $madre_persona->save();

        $madre = New Padres();
            $madre->personas_id = $madre_persona->id;
            $madre->aspirantes_id = $aspirante->id;
            $madre->direccion = $request->ma_direccion ? $request->ma_direccion : 'Sin-datos';
            $madre->barrio = $request->ma_barrio ? $request->ma_barrio : 'Sin-datos';
            $madre->telefono = $request->ma_telefono ? $request->ma_telefono : 'Sin-datos';
            $madre->celular = $request->ma_celular ? $request->ma_celular : 'Sin-datos';
            $madre->correo = $request->ma_correo ? $request->ma_correo : 'Sin-datos';
            $madre->profesion = $request->ma_profesion ? $request->ma_profesion : 'Sin-datos';
            $madre->nombre_empresa = $request->ma_empresa ? $request->ma_empresa : 'Sin-datos';
            $madre->telefono_empresa = $request->ma_emp_telefono ? $request->ma_emp_telefono : 'Sin-datos';
            $madre->direccion_empresa = $request->ma_emp_dirreccion ? $request->ma_emp_dirreccion : 'Sin-datos';
            $madre->es_acudiente = false;
        $madre->save();

        $historia = New HistoriaAcademica();
            $historia->aspirantes_id = $aspirante->id;
            $historia->colegio_procedencia = $request->has_col or 'Sin dato';
            $historia->grados_repetidos = $request->anios_reiniciados or '0';
        $historia->save();
        
        if($request->has_col){
            $i=0;
            foreach($request->col_grado as $col_grado){
                $colegio = New RelacionColegio();
                $colegio->historia_academicas_id = $historia->id;
                $colegio->grado = $request->col_grado[$i] ? $request->col_grado[$i] : 'Sin-datos';
                $colegio->ano = $request->col_anio[$i] ? $request->col_anio[$i] : 'Sin-datos';
                $colegio->nombre_colegios = $request->col_nombre[$i] ? $request->col_nombre[$i] : 'Sin-datos';
                $colegio->ciudad = $request->col_ciudad[$i] ? $request->col_ciudad[$i] : 'Sin-datos';
                $colegio->motivo_retiro = $request->col_motivo_retiro[$i] ? $request->col_motivo_retiro[$i] : 'Sin-datos';
                $colegio->tipo_intitucion = $request->col_estrato[$i] ? $request->col_estrato[$i] : 'Sin-datos';
                $colegio->save();
                $i++;
            }
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
        return redirect()->route('formulario.documentosinscripcion', ['id' => $aspirante->id]);
        //dd($request->all());
    }

    public function documentos($id)
    {
        //dd($id);
        return view('docs.create',compact('id'));
    }
    public function documentos_inscripcion($id)
    {
        //dd($id);
        return view('docs.create-inscripcion',compact('id'));
    }
    public function inscripcion(Request $request)
    {
        if(Aspirantes::find($request->aspirantes_id)){
            request()->validate([
                'solicitud_admision' => 'image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
                'procedencia' => 'image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
                'certificado_registro_civil' => 'image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
                'informe_academico' => 'image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
                'paz_salvo' => 'image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
                'recibo_inscripcion' => 'image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
            ]);
            if($request->solicitud_admision && $request->procedencia && $request->certificado_registro_civil && $request->informe_academico && $request->paz_salvo && $request->recibo_inscripcion){

                $imageName = time();
                request()->solicitud_admision->move(public_path('docs-admision'), 'solicitud_admision-'.$imageName.'.'.request()->solicitud_admision->getClientOriginalExtension());
                request()->procedencia->move(public_path('docs-admision'), 'procedencia-'.$imageName.'.'.request()->procedencia->getClientOriginalExtension());
                request()->certificado_registro_civil->move(public_path('docs-admision'), 'certificado_registro_civil-'.$imageName.'.'.request()->certificado_registro_civil->getClientOriginalExtension());
                request()->informe_academico->move(public_path('docs-admision'), 'informe_academico-'.$imageName.'.'.request()->informe_academico->getClientOriginalExtension());
                request()->paz_salvo->move(public_path('docs-admision'), 'paz_salvo-'.$imageName.'.'.request()->paz_salvo->getClientOriginalExtension());
                request()->recibo_inscripcion->move(public_path('docs-admision'), 'recibo_inscripcion-'.$imageName.'.'.request()->recibo_inscripcion->getClientOriginalExtension());

                $documentos_inscripcion = new DocumentosIncripcion();
                $documentos_inscripcion->solicitud_admision = 'solicitud_admision-'.$imageName.'.'.request()->solicitud_admision->getClientOriginalExtension();
                $documentos_inscripcion->procedencia = 'procedencia-'.$imageName.'.'.request()->procedencia->getClientOriginalExtension();
                $documentos_inscripcion->certificado_registro_civil = 'certificado_registro_civil-'.$imageName.'.'.request()->certificado_registro_civil->getClientOriginalExtension();
                $documentos_inscripcion->informe_academico = 'informe_academico-'.$imageName.'.'.request()->informe_academico->getClientOriginalExtension();
                $documentos_inscripcion->paz_salvo = 'paz_salvo-'.$imageName.'.'.request()->paz_salvo->getClientOriginalExtension();
                $documentos_inscripcion->recibo_inscripcion = 'recibo_inscripcion-'.$imageName.'.'.request()->recibo_inscripcion->getClientOriginalExtension();
                $documentos_inscripcion->aspirantes_id = $request->aspirantes_id;
                $documentos_inscripcion->save();
                dd($documentos_inscripcion);

            }
        }else{
            Flash::error('El Aspirante no existe, favor llene el formulario');
            return redirect(route('formulario.create'));
        }
        //dd($request->all());
    }
    public function pdf()
    {
        $data = ['dato1' => 'ejemplo'];
        $pdf = PDF::loadView('pdf.inscripcion', $data);
        return $pdf->download('inscripcion.pdf');
    }
}
