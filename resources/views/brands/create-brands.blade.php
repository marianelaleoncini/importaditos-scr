@extends('layouts.app')

@section('content')

<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ route('brands') }}">Administrar Marcas</a></li>
        <li class="active">Crear</li>
    </ol>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Marca</div>
                <div class="panel-body">
                    <form class="form-horizontal" 
                        role="form" 
                        method="POST" 
                        action="{{ isset($brand) ? route('brands.update', ['brand_id' => $brand->id]) : route('brands') }}" 
                        novalidate>
                        {!! csrf_field() !!}
                         @if(isset($brand))
                            {{ method_field('PUT') }}
                        @endif
                        <form class="form-horizontal">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} required">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name', isset($brand->name) ? $brand->name : null) }}"
                                    placeholder="Ingrese el Nombre">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>                               
                            <div class="form-group button-group">
                                @if(isset($brand))
                                <button type="submit" class="btn btn-primary">Editar</button>
                                @else
                                <button type="submit" class="btn btn-primary">Crear</button>
                                @endif
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
