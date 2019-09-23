@extends('layouts.public')

@section('content')
    <section class="content-header">
        <h1>
            Documentos requeridos para la inscripción
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <div class="callout callout-info">
          <h4>Información Importante</h4>

          <p> - Despues de digilenciar el formato solicitud de Admisión debe cargar los documentos requeridos en la inscripción. Tienen la opción de subir los anexos mas tarde con el enlace que será enviado a su correo electrónico.</p>
          <p>
              - Todos los documentos se deben subir en formato PDF.
          </p>
        </div>
                    {!! Form::open(['route' => 'formulario.inscripcion', 'files' => true]) !!}

                        @include('docs.fields-inscripcion')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
