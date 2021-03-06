<!-- Aspirantes Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aspirantes_id', 'Aspirantes Id:') !!}
    {!! Form::text('aspirantes_id', null, ['class' => 'form-control']) !!}
</div>

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

<!-- Grado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grado', 'Grado:') !!}
    {!! Form::text('grado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('hermanos.index') !!}" class="btn btn-default">Cancel</a>
</div>
