@extends('backLayout.app')
@section('title')
Productos
@stop

@section('content')

    <h1>Productos <a href="{{ url('productos/create') }}" class="btn btn-primary pull-right btn-sm">Agregar Productos</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblproductos">
            <thead>
                <tr>
                    <th>ID</th><th>Nombre</th><th>Tipo Producto</th><th>Valor Adq</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($productos as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('productos', $item->id) }}">{{ $item->nombre }}</a></td><td>{{ $item->tipo_producto }}</td><td>{{ $item->valor_adq }}</td>
                    <td>
                        <a href="{{ url('productos/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['productos', $item->id],
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
        $('#tblproductos').DataTable({
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