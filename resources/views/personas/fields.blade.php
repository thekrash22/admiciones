<!-- Primer Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('primer_nombre', 'Primer Nombre:') !!}
    {!! Form::text('primer_nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Segundo Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('segundo_nombre', 'Segundo Nombre:') !!}
    {!! Form::text('segundo_nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Primer Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('primer_apellido', 'Primer Apellido:') !!}
    {!! Form::text('primer_apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Segundo Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('segundo_apellido', 'Segundo Apellido:') !!}
    {!! Form::text('segundo_apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Documento Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tipo_documento', 'Tipo Documento:') !!}
    <label class="radio-inline">
        {!! Form::radio('tipo_documento', "Registro Civil", null) !!} Registro Civil
    </label>

    <label class="radio-inline">
        {!! Form::radio('tipo_documento', "Tarjeta de identidad", null) !!} Tarjeta de identidad
    </label>

    <label class="radio-inline">
        {!! Form::radio('tipo_documento', "Cedula Colomniana", null) !!} Cedula Colomniana
    </label>

    <label class="radio-inline">
        {!! Form::radio('tipo_documento', "Cedula Extranjera", null) !!} Cedula Extranjera
    </label>

    <label class="radio-inline">
        {!! Form::radio('tipo_documento', " Pasaporte", null) !!}  Pasaporte
    </label>

</div>

<!-- Numero Documento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_documento', 'Numero Documento:') !!}
    {!! Form::number('numero_documento', null, ['class' => 'form-control']) !!}
</div>

<!-- Lugar Expedicion Documento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lugar_expedicion_documento', 'Lugar Expedicion Documento:') !!}
    {!! Form::text('lugar_expedicion_documento', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Nacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_nacimiento', 'Fecha Nacimiento:') !!}
    {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control','id'=>'fecha_nacimiento']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#fecha_nacimiento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Lugar Nacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lugar_nacimiento', 'Lugar Nacimiento:') !!}
    {!! Form::text('lugar_nacimiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('personas.index') !!}" class="btn btn-default">Cancel</a>
</div>
