@extends('backLayout.app')
@section('title')
Tipo_producto
@stop

@section('content')

    <h1>Tipo_producto <a href="{{ url('tipo_producto/create') }}" class="btn btn-primary pull-right btn-sm">Add New Tipo_producto</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbltipo_producto">
            <thead>
                <tr>
                    <th>Id</th><th>Nombre</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tipo_producto as $item)
                <tr>
                    <td><a href="{{ url('tipo_producto', $item->id) }}">{{ $item->id }}</a>
                    </td><td>{{ $item->nombre }}</td>
                    <td>
                        <a href="{{ url('tipo_producto/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['tipo_producto', $item->id],
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
        $('#tbltipo_producto').DataTable({
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