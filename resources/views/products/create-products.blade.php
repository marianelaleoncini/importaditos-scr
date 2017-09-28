@extends('layouts.app')

@section('content')

<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ route('products') }}">Administrar Productos</a></li>
        <li class="active">Crear</li>
    </ol>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Producto</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('products') }}" novalidate>
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
                            <div class="form-group">
                                <label for="brand" class=" col-md-12">Marca</label>
                                <select name="brand" id="brand" class="selectpicker" title="Selecciona una Marca">
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                                 @if ($errors->has('brand'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brand') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="price">Precio</label>
                                <input type="text" class="form-control" id="price" name="price"
                                 placeholder="Ingrese el Precio">
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="text" class="form-control" id="stock" name="stock"
                                placeholder="Ingrese el Stock">
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
