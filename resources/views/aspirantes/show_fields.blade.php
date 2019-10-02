<!-- Id Field -->
<div class="form-group col-md-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $aspirantes->id !!}</p>
</div>

<!-- Personas Id Field -->
<div class="form-group col-md-6">
    {!! Form::label('nombre', 'Nombre Aspirante:') !!}
    <p>{!!$aspirantes->persona->primer_nombre !!} {!! $aspirantes->persona->segundo_nombre !!} {{ $aspirantes->persona->primer_apellido}} {{$aspirantes->persona->segundo_apellido}}</p>
</div>
<!-- Foto Field -->
<div class="form-group col-md-6">
    <img src="{{asset('foto-estudiantes/'.$aspirantes->Foto)}}" style="width: 50%;">
</div>

<!-- Grado Field -->
<div class="form-group col-md-6">
    {!! Form::label('grado', 'Grado al que aspira:') !!}
    <p>{!! $aspirantes->grado !!}</p>
</div>

<!-- Numero Formulario Field -->
<div class="form-group col-md-6">
    {!! Form::label('tipodocs', 'Tipo Documento:') !!}
    <p>{!! $aspirantes->persona->tipo_documento !!}</p>
</div>

<!-- Fecha Inscripcion Field -->
<div class="form-group col-md-6">
    {!! Form::label('docnum', 'Número Documento:') !!}
    <p>{!! $aspirantes->persona->numero_documento !!}</p>
</div>


<div class="form-group col-md-6">
    {{ Form::label('expedicion', 'Lugar Expedición Documento:')}}
    <p>{{$aspirantes->persona->lugar_expedicion_documento}}</p>
</div>
<div class="form-group col-md-6">
    {!! Form::label('padre', 'Padre:') !!}
    <p>{!! $aspirantes->padres[0]->personas->primer_nombre !!} {!! $aspirantes->padres[0]->personas->segundo_nombre !!} {{$aspirantes->padres[0]->personas->primer_apellido}} {{$aspirantes->padres[0]->personas->segundo_apellido}}</p>
</div>
<div class="form-group col-md-6">
    {!! Form::label('madre', 'Madre:') !!}
    <p>{!! $aspirantes->padres[1]->personas->primer_nombre !!} {!! $aspirantes->padres[1]->personas->segundo_nombre !!} {{$aspirantes->padres[1]->personas->primer_apellido}} {{$aspirantes->padres[1]->personas->segundo_apellido}}</p>
</div>

<!-- Direccion Field -->
<div class="form-group col-md-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{!! $aspirantes->direccion !!}</p>
</div>

<!-- Barrio Field -->
<div class="form-group col-md-6">
    {!! Form::label('barrio', 'Barrio:') !!}
    <p>{!! $aspirantes->barrio !!}</p>
</div>

<!-- Telefono Field -->
<div class="form-group col-md-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{!! $aspirantes->telefono !!}</p>
</div>

<!-- Municipio Field -->
<div class="form-group col-md-6">
    {!! Form::label('municipio', 'Municipio:') !!}
    <p>{!! $aspirantes->municipio !!}</p>
</div>

<!-- Zona Field -->
<div class="form-group col-md-6">
    {!! Form::label('zona', 'Zona:') !!}
    <p>{!! $aspirantes->zona !!}</p>
</div>

<!-- Estrato Field -->
<div class="form-group col-md-6">
    {!! Form::label('estrato', 'Estrato:') !!}
    <p>{!! $aspirantes->estrato !!}</p>
</div>

<!-- Eps Field -->
<div class="form-group col-md-6">
    {!! Form::label('eps', 'Eps:') !!}
    <p>{!! $aspirantes->eps !!}</p>
</div>

<!-- Reponsable Field -->
<div class="form-group col-md-6">
    {!! Form::label('reponsable', 'Reponsable:') !!}
    <p>{!! $aspirantes->reponsable !!}</p>
</div>
@if($aspirantes->hermanos->count() > 0)
<div class="form-group col-md-12">
    <h4>Hermanos</h4>
    <div class="table-responsive">
        <table class="table" id="hermanos-table">
            <thead>
                <tr>
                    <th>Nombre completo</th>
                    <th>Grado</th>
                </tr>
            </thead>
            <tbody>
            @foreach($aspirantes->hermanos as $hermanos)
                <tr> 
                    <td>{!! $hermanos->primer_nombre !!} {!! $hermanos->segundo_nombre !!} {!! $hermanos->primer_apellido !!} {!! $hermanos->segundo_apellido !!}</td>
                    <td>{!! $hermanos->grado !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
<!-- Religion Field -->
<div class="form-group col-md-6">
    {!! Form::label('religion', 'Religion:') !!}
    <p>{!! $aspirantes->religion !!}</p>
</div>

