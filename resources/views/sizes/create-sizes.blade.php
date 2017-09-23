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
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('sizes') }}" novalidate>
                        {!! csrf_field() !!}
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="name">Talle</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="brand" class=" col-md-12">Marca</label>
                                <select name="brand" id="brand" class="selectpicker">
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="height">Medidas</label>
                                <input type="text" class="form-control" id="height" name="height">
                            </div>
                            <div class="form-group">
                                <label for="weight">Peso</label>
                                <input type="text" class="form-control" id="weight" name="weight">
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
