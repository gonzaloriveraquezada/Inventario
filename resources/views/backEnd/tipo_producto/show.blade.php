@extends('backLayout.app')
@section('title')
Tipo_producto
@stop

@section('content')

    <h1>Tipo_producto</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th><th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{ $tipo_producto->id }} </td><td> {{ $tipo_producto->nombre }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection