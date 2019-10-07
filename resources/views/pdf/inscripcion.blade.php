<!doctype html>
<html lang="en">
    <head>

            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <!--CSS-->
            <!--<link rel="stylesheet" href="css.css">-->


           <link rel="stylesheet" href="css.css">

             <title>FORMULARIO DE ADMISIONES INSTITUTO LA MILAGROSA</title>
    </head>
    <body >

        <table  class="table table-bordered border" style="text-align: left;margin-bottom: 0px;font-size: small;">
            <tr>
                <td rowspan ="4" class="bor1" style="width:20%; padding-bottom: 0px; padding-top: 0px;"><img src="{{asset('imgs/01_Escudo_Presentacion_color.png')}}" width=150px height=150px /></td>
                <td rowspan ="4" style="width:50%; padding-bottom: 0px; padding-top: 0px;"><p style= "text-align: center;font-size: small;">INSTITUTO LA MILAGROSA<br>PROCESO DE GESTIÓN ADMISIÓN Y MATRÍCULA </p><p style= "text-align: center;">SOLICITUD DE ADMISIÓN</p></td>
                <td style="width:30%; padding-bottom: 0px; padding-top: 0px;"><p style="text-align: center;margin-bottom: 0px;" >AMFR01</p></td>
            <tr>
                <td style="padding-bottom: 0px; padding-top: 0px;">
                         <p style="text-align: center;margin-bottom: 0px;" >Versión</p>
                </td>
            </tr>
            <tr>
            <td style="padding-bottom: 0px; padding-top: 0px;"><p style="text-align: center;margin-bottom: 0px;" >Fecha de aprobación</p><p style="text-align: center;margin-bottom: 0px;" >23-04-19</p>
                            </td>
            </tr>
            <tr>
            <td style="padding-bottom: 0px; padding-top: 0px;"><p style="text-align: center;margin-bottom: 0px;" >Página 1 de 3</p></td>
            </tr>
        </table>
<br>
        <table class="table table-bordered"  style="text-align: left;margin-bottom: 0px;font-size: small;">

        <tr>
            <td colspan="10" style="padding-bottom: 25px; padding-top: 25px;"></td>
            <td rowspan="5" colspan="2" style="text-align:center;padding-bottom: 0px;padding-top: 0px;padding-left: 0px;padding-right: 0px;"><img style="width: 150px; height: 140px;" src="{{asset('foto-estudiantes/'.$aspirante->Foto)}}" /></td>
        </tr>
        <tr class="bor diva1">
            <td colspan="10" style="text-align:center; padding-bottom: 0px; padding-top: 0px;">(Esta inscripción no asegura la matrícula.<br>
                        El aspirante debe cumplir con todo el proceso de admisión)
</td>


        </tr>
        <tr class="diva1">
            <td colspan="2" style="padding-bottom: 0px; padding-top: 0px; padding-left: 1px;">Fecha de Inscripción: </td>
            <td colspan="7" style="padding-bottom: 0px; padding-top: 0px;"></td>
            <td rowspan="2" style="padding-bottom: 0px; padding-top: 0px; padding-left: 3px;">Formulario No.<br><center>{{ $aspirante->nformulario() }}</center></td>

        </tr>
        <tr class="diva1">
            <td colspan="4" style="padding-bottom: 0px; padding-top: 0px; padding-left: 1px;">Grado al que desea ingresar: </td>
            <td colspan="5" style="padding-bottom: 0px; padding-top: 0px; padding-left: 1px;">{{ $aspirante->grado}}</td>


        </tr>
        <tr>
            <td colspan="10" style="padding-bottom: 0px; padding-top: 10px;"></td>

        </tr>
