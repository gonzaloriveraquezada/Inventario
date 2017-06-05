@extends('backLayout.app')
@section('title')
Proveedores
@stop

@section('content')

    <h1>Proveedores <a href="{{ url('proveedores/create') }}" class="btn btn-primary pull-right btn-sm">Nuevo Proveedor</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblproveedores">
            <thead>
                <tr>
                    <th>Nombre</th><th>Razon Social</th><th>Rut</th><th>Editar</th>
                </tr>
            </thead>
            <tbody>
            @foreach($proveedores as $item)
                <tr>
                    <!--<td>{{ $item->id }}</td>-->
                    <td><a href="{{ url('proveedores', $item->id) }}">{{ $item->nombre }}</a></td><td>{{ $item->razon_social }}</td><td>{{ $item->rut }}</td>
                    <td>
                        <a href="{{ url('proveedores/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['proveedores', $item->id],
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
        $('#tblproveedores').DataTable({
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