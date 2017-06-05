@extends('backLayout.app')
@section('title')
Productos
@stop

@section('content')

    <h1>Productos</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre</th><th>Tipo Producto</th><th>Valor Adq</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $producto->id }}</td> <td> {{ $producto->nombre }} </td><td> {{ $producto->tipo_producto }} </td><td> {{ $producto->valor_adq }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection