@extends('backLayout.app')
@section('title')
Cotizaciones
@stop

@section('content')

    <h1>Cotizaciones <a href="{{ url('cotizaciones/create') }}" class="btn btn-primary pull-right btn-sm">Agregar Cotizaciones</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblcotizaciones">
            <thead>
                <tr>
                    <th>Codigo Producto Aw</th><th>Codigo Producto Proveedor</th><th>Descripcion</th><th>Editar</th>
                </tr>
            </thead>
            <tbody>
            @foreach($cotizaciones as $item)
                <tr>
                    
                    <td><a href="{{ url('cotizaciones', $item->id) }}">{{ $item->cod_producto_aw }}</a></td><td>{{ $item->cod_producto_proveedor }}</td><td>{{ $item->desc_cotizacion }}</td>
                    <td>
                        <a href="{{ url('cotizaciones/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['cotizaciones', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#tblcotizaciones').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
@endsection