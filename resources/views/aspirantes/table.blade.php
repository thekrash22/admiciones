<div class="table-responsive">
    <table class="table" id="aspirantes-table">
        <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Grado</th>
                <th>Direccion</th>
                <th>Telefono</th>  
                <th>Padre</th>          
                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($aspirantes as $aspirantes)
            <tr>
                <td>{!! $aspirantes->persona->primer_nombre !!} {!! $aspirantes->persona->segundo_nombre !!} {{ $aspirantes->persona->primer_apellido}} {{$aspirantes->persona->segundo_apellido}}</td>
                <td>{!! $aspirantes->grado !!}</td>
                <td>{!! $aspirantes->direccion !!}</td>
                <td>{!! $aspirantes->telefonos() !!}</td>
                <td>{!! $aspirantes->padres[0]->personas->primer_nombre !!} {!! $aspirantes->padres[0]->personas->segundo_nombre !!} {{$aspirantes->padres[0]->personas->primer_apellido}} {{$aspirantes->padres[0]->personas->segundo_apellido}}</td>
            
                <td>
                    {!! Form::open(['route' => ['aspirantes.destroy', $aspirantes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('aspirantes.show', [$aspirantes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