</table>
<br>
        <table class="table-bordered table border"  style="text-align: left;margin-bottom: 0px;font-size: small;">

        <tr class="bor">
            <td colspan="11" class="diva1 td34" style="padding-bottom: 0px; padding-top: 0px;"><p style="text-align: center;margin-bottom: 0px;font-size: small;" >I. DATOS PERSONALES DEL ASPIRANTE</p></td>

        </tr>
        <tr class="bor">
            <td colspan="3" class="bor diva1" style=" padding-bottom: 0px;padding-top: 0px;padding-left: 3px; text-align: left;margin-bottom: 0px;font-size: small; ">Apellido Completo:</td>


            <td colspan="6" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->persona->primer_apellido}} {{$aspirante->persona->segundo_apellido}}</td>

            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Edad</td>
            <td style="padding-bottom: 0px; padding-top: 0px;">{{ $aspirante->edad() }}</td>
        </tr>
        <tr class="bor testp1">
            <td colspan="3" class="bor diva1" style=" padding-bottom: 0px;padding-top: 0px;padding-left: 3px; text-align: left;margin-bottom: 0px;font-size: small;">Nombre Completo</td>
            <td colspan="8" class="testp" style="padding-bottom: 0px; padding-top: 0px;"> {{$aspirante->persona->primer_nombre}} {{$aspirante->persona->segundo_nombre}}</td>
        </tr>
        <tr class="bor">
            <td colspan="3" rowspan="2" class="diva1" style="padding-bottom: 0px;padding-top: 10px;padding-left: 0px;padding-right: 0px; text-align: left;margin-bottom: 0px;font-size: small;">Fecha de nacimiento</td>
            <td class="diva1" style="padding-bottom: 0px;padding-top: 0px;padding-left: 0px;padding-right: 0px;">Día</td>
            <td class="diva1" style="padding-bottom: 0px;padding-top: 0px;padding-left: 0px;padding-right: 0px;">Mes</td>
            <td class="diva1" style="padding-bottom: 0px;padding-top: 0px;padding-left: 0px;padding-right: 0px;">Año</td>
            <td class="diva1" rowspan="2" style="padding-bottom: 0px; padding-top: 10px;">Lugar:</td>
            <td colspan="2" rowspan="2" style="padding-bottom: 0px; padding-top: 10px;">{{$aspirante->persona->lugar_nacimiento}}</td>
            <td class="diva1" rowspan="2" style="padding-bottom: 0px; padding-top: px;">Grupo Sanguíneo:</td>
            <td rowspan="2" style="padding-bottom: 0px; padding-top: 0px;"></td>
        </tr>
        <tr class="bor">
            <td colspan="3" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->persona->fecha_nacimiento->format('d-m-Y')}}</td>
        </tr>
        <tr>
            <td class="diva1" colspan="2" rowspan="2" style="padding-bottom: 0px;padding-top: 10px;padding-left: 0px; text-align: left;margin-bottom: 0px;font-size: small;">Identificación</td>
            <td class="diva1" colspan="4" style="padding-bottom: 0px; padding-top: 0px; text-align: center;margin-bottom: 0px;font-size: small;">Tipo de Documento</td>
            <td class="diva1" colspan="2" style="padding-bottom: 0px; padding-top: 0px; text-align: center;margin-bottom: 0px;font-size: small;">Número de Documento</td>
            <td class="diva1" colspan="3" style="padding-bottom: 0px; padding-top: 0px; text-align: center;margin-bottom: 0px;font-size: small;">Expedido en:</td>
        </tr>
        <tr>


            <td colspan="4" style="padding-bottom: 0px; padding-top: 0px; text-align: center;margin-bottom: 0px;font-size: small;">{{$aspirante->persona->tipodoc()}}</td>
            <td colspan="2" style="padding-bottom: 0px; padding-top: 0px; text-align: center;margin-bottom: 0px;font-size: small;">{{$aspirante->persona->numero_documento}}</td>
            <td colspan="3" style="padding-bottom: 0px; padding-top: 0px; text-align: center;margin-bottom: 0px;font-size: small;">{{$aspirante->persona->lugar_expedicion_documento}}</td>
        </tr>
        <tr>
            <td colspan="2" style="padding-bottom: 0px;padding-top: 0px;padding-left: 3px; text-align: left;margin-bottom: 0px;font-size: small;">Dirección:</td>
            <td colspan="9" style="padding-bottom: 0px; padding-top: 0px;"> {{$aspirante->direccion}}</td>
        </tr>
        <tr>
            <td colspan="2" style="padding-bottom: 0px;padding-top: 0px;padding-left: 3px; text-align: left;margin-bottom: 0px;font-size: small;">Barrio</td>
            <td colspan="5" style="padding-bottom: 0px; padding-top: 0px;"> {{$aspirante->barrio}}</td>
            <td style="padding-bottom: 0px; padding-top: 0px;">Teléfono</td>
            <td colspan="3" style="padding-bottom: 0px; padding-top: 0px;"> {{$aspirante->telefono}}</td>
        </tr>
        <tr>
        <td colspan="4" rowspan="2" style="padding-bottom: 0px;padding-top: 10px;padding-left: 3px;">Municipio donde Vive:   </td>
            <td colspan="4" style="text-align: center; padding-bottom: 0px; padding-top: 0px;">Zona</td>
            <td colspan="2" rowspan="2" style="padding-bottom: 0px; padding-top: 10px;">Estrato Donde Vive</td>
            <td rowspan="2" style="text-align:center; padding-bottom: 0px; padding-top: 10px;"> {{$aspirante->estrato}}</td>
        </tr>
        <tr>
            <td colspan="2" style="padding-bottom: 0px; padding-top: 0px;">Urbana: {{$aspirante->zoru()}}</td>
            <td colspan="2" style="padding-bottom: 0px; padding-top: 0px;">Rural: {{$aspirante->zour()}}</td>

        </tr>
        <tr>
            <td colspan="11" style="padding-bottom: 0px; padding-top: 10px;"></td>
        </tr>
        <tr>
        <td colspan="4" style="padding-bottom: 0px;padding-top: 0px;padding-left: 3px;">E.P.S del Aspirante:</td>
            <td colspan="7" style="padding-bottom: 0px; padding-top: 0px;"> {{$aspirante->eps}}</td>
        </tr>
        <tr>
            <td colspan="7" rowspan="2" style="text-align: center; padding-bottom: 0px; padding-top: 0px;">Tiene Hermanos en el Colegio:<br>(reñaciónelos a Continuación)</td>

            <td colspan="2" style="text-align: center; padding-bottom: 0px; padding-top: 0px;">Si:</td>
            <td colspan="2" style="text-align: center; padding-bottom: 0px; padding-top: 0px;">No:</td>
        </tr>
        <tr>
            <td colspan="2" style="padding-bottom: 0px; padding-top: 20px;">@if($aspirante->hermanos->count()>0)
                {{'X'}}
            @endif</td>
            <td colspan="2" style="padding-bottom: 0px; padding-top: 20px;">@if($aspirante->hermanos->count()==0)
                {{'X'}}
            @endif</td>
        </tr>
        <tr>
            <td colspan="9" style="text-align: center; padding-bottom: 0px; padding-top: 0px;">Nombres y Apellidos</td>
            <td colspan="2" style="text-align: center; padding-bottom: 0px; padding-top: 0px;">Grado</td>

        </tr>
        @if($aspirante->hermanos->count()==0)
            <tr>
                <td colspan="11" style="padding-bottom: 0px; padding-top: 20px;"></td>
            </tr>
            <tr>
            <td colspan="11" style="padding-bottom: 0px; padding-top: 20px;"></td>
            </tr>
        @else
            @foreach($aspirante->hermanos as $hermano)
            <tr>
                <td colspan="11" style="padding-bottom: 0px; padding-top: 20px;">{{$hermano->primer_nombre}} {{$hermano->segundo_nombre}} {{$hermano->primer_apellido}} {{$hermano->segundo_apellido}} </td>
                <td colspan="11" style="padding-bottom: 0px; padding-top: 20px;">{{$hermano->grado}}</td>
            </tr>
            @endforeach
        @endif

        </table>

        <br>
        <table class="table table-bordered"  style="text-align: left;margin-bottom: 0px;font-size: small;">

        <tr class="bor">
            <td colspan="11" class="diva1" style="text-align: center; padding-bottom: 0px; padding-top: 0px;">II. HISTORIA ACADÉMICA DEL ASPIRANTE</td>
        </tr>
        <tr class="bor">
            <td colspan="3" class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Colegio de procedencia actual</td>
            <td colspan="8" style="padding-bottom: 0px; padding-top: 0px;">aun no</td>
        </tr>
        <tr class="bor">
            <td colspan="3" class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Ha reiniciado algún grado</td>
            <td style="padding-bottom: 0px; padding-top: 0px;">Si @if($aspirante->historiaAcademica[0]->grados_repetidos != NULL) {{'X'}}</td>
            <td style="padding-bottom: 0px; padding-top: 0px;">No@else {{'X'}}</td>@endif
            <td colspan="6" style="padding-bottom: 0px; padding-top: 0px;">Cual {{$aspirante->historiaAcademica[0]->grados_repetidos}}</td>
        </tr>
        <tr class="bor">    
            <td colspan="11" class="diva1" style="text-align: center; padding-bottom: 0px; padding-top: 0px;">RELACIONE A CONTINUACIÓN LOS COLEGIOS DONDE HA ESTUDIADO:</td>
        </tr>
        <tr class="bor diva1">
            <td rowspan="2" style="text-align:center; padding-bottom: 0px; padding-top: 0px;">Grado(s)</td>
            <td rowspan="2" style="text-align:center; padding-bottom: 0px; padding-top: 0px;">Año(s)</td>
            <td colspan="7" rowspan="2" style="text-align:center; padding-bottom: 0px; padding-top: 0px;">Nombre del Establecimiento</td>
            <td colspan="2" style="text-align:center; padding-bottom: 0px; padding-top: 0px;">Establecimiento</td>
        </tr>
        <tr class="bor diva1">
            <td style="padding-bottom: 0px; padding-top: 0px;">Privado</td>
            <td style="padding-bottom: 0px; padding-top: 0px;">Público</td>
        </tr>
        @if($aspirante->historiaAcademica[0]->relacionColegios->count() == 0)
        <tr class="bor">
            <td style="padding-bottom: 0px; padding-top: 25px;"></td>
            <td style="padding-bottom: 0px; padding-top: 0px;"></td>
            <td colspan="7" style="padding-bottom: 0px; padding-top: 0px;"></td>
            <td style="padding-bottom: 0px; padding-top: 0px;"></td>
            <td style="padding-bottom: 0px; padding-top: 0px;"></td>
        </tr>
        <tr class="bor">
            <td style="padding-bottom: 0px; padding-top: 25px;"></td>
            <td style="padding-bottom: 0px; padding-top: 0px;"></td>
            <td colspan="7" style="padding-bottom: 0px; padding-top: 0px;"></td>
            <td style="padding-bottom: 0px; padding-top: 0px;"></td>
            <td style="padding-bottom: 0px; padding-top: 0px;"></td>
        </tr>
        @else
            @foreach ($aspirante->historiaAcademica[0]->relacionColegios as $colegio)
            <tr class="bor">
                <td style="padding-bottom: 0px; padding-top: 25px;">{{$colegio->grado}}</td>
                <td style="padding-bottom: 0px; padding-top: 0px;">{{$colegio->ano}}</td>
                <td colspan="7" style="padding-bottom: 0px; padding-top: 0px;">{{$colegio->nombre_colegios}}</td>
                <td style="padding-bottom: 0px; padding-top: 0px;">@if($colegio->tipo_intitucion == 'privado'){{'X'}}@endif</td>
                <td style="padding-bottom: 0px; padding-top: 0px;">@if($colegio->tipo_intitucion == 'publico'){{'X'}}@endif</td>
            </tr>
            @endforeach
        @endif

        </table>
        <br>
        <table  class="table table-bordered border"  style="text-align: left;margin-bottom: 0px;font-size: small;" >
            <tr>
                <td rowspan ="4" class="bor1" style="width:20%; padding-bottom: 0px; padding-top: 0px;"><img src="{{asset('imgs/01_Escudo_Presentacion_color.png')}}" width=150px height=150px /></td>
                <td rowspan ="4" style="width:50%; padding-bottom: 0px; padding-top: 0px;"><p style= "text-align: center;font-size: small;">INSTITUTO LA MILAGROSA<br>PROCESO DE GESTIÓN ADMISIÓN Y MATRÍCULA </p><p style= "text-align: center;">SOLICITUD DE ADMISIÓN</p></td>
                <td style="width:30%; padding-bottom: 0px; padding-top: 0px;"><p style="text-align: center;margin-bottom: 0px;" >AMFR01</p></td>
            <tr>
                <td style="padding-bottom: 0px; padding-top: 0px;">
                         <p style="text-align: center;margin-bottom: 0px;" >Versión</p>
                </td>
            </tr>
            <tr>
            <td style="padding-bottom: 0px; padding-top: 0px;"><p style="text-align: center;margin-bottom: 0px;" >Fecha de aprobación</p><p style="text-align: center;margin-bottom: 0px;" >23-04-19</p>
                            </td>
            </tr>
            <tr>
            <td style="padding-bottom: 0px; padding-top: 0px;"><p style="text-align: center;margin-bottom: 0px;" >Página 2 de 3</p></td>
            </tr>
        </table>
        <br>

        <table class="table table-bordered"  style="text-align: left;margin-bottom: 0px;font-size: small;">

        <tr class="bor diva1">
            <td colspan="11" style="text-align:center; padding-bottom: 0px; padding-top: 0px;">III. DATOS FAMILIARES</td>
        </tr>
        <tr class="bor diva1">
            <td colspan="11" style="text-align:center; padding-bottom: 0px; padding-top: 0px;">DATOS DEL PADRE</td>
        </tr>
        <tr class="bor">
            <td colspan="6" style="padding-bottom: 0px; padding-top: 0px;">Apellidos: {{$aspirante->padres[0]->personas->primer_apellido}} {{$aspirante->padres[0]->personas->segundo_apellido}}</td>
            <td colspan="5" style="padding-bottom: 0px; padding-top: 0px;">Nombres: {{$aspirante->padres[0]->personas->primer_nombre}} {{$aspirante->padres[0]->personas->segundo_nombre}}</td>
        </tr>
        <tr class="bor">
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Cédula:</td>
            <td colspan="5" style="padding-bottom: 0px; padding-top: 0px;"> {{$aspirante->padres[0]->personas->cedula}}</td>
            <td colspan="2" class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Expedida en:</td>
            <td colspan="3" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[0]->personas->lugar_expedicion_documento}}</td>
        </tr>
        <tr class="bor">
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Lugar de Nacimiento:</td>
            <td colspan="5" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[0]->personas->lugar_nacimiento}}</td>
            <td colspan="2" class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Fecha de nacimiento:</td>
            <td colspan="3" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[0]->personas->fecha_nacimiento}}</td>
        </tr>
        <tr class="bor">
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Dirección: </td>
            <td colspan="6" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[0]->direccion}}</td>
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Barrio:</td>
            <td colspan="3" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[0]->barrio}}</td>
        </tr>
        <tr class="bor">
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Teléfono:</td>
            <td colspan="6" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[0]->telefono}}</td>
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Celular:</td>
            <td colspan="3" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[0]->celular}}</td>

        </tr>
        <tr class="bor">
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Correo Electrónico:</td>
            <td colspan="10" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[0]->correo}}</td>
        </tr>
        <tr class="bor">
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Profesión / ocupación:</td>
            <td colspan="10" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[0]->profesion}}</td>
        </tr>
        <tr class="diva1 bor">
            <td colspan="5" style="text-align:center; padding-bottom: 0px; padding-top: 0px;">Empresa donde labora: </td>
            <td colspan="4" style="text-align:center; padding-bottom: 0px; padding-top: 0px;">Dirección: </td>
            <td colspan="2" style="text-align:center; padding-bottom: 0px; padding-top: 0px;">Teléfono: </td>
        </tr>
        <tr class="bor">
            <td colspan="5" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[0]->nombre_empresa}}</td>
            <td colspan="4" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[0]->direccion_empresa}}</td>
            <td colspan="2" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[0]->telefono_empresa}}</td>
        </tr>
         </table>
         <br>
         <table class="table table-bordered"  style="text-align: left;margin-bottom: 0px;font-size: small;">

        <tr class="bor diva1">
            <td colspan="11" style="text-align:center; padding-bottom: 0px; padding-top: 0px;">DATOS DE LA MADRE</td>
        </tr>
        <tr class="bor">
            <td colspan="6" style="padding-bottom: 0px; padding-top: 0px;">Apellidos: {{$aspirante->padres[1]->personas->primer_apellido}} {{$aspirante->padres[1]->personas->segundo_apellido}}</td>
            <td colspan="5" style="padding-bottom: 0px; padding-top: 0px;">Nombres: {{$aspirante->padres[1]->personas->primer_nombre}} {{$aspirante->padres[1]->personas->segundo_nombre}}</td>
        </tr>
        <tr class="bor">
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Cédula:</td>
            <td colspan="5" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[1]->personas->cedula}}<</td>
            <td colspan="2" class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Expedida en:</td>
            <td colspan="3" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[1]->personas->lugar_expedicion_documento}}</td>
        </tr>
        <tr class="bor">
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Lugar de Nacimiento:</td>
            <td colspan="5" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[1]->personas->lugar_nacimiento}}</td>
            <td colspan="2" class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Fecha de nacimiento:</td>
            <td colspan="3" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[1]->personas->fecha_nacimiento}}</td>
        </tr>
        <tr class="bor">
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Dirección: </td>
            <td colspan="6" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[1]->direccion}}</td>
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Barrio:</td>
            <td colspan="3" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[1]->barrio}}</td>
        </tr>
        <tr class="bor">
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Teléfono:</td>
            <td colspan="6" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[1]->telefono}}</td>
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Celular:</td>
            <td colspan="3" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[1]->celular}}</td>

        </tr>
        <tr class="bor">
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Correo Electrónico:</td>
            <td colspan="10" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[1]->correo}}</td>
        </tr>
        <tr class="bor">
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Profesión / ocupación:</td>
            <td colspan="10" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[1]->profesion}}</td>
        </tr>
        <tr class="diva1 bor">
            <td colspan="5" style="text-align:center; padding-bottom: 0px; padding-top: 0px;">Empresa donde labora: </td>
            <td colspan="4" style="text-align:center; padding-bottom: 0px; padding-top: 0px;">Dirección: </td>
            <td colspan="2" style="text-align:center; padding-bottom: 0px; padding-top: 0px;">Teléfono: </td>
        </tr>
        <tr class="bor">
            <td colspan="5" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[1]->nombre_empresa}}</td>
            <td colspan="4" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[1]->direccion_empresa}}</td>
            <td colspan="2" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[1]->telefono_empresa}}</td>
        </tr>
         </table>
         <br>
         <table class="table table-bordered"  style="text-align: left;margin-bottom: 0px;font-size: small;">

        <tr class="bor diva1">
            <td colspan="11" style="text-align:center; padding-bottom: 0px; padding-top: 0px;">IV. EN CASO QUE LA ASPIRANTE NO VIVA CON SUS PADRES</td>
        </tr>
        <tr class="bor diva1">
            <td colspan="11" style="text-align:center; padding-bottom: 0px; padding-top: 0px;">INFORMACIÓN DEL ACUDIENTE:</td>
        </tr>
        
        <tr class="bor">
            {{$aspirante->acudientes()}}
            <td colspan="6" style="padding-bottom: 0px; padding-top: 0px;">Apellidos: {{$aspirante->padres[2]->personas->primer_apellido}} {{$aspirante->padres[2]->personas->segundo_apellido}}</td>
            <td colspan="5" style="padding-bottom: 0px; padding-top: 0px;">Nombres: {{$aspirante->padres[2]->personas->primer_nombre}} {{$aspirante->padres[2]->personas->segundo_nombre}}</td>
        </tr>
        <tr class="bor">
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Cédula:</td>
            <td colspan="5" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[2]->personas->cedula}}</td>
            <td colspan="2" class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Expedida en:</td>
            <td colspan="3" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[2]->personas->lugar_expedicion_documento}}</td>
        </tr>
        <tr class="bor">
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Lugar de Nacimiento:</td>
            <td colspan="5" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[2]->personas->lugar_nacimiento}}</td>
            <td colspan="2" class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Fecha de nacimiento:</td>
            <td colspan="3" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[2]->personas->fecha_nacimiento}}</td>
        </tr>
        <tr class="bor">
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Dirección: </td>
            <td colspan="6" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[2]->direccion}}</td>
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Barrio:</td>
            <td colspan="3" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[2]->barrio}}</td>
        </tr>
        <tr class="bor">
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Teléfono:</td>
            <td colspan="6" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[2]->telefono}}</td>
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Celular:</td>
            <td colspan="3" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[2]->celular}}</td>

        </tr>
        <tr class="bor">
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Correo Electrónico:</td>
            <td colspan="10" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[2]->correo}}</td>
        </tr>
        <tr class="bor">
            <td class="diva1" style="padding-bottom: 0px; padding-top: 0px;">Profesión / ocupación:</td>
            <td colspan="10" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[2]->profesion}}</td>
        </tr>
        <tr class="diva1 bor">
            <td colspan="5" style="text-align:center; padding-bottom: 0px; padding-top: 0px;">Empresa donde labora: </td>
            <td colspan="4" style="text-align:center; padding-bottom: 0px; padding-top: 0px;">Dirección: </td>
            <td colspan="2" style="text-align:center; padding-bottom: 0px; padding-top: 0px;">Teléfono: </td>
        </tr>
        <tr class="bor">
            <td colspan="5" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[2]->nombre_empresa}}</td>
            <td colspan="4" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[2]->direccion_empresa}}</td>
            <td colspan="2" style="padding-bottom: 0px; padding-top: 0px;">{{$aspirante->padres[2]->telefono_empresa}}</td>
        </tr>
         </table>
         <br>
         <table  class="table table-bordered border"  style="text-align: left;margin-bottom: 0px;font-size: small;">
            <tr>
                <td rowspan ="4" class="bor1" style="width:20%; padding-bottom: 0px; padding-top: 0px;"><img src="{{asset('imgs/01_Escudo_Presentacion_color.png')}}" width=150px height=150px /></td>
                <td rowspan ="4" style="width:50%; padding-bottom: 0px; padding-top: 0px;"><p style= "text-align: center;font-size: small;">INSTITUTO LA MILAGROSA<br>PROCESO DE GESTIÓN ADMISIÓN Y MATRÍCULA </p><p style= "text-align: center;">SOLICITUD DE ADMISIÓN</p></td>
                <td style="width:30%; padding-bottom: 0px; padding-top: 0px;"><p style="text-align: center;margin-bottom: 0px;" >AMFR01</p></td>
            <tr>
                <td style="padding-bottom: 0px; padding-top: 0px;">
                         <p style="text-align: center;margin-bottom: 0px;" >Versión</p>
                </td>
            </tr>
            <tr>
            <td style="padding-bottom: 0px; padding-top: 0px;"><p style="text-align: center;margin-bottom: 0px;" >Fecha de aprobación</p><p style="text-align: center;margin-bottom: 0px;" >23-04-19</p>
                            </td>
            </tr>
            <tr>
            <td style="padding-bottom: 0px; padding-top: 0px;"><p style="text-align: center;margin-bottom: 0px;" >Página 3 de 3</p></td>
            </tr>
        </table>
        <br>
        <table class="table table-bordered"  style="text-align: left;margin-bottom: 0px;font-size: small;">

        <tr class="bor diva1">
            <td colspan="11" style="text-align:center;  padding-bottom: 0px; padding-top: 0px;">V. RESPONSABLE DEL PAGO DE LOS COSTOS EDUCATIVOS   </td>
        </tr>
        <tr class="bor">
            <td colspan="11" style="padding-bottom: 0px; padding-top: 0px;">Relación con la Aspirante:  Madre:__   Padre: ___    Familiar:___   Otro: ___</td>
        </tr>
       </table>

       <table class="table table-bordered"  style="text-align: left;margin-bottom: 0px;font-size: small;">

        <tr class="bor">
            <td colspan="11" style="padding-bottom: 0px; padding-top: 0px;">Religión que profesa:   Católica: __      Cristiana: __    Otra, ¿cuál? ________________________</td>
        </tr>
        <tr class="bor">
            <td colspan="11" style="padding-bottom: 0px; padding-top: 0px;">¿La familia y el aspirante aceptan el carácter confesional CATÓLICO de la Institución? SI___ NO___</td>
        </tr>
       </table>
       <br>
       <table class="table table-bordered"  style="text-align: left;margin-bottom: 0px;font-size: small;">

        <tr class="bor diva1">
            <td colspan="11" style="text-align:center;  padding-bottom: 0px; padding-top: 0px;">VI. OBSERVACIONES</td>
        </tr>
        <tr class="bor">
            <td colspan="11" style="padding-bottom: 0px; padding-top: 25px;"></td>
        </tr>
        <tr class="bor">
            <td colspan="11" style="padding-bottom: 0px; padding-top: 25px;"></td>
        </tr>
        <tr class="bor">
            <td colspan="11" style="padding-bottom: 0px; padding-top: 25px;"></td>
        </tr>
        <tr class="bor">
            <td colspan="11" style="padding-bottom: 0px; padding-top: 25px;"></td>
        </tr>
       </table>
       <br>
       <table class="table table-bordered"  style="text-align: left;margin-bottom: 0px;font-size: small;">

        <tr class="bor diva1">
            <td colspan="11" style="text-align:center; padding-bottom: 0px; padding-top: 0px;">ACUDIENTE DEL ASPIRANTE EN LA INSTITUCIÓN</td>
        </tr>
        <tr class="bor">
            <td colspan="5" style="padding-bottom: 0px; padding-top: 45px;">Nombre:</td>
            <td colspan="6" style="padding-bottom: 0px; padding-top: 45px;">Firma:</td>
        </tr>
</table>












    </body>
</html>
