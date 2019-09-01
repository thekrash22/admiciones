@extends('layouts.public')

@section('content')
    <section class="content-header centered">
        <h1 class="centered">
            Formulario de Inscripcion
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'formulario.store']) !!}

                        @include('formularios.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
