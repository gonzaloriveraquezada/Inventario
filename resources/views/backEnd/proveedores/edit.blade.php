@extends('backLayout.app')
@section('title')
Editar Proveedores
@stop

@section('content')

    <h1>Editar Proveedores</h1>
    <hr/>

    {!! Form::model($proveedore, [
        'method' => 'PATCH',
        'url' => ['proveedores', $proveedore->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
                {!! Form::label('nombre', 'Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('razon_social') ? 'has-error' : ''}}">
                {!! Form::label('razon_social', 'Razon Social: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('razon_social', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('razon_social', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('rut') ? 'has-error' : ''}}">
                {!! Form::label('rut', 'Rut: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('rut', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('rut', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('giro') ? 'has-error' : ''}}">
                {!! Form::label('giro', 'Giro: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('giro', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('giro', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('contacto') ? 'has-error' : ''}}">
                {!! Form::label('contacto', 'Contacto: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('contacto', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('contacto', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('aplica_descuento') ? 'has-error' : ''}}">
                {!! Form::label('aplica_descuento', 'Aplica Descuento: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('aplica_descuento', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('aplica_descuento', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ubicacion') ? 'has-error' : ''}}">
                {!! Form::label('ubicacion', 'Ubicacion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ubicacion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ubicacion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                {!! Form::label('descripcion', 'Descripcion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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