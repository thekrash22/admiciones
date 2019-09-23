<div class="table-responsive">
    <table class="table" id="aspirantes-table">
        <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Grado</th>
                <th>Numero Formulario</th>
                <th>Fecha Inscripcion</th>
                <th>Direccion</th>
                <th>Barrio</th>
                <th>Telefono</th>
                <th>Municipio</th>
                <th>Zona</th>
                <th>Estrato</th>
                <th>Eps</th>
                <th>Foto</th>
                <th>Reponsable</th>
                <th>Religion</th>
                <th>Observacion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($aspirantes as $aspirantes)
            <tr>
                <td>{!! $aspirantes->persona->primer_nombre !!} {!! $aspirantes->persona->segundo_nombre !!} {{ $aspirantes->persona->primer_apellido}} {{$aspirantes->persona->segundo_apellido}}</td>
            <td>{!! $aspirantes->grado !!}</td>
            <td>{!! $aspirantes->numero_formulario !!}</td>
            <td>{!! $aspirantes->fecha_inscripcion !!}</td>
            <td>{!! $aspirantes->direccion !!}</td>
            <td>{!! $aspirantes->barrio !!}</td>
            <td>{!! $aspirantes->telefono !!}</td>
            <td>{!! $aspirantes->municipio !!}</td>
            <td>{!! $aspirantes->zona !!}</td>
            <td>{!! $aspirantes->estrato !!}</td>
            <td>{!! $aspirantes->eps !!}</td>
            <td>{!! $aspirantes->Foto !!}</td>
            <td>{!! $aspirantes->reponsable !!}</td>
            <td>{!! $aspirantes->religion !!}</td>
            <td>{!! $aspirantes->observacion !!}</td>
                <td>
                    {!! Form::open(['route' => ['aspirantes.destroy', $aspirantes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('aspirantes.show', [$aspirantes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('aspirantes.edit', [$aspirantes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
