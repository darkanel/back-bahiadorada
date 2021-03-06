@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Importar Datos Morosos
@endsection

@section('contentheader_title')
    Importar Datos Morosos
@endsection

@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-12">

            <!-- Default box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <!--h3 class="box-title"> Importar Cuenta Contable</h3-->
                </div>
                <div class="box-body">
                    {!! Form::open(['route' => ['import.datamoroso.csv'],'enctype' => 'multipart/form-data', 'id' => 'form']) !!}
                    {{ Form::token() }}
                        @include('import.datamoroso.partials.file')
                    {!! Form::close() !!}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
    </div>
</div>

@endsection
