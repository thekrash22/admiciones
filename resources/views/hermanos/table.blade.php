<div class="table-responsive">
    <table class="table" id="hermanos-table">
        <thead>
            <tr>
                <th>Aspirantes Id</th>
        <th>Primer Nombre</th>
        <th>Segundo Nombre</th>
        <th>Primer Apellido</th>
        <th>Segundo Apellido</th>
        <th>Grado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($hermanos as $hermanos)
            <tr>
                <td>{!! $hermanos->aspirantes_id !!}</td>
            <td>{!! $hermanos->primer_nombre !!}</td>
            <td>{!! $hermanos->segundo_nombre !!}</td>
            <td>{!! $hermanos->primer_apellido !!}</td>
            <td>{!! $hermanos->segundo_apellido !!}</td>
            <td>{!! $hermanos->grado !!}</td>
                <td>
                    {!! Form::open(['route' => ['hermanos.destroy', $hermanos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('hermanos.show', [$hermanos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('hermanos.edit', [$hermanos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
