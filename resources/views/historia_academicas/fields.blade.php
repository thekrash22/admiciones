<!-- Aspirantes Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aspirantes_id', 'Aspirantes Id:') !!}
    {!! Form::text('aspirantes_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Colegio Procedencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('colegio_procedencia', 'Colegio Procedencia:') !!}
    {!! Form::text('colegio_procedencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Grados Repetidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grados_repetidos', 'Grados Repetidos:') !!}
    {!! Form::text('grados_repetidos', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('historiaAcademicas.index') !!}" class="btn btn-default">Cancel</a>
</div>
