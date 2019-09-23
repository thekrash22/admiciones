@extends('layouts.public')
<div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
@section('content')
    <section class="content-header centered">
        <h1 class="centered">
            Formulario Solicitud de Admisión
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'formulario.store', 'files' => true]) !!}

                        @include('formularios.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
