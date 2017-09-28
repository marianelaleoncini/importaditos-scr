@extends('layouts.app')

@section('content')

<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ route('sizes') }}">Administrar Marcas</a></li>
        <li class="active">Crear</li>
    </ol>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Marca</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('brands') }}" novalidate>
                        {!! csrf_field() !!}
                        <form class="form-horizontal">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name"
                                placeholder="Ingrese el Nombre">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>                               
                            <div class="form-group button-group">
                                <button type="submit" class="btn btn-primary">Crear</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
