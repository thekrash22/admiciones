@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Documentos Incripcion
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('documentos_incripcions.show_fields')
                    <a href="{!! route('documentosIncripcions.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
