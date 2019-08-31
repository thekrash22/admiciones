@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Hermanos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($hermanos, ['route' => ['hermanos.update', $hermanos->id], 'method' => 'patch']) !!}

                        @include('hermanos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection