<!-- Personas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('personas_id', 'Personas Id:') !!}
    {!! Form::text('personas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Barrio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barrio', 'Barrio:') !!}
    {!! Form::text('barrio', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::number('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::number('celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correo', 'Correo:') !!}
    {!! Form::text('correo', null, ['class' => 'form-control']) !!}
</div>

<!-- Profesion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profesion', 'Profesion:') !!}
    {!! Form::text('profesion', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_empresa', 'Nombre Empresa:') !!}
    {!! Form::text('nombre_empresa', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_empresa', 'Telefono Empresa:') !!}
    {!! Form::number('telefono_empresa', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion_empresa', 'Direccion Empresa:') !!}
    {!! Form::text('direccion_empresa', null, ['class' => 'form-control']) !!}
</div>

<!-- Es Acudiente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('es_acudiente', 'Es Acudiente:') !!}
    {!! Form::text('es_acudiente', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('padres.index') !!}" class="btn btn-default">Cancel</a>
</div>
