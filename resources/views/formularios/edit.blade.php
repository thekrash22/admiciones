@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            formularios
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($formularios, ['route' => ['formularios.update', $formularios->id], 'method' => 'patch']) !!}

                        @include('formularios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection