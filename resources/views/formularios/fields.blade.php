<div class="aspirante">
    <div class="col-sm-12">
        <h4>Datos del aspirante</h4>
    </div>
    <!-- Primer Nombre Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('grado_ingresar', 'Grado al que desea ingresar:') !!}
        {!! Form::text('grado_ingresar', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('foto_est', 'Foto Aspirante:') !!}
        {!! Form::file('foto_est', ['class' => 'form-control']) !!}
    </div>

    <!-- Primer Nombre Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('primer_nombre', 'Primer Nombre:') !!}
        {!! Form::text('as_primer_nombre', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <!-- Segundo Nombre Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('segundo_nombre', 'Segundo Nombre:') !!}
        {!! Form::text('as_segundo_nombre', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <!-- Primer Apellido Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('primer_apellido', 'Primer Apellido:') !!}
        {!! Form::text('as_primer_apellido', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <!-- Segundo Apellido Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('segundo_apellido', 'Segundo Apellido:') !!}
        {!! Form::text('as_segundo_apellido', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <!-- Tipo Documento Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('as_tipo_documento', 'Tipo Documento:') !!}
        {!! Form::select('as_tipo_documento', ['RC' => 'Registro Civil', 'TI' => 'Tarjeta de identidad', 'CC' => 'Cedula Ciudadania', 'CE' => 'Cedula Extranjera', 'PAS' => 'Pasaporte'], null, ['placeholder' => 'Seleccione un tipo de documento', 'class' => 'form-control', 'required']) !!}
    </div>

    <!-- Numero Documento Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('as_numero_documento', 'Número Documento:') !!}
        {!! Form::number('as_numero_documento', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <!-- Lugar Expedicion Documento Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('lugar_expedicion_documento', 'Lugar Expedición Documento:') !!}
        {!! Form::text('as_lugar_expedicion_documento', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <!-- Fecha Nacimiento Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('as_fecha_nacimiento', 'Fecha Nacimiento:') !!}
        {!! Form::date('as_fecha_nacimiento', null, ['class' => 'form-control','id'=>'as_fecha_nacimiento']) !!}
    </div>



    <!-- Lugar Nacimiento Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('lugar_nacimiento', 'Lugar Nacimiento:') !!}
        {!! Form::text('as_lugar_nacimiento', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <!-- Direccion Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('as_direccion', 'Dirección:') !!}
        {!! Form::text('as_direccion', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <!-- Barrio Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('as_barrio', 'Barrio:') !!}
        {!! Form::text('as_barrio', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <!-- Telefono Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('as_telefono', 'Teléfono:') !!}
        {!! Form::text('as_telefono', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <!-- Municipio Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('as_municipio', 'Municipio donde vive:') !!}
        {!! Form::text('as_municipio', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <!-- Zona Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('zona', 'Zona:') !!}
        {!! Form::select('as_zona', ['Rural' => 'Rural', 'Urbana' => 'Urbana'], null, ['placeholder' => 'Seleccione Zona...', 'class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('estrato', 'Estrato donde vive:') !!}
        {!! Form::select('as_estrato', ['0' => '0', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6'], null, ['placeholder' => 'Seleccione Estrato...', 'class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('eps', 'EPS del Aspirante:') !!}
        {!! Form::text('as_eps', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group col-sm-12 hermanos">
            <div class="form-group col-sm-12">
                {!! Form::label('hermanos', '¿Tiene Hermanos en la institución?') !!}
                <label class="radio-inline">
                    {!! Form::radio('tieneh', "No", true, ['checked' => 'checked']) !!} No
                </label>
                <label class="radio-inline">
                    {!! Form::radio('tieneh', "Si", false) !!} Si
                </label>
            </div>
            <div class="datos-hermanos" style="display: none;">
                <div class="col-sm-12">
                    <h4>Datos Hermanos estudiando en la Institución</h4>
                </div>
                <div class="formulario-hermano">
                    <div class="form-group col-sm-6">
                        <label>Primer Nombre:</label>
                        <input class="form-control" name="her_primer_nombre[]" type="text">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Segundo Nombre:</label>
                        <input class="form-control" name="her_segundo_nombre[]" type="text">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Primer Apellido:</label>
                        <input class="form-control" name="her_primer_apellido[]" type="text">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Segundo Apellido:</label>
                        <input class="form-control" name="her_segundo_apellido[]" type="text">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Grado:</label>
                        <input class="form-control" name="her_grado[]" type="text">
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <a href="javascript:void(0);" class="btn btn-primary" id="agregar" type="submit">Añadir Hermano</a>
                </div>

            </div>
    </div>

    <div class="col-sm-12">
        <h4>II. Historia académica del aspirante</h4>
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('col', 'Colegio de procedencia actual:') !!}
        {!! Form::text('has_col', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-12 reinicio">
            <div class="form-group col-sm-12">
                {!! Form::label('reinicio', 'Ha reiniciado algún grado') !!}
                <label class="radio-inline">
                    {!! Form::radio('reinic', "No", true) !!} No
                </label>
                <label class="radio-inline">
                    {!! Form::radio('reinic', "Si", false) !!} Si
                </label>
            </div>
            <div class="datos-reinicio col-sm-12" style="display:none;">
                <div class="form-group col-md-6 col-sm-12">
                    {!! Form::label('reinicio', 'Caul grado ha reiniciado') !!}
                    {!! Form::text('anios_reiniciados',null, ['class' => 'form-control'])!!}
                </div>

            </div>
            <div class="">
                <div class="col-sm-12">
                    <h4>Relacione a continuación los colegios donde ha estudiado</h4>
                </div>
                <div class="formulario-colegio">
                    <div class="form-group col-sm-6">
                        <label>Grado:</label>
                        <input class="form-control" name="col_grado[]" type="text">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Año:</label>
                        <input class="form-control" name="col_anio[]" type="text">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Nombre del establecimiento:</label>
                        <input class="form-control" name="col_nombre[]" type="text">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Ciudad:</label>
                        <input class="form-control" name="col_ciudad[]" type="text">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Motivo Retiro</label>
                        <input class="form-control" name="col_motivo_retiro[]" type="text">
                    </div>
                    <div class="form-group col-sm-6">
                         <label for="establecimiento">establecimiento:</label>
                         <select class="form-control" name="col_estrato"><option selected="selected" value="">Establecimiento</option><option value="privado">Privado</option><option value="publico">Público</option></select>
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <a href="javascript:void(0);" class="btn btn-primary" id="agregar-colegio" type="submit">Añadir Colegio</a>
                </div>

            </div>
    </div>
    <div class="col-sm-12">
        <h4>III. Datos familiares</h4>
    </div>
    <div class="col-sm-12">
        <h4>Datos del Padre</h4>
    </div>
             <!-- Primer Nombre Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('primer_nombre', 'Primer Nombre:') !!}
                {!! Form::text('pa_primer_nombre', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Segundo Nombre Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('segundo_nombre', 'Segundo Nombre:') !!}
                {!! Form::text('pa_segundo_nombre', null, ['class' => 'form-control']) !!}
            </div>

             <!-- Primer Apellido Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('primer_apellido', 'Primer Apellido:') !!}
                {!! Form::text('pa_primer_apellido', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Segundo Apellido Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('segundo_apellido', 'Segundo Apellido:') !!}
                {!! Form::text('pa_segundo_apellido', null, ['class' => 'form-control']) !!}
            </div>
            <!-- cedula Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('Cedula', 'Cédula:') !!}
                {!! Form::text('pa_cedula', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Expedicion Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('lugar_expedicion_documento', 'Lugar Expedición Documento:') !!}
                {!! Form::text('pa_lugar_expedicion_documento', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Dirreccion Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('pa_direccion', 'Dirección:') !!}
                {!! Form::text('pa_direccion', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Barrio Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('pa_barrio', 'Barrio:') !!}
                {!! Form::text('pa_barrio', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Telefono Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('pa_telefono', 'Teléfono:') !!}
                {!! Form::text('pa_telefono', null, ['class' => 'form-control']) !!}
            </div>
            <!-- celular Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('pa_celular', 'Celular:') !!}
                {!! Form::text('pa_celular', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Correo Field -->
            <div class="form-group col-sm-8">
                {!! Form::label('pa_correo', 'Correo:') !!}
                {!! Form::text('pa_correo', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Profecion  Field -->
            <div class="form-group col-sm-8">
                {!! Form::label('pa_profesion', 'Profesión:') !!}
                {!! Form::text('pa_profesion', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Empresa Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('as_empresa', 'Empresa donde labora:') !!}
                {!! Form::text('as_empresa', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Dirreccion Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('pa_emp_dirrecion', 'Dirección:') !!}
                {!! Form::text('pa_emp_dirreccion', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Telefono Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('pa_emp_telefono', 'Teléfono:') !!}
                {!! Form::text('pa_emp_telefono', null, ['class' => 'form-control']) !!}
            </div>
    </div>
    <div class="col-sm-12">
        <h4>Datos de la madre</h4>
    </div>
             <!-- Primer Nombre Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('primer_nombre', 'Primer Nombre:') !!}
                {!! Form::text('ma_primer_nombre', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Segundo Nombre Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('segundo_nombre', 'Segundo Nombre:') !!}
                {!! Form::text('ma_segundo_nombre', null, ['class' => 'form-control']) !!}
            </div>

             <!-- Primer Apellido Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('primer_apellido', 'Primer Apellido:') !!}
                {!! Form::text('ma_primer_apellido', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Segundo Apellido Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('segundo_apellido', 'Segundo Apellido:') !!}
                {!! Form::text('ma_segundo_apellido', null, ['class' => 'form-control']) !!}
            </div>
            <!-- cedula Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('Cedula', 'Cédula:') !!}
                {!! Form::text('ma_cedula', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Expedicion Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('lugar_expedicion_documento', 'Lugar Expedición Documento:') !!}
                {!! Form::text('ma_lugar_expedicion_documento', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Dirreccion Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('ma_direccion', 'Dirección:') !!}
                {!! Form::text('ma_direccion', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Barrio Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('ma_barrio', 'Barrio:') !!}
                {!! Form::text('ma_barrio', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Telefono Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('ma_telefono', 'Teléfono:') !!}
                {!! Form::text('ma_telefono', null, ['class' => 'form-control']) !!}
            </div>
            <!-- celular Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('ma_celular', 'Celular:') !!}
                {!! Form::text('ma_celular', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Correo Field -->
            <div class="form-group col-sm-8">
                {!! Form::label('ma_correo', 'Correo:') !!}
                {!! Form::text('ma_correo', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Profecion  Field -->
            <div class="form-group col-sm-8">
                {!! Form::label('ma_profesion', 'Profesión:') !!}
                {!! Form::text('ma_profesion', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Empresa Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('ma_empresa', 'Empresa donde labora:') !!}
                {!! Form::text('ma_empresa', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Dirreccion Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('ma_emp_dirrecion', 'Dirección:') !!}
                {!! Form::text('ma_emp_dirreccion', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Telefono Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('ma_emp_telefono', 'Teléfono:') !!}
                {!! Form::text('ma_emp_telefono', null, ['class' => 'form-control']) !!}
            </div>
</div>
    <div class="col-sm-12">
        <h4>IV. En caso que el aspirante no viva con sus padres</h4>
    </div>
    <div class="col-sm-12">
        <h4>Información del acudiente</h4>
    </div>
             <!-- Primer Nombre Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('primer_nombre', 'Primer Nombre:') !!}
                {!! Form::text('ac_primer_nombre', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Segundo Nombre Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('segundo_nombre', 'Segundo Nombre:') !!}
                {!! Form::text('ac_segundo_nombre', null, ['class' => 'form-control']) !!}
            </div>

             <!-- Primer Apellido Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('primer_apellido', 'Primer Apellido:') !!}
                {!! Form::text('ac_primer_apellido', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Segundo Apellido Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('segundo_apellido', 'Segundo Apellido:') !!}
                {!! Form::text('ac_segundo_apellido', null, ['class' => 'form-control']) !!}
            </div>
            <!-- cedula Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('Cedula', 'Cédula:') !!}
                {!! Form::text('ac_cedula', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Expedicion Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('lugar_expedicion_documento', 'Lugar Expedición Documento:') !!}
                {!! Form::text('ac_lugar_expedicion_documento', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Dirreccion Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('ac_direccion', 'Dirección:') !!}
                {!! Form::text('ac_direccion', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Barrio Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('ac_barrio', 'Barrio:') !!}
                {!! Form::text('ac_barrio', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Telefono Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('ac_telefono', 'Teléfono:') !!}
                {!! Form::text('ac_telefono', null, ['class' => 'form-control']) !!}
            </div>
            <!-- celular Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('ac_celular', 'Celular:') !!}
                {!! Form::text('ac_celular', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Correo Field -->
            <div class="form-group col-sm-8">
                {!! Form::label('ac_correo', 'Correo:') !!}
                {!! Form::text('ac_correo', null, ['class' => 'form-control']) !!}
            </div>
           <!-- Profecion  Field -->
           <div class="form-group col-sm-8">
                {!! Form::label('ac_profesion', 'Profesión:') !!}
                {!! Form::text('ac_profesion', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Empresa Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('ac_empresa', 'Empresa donde labora:') !!}
                {!! Form::text('ac_empresa', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Dirreccion Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('ac_emp_dirrecion', 'Dirección:') !!}
                {!! Form::text('ac_emp_dirreccion', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Telefono Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('ac_emp_telefono', 'Teléfono:') !!}
                {!! Form::text('ac_emp_telefono', null, ['class' => 'form-control']) !!}
            </div>

            <div class="col-sm-12">
             <h4>V. Responsable del pago de los costos educativos</h4>
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('pago', 'Relación con el aspirante:') !!}
                {!! Form::select('pago_estrato', ['Ma' => 'madre', 'Pa' => 'Padre', 'Otr' => 'Otro'], null, ['placeholder' => 'Reponsable del Pago', 'class' => 'form-control', 'required']) !!}
            </div>
            <div class="form-group col-sm-6">
                {!! Form::label('religio', 'Religión que profesa:') !!}
                {!! Form::select('as_religio', ['ca' => 'Católico', 'cr' => 'Cristiano', 'Otr' => 'Otro'], null, ['placeholder' => 'Seleccione Religión ...', 'class' => 'form-control', 'required']) !!}
            </div>
            <div class="col-sm-12">
             <h4>VI. Observaciones</h4>
            </div>

            <div class="form-group col-sm-12">
            {!! Form::textarea('Observaciones', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
                {!! Form::label('email', 'Email de contacto:') !!}
                <p>Importante: a este Email se le enviara Información sobre el proceso de admisión</p>
                {!! Form::text('email_contacto', null, ['class' => 'form-control', 'required']) !!}
            </div>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}

</div>
@section('scripts')
        <script type="text/javascript">
            $(document).ready(function () {
                $('input[name="tieneh"]').click(function () {
                    if ($(this).attr("value") == "No") {
                        $(".datos-hermanos").hide('slow');
                    }
                    if ($(this).attr("value") == "Si") {
                        $(".datos-hermanos").show('slow');
                    }
                });
                //reinic
                $('input[name="tieneh"]').trigger('click');  // trigger the event
                //añadir mas campos
                $('input[name="reinic"]').click(function () {
                    if ($(this).attr("value") == "No") {
                        $(".datos-reinicio").hide('slow');
                    }
                    if ($(this).attr("value") == "Si") {
                        $(".datos-reinicio").show('slow');
                    }
                });
                var wrapper = $('.formulario-hermano'); //Input field wrapper
                var fieldHTML = '<div class="form-group col-sm-6"><label>Primer Nombre:</label><input class="form-control" name="her_primer_nombre[]" type="text"></div><div class="form-group col-sm-6"><label>Segundo Nombre:</label><input class="form-control" name="her_segundo_nombre[]" type="text"></div><div class="form-group col-sm-6"><label>Primer Apellido:</label><input class="form-control" name="her_primer_apellido[]" type="text"></div><div class="form-group col-sm-6"><label>Segundo Apellido:</label><input class="form-control" name="her_segundo_apellido[]" type="text"></div><div class="form-group col-sm-6"><label>Grado:</label><input class="form-control" name="her_grado[]" type="text"></div>';
                $('#agregar').click(function(){ //Once add button is clicked
                    $(wrapper).append(fieldHTML);
                });

                var wrapper_colegio = $('.formulario-colegio');
                var fieldColegio = '<div class="form-group col-sm-6"><label>Grado:</label><input class="form-control" name="col_grado[]" type="text"></div><div class="form-group col-sm-6"><label>Año:</label><input class="form-control" name="col_anio[]" type="text"></div><div class="form-group col-sm-6"><label>Nombre del establecimiento:</label><input class="form-control" name="col_nombre[]" type="text"></div><div class="form-group col-sm-6"><label>Ciudad:</label><input class="form-control" name="col_ciudad[]" type="text"></div><div class="form-group col-sm-6"><label>Motivo Retiro</label><input class="form-control" name="col_motivo_retiro[]" type="text"></div><div class="form-group col-sm-6"><label for="establecimiento">establecimiento:</label><select class="form-control" name="col_estrato"><option selected="selected" value="">Establecimiento</option><option value="privado">Privado</option><option value="publico">Público</option></select></div>';
                $('#agregar-colegio').click(function(){
                    $(wrapper_colegio).append(fieldColegio);
                });
                $('form').submit(function(){
                    $(this).children('input[type=submit]').prop('disabled', true);
                });

        });


        $('#as_fecha_nacimiento').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection
