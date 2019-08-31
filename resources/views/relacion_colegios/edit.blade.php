@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Relacion Colegio
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($relacionColegio, ['route' => ['relacionColegios.update', $relacionColegio->id], 'method' => 'patch']) !!}

                        @include('relacion_colegios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection