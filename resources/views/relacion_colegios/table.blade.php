<div class="table-responsive">
    <table class="table" id="relacionColegios-table">
        <thead>
            <tr>
                <th>Historia Academicas Id</th>
        <th>Grado</th>
        <th>Ano</th>
        <th>Nombre Colegios</th>
        <th>Ciudad</th>
        <th>Motivo Retiro</th>
        <th>Tipo Intitucion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($relacionColegios as $relacionColegio)
            <tr>
                <td>{!! $relacionColegio->historia_academicas_id !!}</td>
            <td>{!! $relacionColegio->grado !!}</td>
            <td>{!! $relacionColegio->ano !!}</td>
            <td>{!! $relacionColegio->nombre_colegios !!}</td>
            <td>{!! $relacionColegio->ciudad !!}</td>
            <td>{!! $relacionColegio->motivo_retiro !!}</td>
            <td>{!! $relacionColegio->tipo_intitucion !!}</td>
                <td>
                    {!! Form::open(['route' => ['relacionColegios.destroy', $relacionColegio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('relacionColegios.show', [$relacionColegio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('relacionColegios.edit', [$relacionColegio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
