<!-- Personas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('personas_id', 'Personas Id:') !!}
    {!! Form::text('personas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Grado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grado', 'Grado:') !!}
    {!! Form::text('grado', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Formulario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_formulario', 'Numero Formulario:') !!}
    {!! Form::text('numero_formulario', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Inscripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inscripcion', 'Fecha Inscripcion:') !!}
    {!! Form::date('fecha_inscripcion', null, ['class' => 'form-control','id'=>'fecha_inscripcion']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#fecha_inscripcion').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

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
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('municipio', 'Municipio:') !!}
    {!! Form::text('municipio', null, ['class' => 'form-control']) !!}
</div>

<!-- Zona Field -->
<div class="form-group col-sm-12">
    {!! Form::label('zona', 'Zona:') !!}
    <label class="radio-inline">
        {!! Form::radio('zona', "Urbana", null) !!} Urbana
    </label>

    <label class="radio-inline">
        {!! Form::radio('zona', "Rural", null) !!} Rural
    </label>

</div>

<!-- Estrato Field -->
<div class="form-group col-sm-12">
    {!! Form::label('estrato', 'Estrato:') !!}
    <label class="radio-inline">
        {!! Form::radio('estrato', "Uno", null) !!} Uno
    </label>

    <label class="radio-inline">
        {!! Form::radio('estrato', "Dos", null) !!} Dos
    </label>

    <label class="radio-inline">
        {!! Form::radio('estrato', "Tres", null) !!} Tres
    </label>

    <label class="radio-inline">
        {!! Form::radio('estrato', "Cuatro", null) !!} Cuatro
    </label>

    <label class="radio-inline">
        {!! Form::radio('estrato', "Cinco", null) !!} Cinco
    </label>

    <label class="radio-inline">
        {!! Form::radio('estrato', "Seis", null) !!} Seis
    </label>

</div>

<!-- Eps Field -->
<div class="form-group col-sm-6">
    {!! Form::label('eps', 'Eps:') !!}
    {!! Form::text('eps', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Foto', 'Foto:') !!}
    {!! Form::file('Foto') !!}
</div>
<div class="clearfix"></div>

<!-- Reponsable Field -->
<div class="form-group col-sm-12">
    {!! Form::label('reponsable', 'Reponsable:') !!}
    <label class="radio-inline">
        {!! Form::radio('reponsable', "Padre", null) !!} Padre
    </label>

    <label class="radio-inline">
        {!! Form::radio('reponsable', "Madre", null) !!} Madre
    </label>

    <label class="radio-inline">
        {!! Form::radio('reponsable', "Familiar", null) !!} Familiar
    </label>

    <label class="radio-inline">
        {!! Form::radio('reponsable', "Otro", null) !!} Otro
    </label>

</div>

<!-- Religion Field -->
<div class="form-group col-sm-12">
    {!! Form::label('religion', 'Religion:') !!}
    <label class="radio-inline">
        {!! Form::radio('religion', "Catolica", null) !!} Catolica
    </label>

    <label class="radio-inline">
        {!! Form::radio('religion', "Cristiano", null) !!} Cristiano
    </label>

    <label class="radio-inline">
        {!! Form::radio('religion', "Otro", null) !!} Otro
    </label>

</div>

<!-- Observacion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observacion', 'Observacion:') !!}
    {!! Form::textarea('observacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('aspirantes.index') !!}" class="btn btn-default">Cancel</a>
</div>
