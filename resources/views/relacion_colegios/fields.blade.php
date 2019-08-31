<!-- Historia Academicas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('historia_academicas_id', 'Historia Academicas Id:') !!}
    {!! Form::text('historia_academicas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Grado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grado', 'Grado:') !!}
    {!! Form::text('grado', null, ['class' => 'form-control']) !!}
</div>

<!-- Ano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ano', 'Ano:') !!}
    {!! Form::text('ano', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Colegios Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_colegios', 'Nombre Colegios:') !!}
    {!! Form::text('nombre_colegios', null, ['class' => 'form-control']) !!}
</div>

<!-- Ciudad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ciudad', 'Ciudad:') !!}
    {!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
</div>

<!-- Motivo Retiro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('motivo_retiro', 'Motivo Retiro:') !!}
    {!! Form::text('motivo_retiro', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Intitucion Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tipo_intitucion', 'Tipo Intitucion:') !!}
    <label class="radio-inline">
        {!! Form::radio('tipo_intitucion', "Privado", null) !!} Privado
    </label>

    <label class="radio-inline">
        {!! Form::radio('tipo_intitucion', "Publico", null) !!} Publico
    </label>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('relacionColegios.index') !!}" class="btn btn-default">Cancel</a>
</div>
