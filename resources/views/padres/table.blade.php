<div class="table-responsive">
    <table class="table" id="padres-table">
        <thead>
            <tr>
                <th>Personas Id</th>
        <th>Direccion</th>
        <th>Barrio</th>
        <th>Telefono</th>
        <th>Celular</th>
        <th>Correo</th>
        <th>Profesion</th>
        <th>Nombre Empresa</th>
        <th>Telefono Empresa</th>
        <th>Direccion Empresa</th>
        <th>Es Acudiente</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($padres as $padres)
            <tr>
                <td>{!! $padres->personas_id !!}</td>
            <td>{!! $padres->direccion !!}</td>
            <td>{!! $padres->barrio !!}</td>
            <td>{!! $padres->telefono !!}</td>
            <td>{!! $padres->celular !!}</td>
            <td>{!! $padres->correo !!}</td>
            <td>{!! $padres->profesion !!}</td>
            <td>{!! $padres->nombre_empresa !!}</td>
            <td>{!! $padres->telefono_empresa !!}</td>
            <td>{!! $padres->direccion_empresa !!}</td>
            <td>{!! $padres->es_acudiente !!}</td>
                <td>
                    {!! Form::open(['route' => ['padres.destroy', $padres->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('padres.show', [$padres->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('padres.edit', [$padres->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
