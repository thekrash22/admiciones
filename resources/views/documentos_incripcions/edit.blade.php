@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Documentos Incripcion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($documentosIncripcion, ['route' => ['documentosIncripcions.update', $documentosIncripcion->id], 'method' => 'patch']) !!}

                        @include('documentos_incripcions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection