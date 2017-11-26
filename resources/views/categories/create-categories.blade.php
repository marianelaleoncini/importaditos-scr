@extends('layouts.app')

@section('content')

<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ route('categories') }}">Administrar Categorias</a></li>
        <li class="active">Crear</li>
    </ol>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Categoria</div>
                <div class="panel-body">
                    <form class="form-horizontal" 
                        role="form" 
                        method="POST" 
                        action="{{ isset($category) ? route('categories.update', ['category_id' => $category->id]) : route('categories') }}" 
                        novalidate>
                        {!! csrf_field() !!}
                        @if(isset($category))
                            {{ method_field('PUT') }}
                        @endif
                        <form class="form-horizontal">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} required">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name', isset($category->name) ? $category->name : null) }}"
                                placeholder="Ingrese el Nombre">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>                               
                           <div class="form-group button-group">
                                @if(isset($category))
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
