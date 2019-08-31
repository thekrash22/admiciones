<div class="table-responsive">
    <table class="table" id="historiaAcademicas-table">
        <thead>
            <tr>
                <th>Aspirantes Id</th>
        <th>Colegio Procedencia</th>
        <th>Grados Repetidos</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($historiaAcademicas as $historiaAcademica)
            <tr>
                <td>{!! $historiaAcademica->aspirantes_id !!}</td>
            <td>{!! $historiaAcademica->colegio_procedencia !!}</td>
            <td>{!! $historiaAcademica->grados_repetidos !!}</td>
                <td>
                    {!! Form::open(['route' => ['historiaAcademicas.destroy', $historiaAcademica->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('historiaAcademicas.show', [$historiaAcademica->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('historiaAcademicas.edit', [$historiaAcademica->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
