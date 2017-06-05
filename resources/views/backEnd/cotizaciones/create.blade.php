@extends('backLayout.app')
@section('title')
Crear Cotizaciones
@stop

@section('content')

    <h1>Crear Cotizaciones</h1>
    <hr/>

    {!! Form::open(['url' => 'cotizaciones', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('cod_producto_aw') ? 'has-error' : ''}}">
                {!! Form::label('cod_producto_aw', 'Cod Producto Aw: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('cod_producto_aw', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cod_producto_aw', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cod_producto_proveedor') ? 'has-error' : ''}}">
                {!! Form::label('cod_producto_proveedor', 'Cod Producto Proveedor: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('cod_producto_proveedor', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cod_producto_proveedor', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('desc_cotizacion') ? 'has-error' : ''}}">
                {!! Form::label('desc_cotizacion', 'Desc Cotizacion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('desc_cotizacion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('desc_cotizacion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('part_number') ? 'has-error' : ''}}">
                {!! Form::label('part_number', 'Part Number: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('part_number', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('part_number', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('valor') ? 'has-error' : ''}}">
                {!! Form::label('valor', 'Valor: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('valor', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('valor', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
                {!! Form::label('cantidad', 'Cantidad: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('modelo') ? 'has-error' : ''}}">
                {!! Form::label('modelo', 'Modelo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('modelo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('imagen_ref') ? 'has-error' : ''}}">
                {!! Form::label('imagen_ref', 'Imagen Ref: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('imagen_ref', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('imagen_ref', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection