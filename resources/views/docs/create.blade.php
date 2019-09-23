@extends('layouts.public')

@section('content')
    <section class="content-header">
        <h1>
            Documentos
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <div class="callout callout-info">
          <h4>Información Importante</h4>

          <p> - Para digilenciar este formulario debe poseer todos los documentos solicitados en este de lo contrario, puede digilenciarlo mas tarde con el enlace que sera enviado a su correo electronico.</p>
          <p>
              - Todos los documentos se deben subir en formato PDF.
          </p>
        </div>
                    {!! Form::open(['route' => 'documentos.store']) !!}

                        @include('docs.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
