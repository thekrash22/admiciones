<!-- Aspirantes Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aspirantes_id', 'Aspirantes Id:') !!}
    {!! Form::text('aspirantes_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tarjeta Identidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tarjeta_identidad', 'Tarjeta Identidad:') !!}
    {!! Form::file('tarjeta_identidad') !!}
</div>
<div class="clearfix"></div>

<!-- Costancia Comportamiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costancia_comportamiento', 'Costancia Comportamiento:') !!}
    {!! Form::file('costancia_comportamiento') !!}
</div>
<div class="clearfix"></div>

<!-- Certificado Medico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('certificado_medico', 'Certificado Medico:') !!}
    {!! Form::file('certificado_medico') !!}
</div>
<div class="clearfix"></div>

<!-- Afiliacion Salud Field -->
<div class="form-group col-sm-6">
    {!! Form::label('afiliacion_salud', 'Afiliacion Salud:') !!}
    {!! Form::file('afiliacion_salud') !!}
</div>
<div class="clearfix"></div>

<!-- Cedula Papas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cedula_papas', 'Cedula Papas:') !!}
    {!! Form::file('cedula_papas') !!}
</div>
<div class="clearfix"></div>

<!-- Carnet Vacunacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carnet_vacunacion', 'Carnet Vacunacion:') !!}
    {!! Form::file('carnet_vacunacion') !!}
</div>
<div class="clearfix"></div>

<!-- Examen Aud Vis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('examen_aud_vis', 'Examen Aud Vis:') !!}
    {!! Form::file('examen_aud_vis') !!}
</div>
<div class="clearfix"></div>

<!-- Paz Salvo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paz_salvo', 'Paz Salvo:') !!}
    {!! Form::file('paz_salvo') !!}
</div>
<div class="clearfix"></div>

<!-- Informe Final Field -->
<div class="form-group col-sm-6">
    {!! Form::label('informe_final', 'Informe Final:') !!}
    {!! Form::file('informe_final') !!}
</div>
<div class="clearfix"></div>

<!-- Certificado Notas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('certificado_notas', 'Certificado Notas:') !!}
    {!! Form::file('certificado_notas') !!}
</div>
<div class="clearfix"></div>

<!-- Simat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('simat', 'Simat:') !!}
    {!! Form::file('simat') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('documentos.index') !!}" class="btn btn-default">Cancel</a>
</div>
