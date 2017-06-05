@extends('layouts.master')
@extends('backLayout.app')
@section('title')
Cotizaciones
@stop

@section('content')

    <h1>Cotizaciones</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Cod Producto Aw</th><th>Cod Producto Proveedor</th><th>Desc Cotizacion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $cotizacione->id }}</td> <td> {{ $cotizacione->cod_producto_aw }} </td><td> {{ $cotizacione->cod_producto_proveedor }} </td><td> {{ $cotizacione->desc_cotizacion }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection