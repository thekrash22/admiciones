<!-- Solicitud Admision Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solicitud_admision', 'Solicitud Admision:') !!}
    {!! Form::text('solicitud_admision', null, ['class' => 'form-control']) !!}
</div>

<!-- Procedencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedencia', 'Procedencia:') !!}
    {!! Form::text('procedencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Certificado Registro Civil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('certificado_registro_civil', 'Certificado Registro Civil:') !!}
    {!! Form::text('certificado_registro_civil', null, ['class' => 'form-control']) !!}
</div>

<!-- Informe Academico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('informe_academico', 'Informe Academico:') !!}
    {!! Form::text('informe_academico', null, ['class' => 'form-control']) !!}
</div>

<!-- Paz Salvo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paz_salvo', 'Paz Salvo:') !!}
    {!! Form::text('paz_salvo', null, ['class' => 'form-control']) !!}
</div>

<!-- Recibo Inscripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recibo_inscripcion', 'Recibo Inscripcion:') !!}
    {!! Form::text('recibo_inscripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Aspirantes Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aspirantes_id', 'Aspirantes Id:') !!}
    {!! Form::text('aspirantes_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('documentosIncripcions.index') !!}" class="btn btn-default">Cancel</a>
</div>
