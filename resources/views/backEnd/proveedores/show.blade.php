@extends('backLayout.app')
@section('title')
Proveedores
@stop

@section('content')

    <h1>Proveedores</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> 
                    <th>Nombre</th>
                    <th>Razon Social</th>
                    <th>Rut</th>
                    <th>Giro</th>
                    <th>Contacto</th>
                    <th>Descuentos</th>
                    <th>Direccion</th>
                    <th>Descripcion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $proveedore->id }}</td> 
                    <td> {{ $proveedore->nombre }} </td>
                    <td> {{ $proveedore->razon_social }} </td>
                    <td> {{ $proveedore->rut }} </td> 
                    <td> {{ $proveedore->giro }} </td>
                    <td> {{ $proveedore->contacto }} </td>
                    <td> {{ $proveedore->aplica_descuento }} </td>
                    <td> {{ $proveedore->ubicacion }} </td>
                    <td> {{ $proveedore->descripcion }} </td>

                </tr>
            </tbody>    
        </table>
    </div>

@endsection