@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Padres
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($padres, ['route' => ['padres.update', $padres->id], 'method' => 'patch']) !!}

                        @include('padres.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection