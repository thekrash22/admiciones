<div class="table-responsive">
    <table class="table" id="documentosIncripcions-table">
        <thead>
            <tr>
                <th>Solicitud Admision</th>
        <th>Procedencia</th>
        <th>Certificado Registro Civil</th>
        <th>Informe Academico</th>
        <th>Paz Salvo</th>
        <th>Recibo Inscripcion</th>
        <th>Aspirantes Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($documentosIncripcions as $documentosIncripcion)
            <tr>
                <td>{!! $documentosIncripcion->solicitud_admision !!}</td>
            <td>{!! $documentosIncripcion->procedencia !!}</td>
            <td>{!! $documentosIncripcion->certificado_registro_civil !!}</td>
            <td>{!! $documentosIncripcion->informe_academico !!}</td>
            <td>{!! $documentosIncripcion->paz_salvo !!}</td>
            <td>{!! $documentosIncripcion->recibo_inscripcion !!}</td>
            <td>{!! $documentosIncripcion->aspirantes_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['documentosIncripcions.destroy', $documentosIncripcion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('documentosIncripcions.show', [$documentosIncripcion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('documentosIncripcions.edit', [$documentosIncripcion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
