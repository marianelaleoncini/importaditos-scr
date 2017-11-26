@extends('layouts.app')

@section('content')

<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ route('sizes') }}">Administrar Talles</a></li>
        <li class="active">Crear</li>
    </ol>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Talle</div>
                <div class="panel-body">
                    <form class="form-horizontal" 
                        role="form" 
                        method="POST" 
                        action="{{ isset($size) ? route('sizes.update', ['size_id' => $size->id]) : route('sizes') }}" 
                        novalidate>
                        {!! csrf_field() !!}
                        @if(isset($size))
                            {{ method_field('PUT') }}
                        @endif
                        <form class="form-horizontal">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} required">
                                <label for="name">Talle</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name', isset($size->name) ? $size->name : null) }}"
                                    placeholder="Ingrese el Talle">
                                 @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group required">
                                <label for="brand" class=" col-md-12">Marca</label>
                                <select name="brand" id="brand" class="selectpicker" title="Selecciona una Marca">
                                    @foreach($brands as $brand)
                                        @if (old('brand') == $brand->id || (isset($size->brand_id) && $size->brand_id == $brand->id))
                                            <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                                        @else
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                 @if ($errors->has('brand'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brand') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="height">Medidas</label>
                                <input type="text" class="form-control" id="height" name="height"
                                    value="{{ old('height', isset($size->height) ? $size->height : null) }}"
                                    placeholder="Ingrese el Rango de Medidas">
                            </div>
                            <div class="form-group">
                                <label for="weight">Peso</label>
                                <input type="text" class="form-control" id="weight" name="weight"
                                    value="{{ old('weight', isset($size->weight) ? $size->weight : null) }}"
                                    placeholder="Ingrese el Rango de Pesos">
                            </div>                                                        
                            <div class="form-group button-group">
                                @if(isset($size))
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
