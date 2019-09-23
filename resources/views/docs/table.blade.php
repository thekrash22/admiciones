<div class="table-responsive">
    <table class="table" id="documentos-table">
        <thead>
            <tr>
                <th>Aspirantes Id</th>
        <th>Tarjeta Identidad</th>
        <th>Costancia Comportamiento</th>
        <th>Certificado Medico</th>
        <th>Afiliacion Salud</th>
        <th>Cedula Papas</th>
        <th>Carnet Vacunacion</th>
        <th>Examen Aud Vis</th>
        <th>Paz Salvo</th>
        <th>Informe Final</th>
        <th>Certificado Notas</th>
        <th>Simat</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($documentos as $documentos)
            <tr>
                <td>{!! $documentos->aspirantes_id !!}</td>
            <td>{!! $documentos->tarjeta_identidad !!}</td>
            <td>{!! $documentos->costancia_comportamiento !!}</td>
            <td>{!! $documentos->certificado_medico !!}</td>
            <td>{!! $documentos->afiliacion_salud !!}</td>
            <td>{!! $documentos->cedula_papas !!}</td>
            <td>{!! $documentos->carnet_vacunacion !!}</td>
            <td>{!! $documentos->examen_aud_vis !!}</td>
            <td>{!! $documentos->paz_salvo !!}</td>
            <td>{!! $documentos->informe_final !!}</td>
            <td>{!! $documentos->certificado_notas !!}</td>
            <td>{!! $documentos->simat !!}</td>
                <td>
                    {!! Form::open(['route' => ['documentos.destroy', $documentos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('documentos.show', [$documentos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('documentos.edit', [$documentos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
