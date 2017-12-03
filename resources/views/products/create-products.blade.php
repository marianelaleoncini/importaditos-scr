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
                    <form class="form-horizontal"
                        enctype="multipart/form-data"
                        role="form" 
                        method="POST" 
                        action="{{ isset($product) ? route('products.update', ['product_id' => $product->id]) : route('products') }}" 
                        novalidate>
                        {!! csrf_field() !!}
                        @if(isset($product))
                            {{ method_field('PUT') }}
                        @endif
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }} required">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name', isset($product->name) ? $product->name : null) }}"
                                placeholder="Ingrese el Nombre">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="categories[]" class=" col-md-12">Categorías</label>
                            <select name="categories[]" id="categories" class="selectpicker" title="Selecciona las Categorías" multiple>
                                @foreach($categories as $category)
                                    {{--  @if (old('category') == $category->id || (isset($product->size->category_id) && $product->size->category_id == $category->id))  --}}
                                    @if (collect(old('categories'))->contains($category->id) || (isset($selectedCategories) && in_array($category->id, $selectedCategories)))
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group {{ $errors->has('brand') ? ' has-error' : '' }} required">
                            <label for="brand" class="col-md-12">Marca</label>
                            <select name="brand" id="brand" class="selectpicker" title="Selecciona una Marca">
                                @foreach($brands as $brand)
                                    @if (old('brand') == $brand->id || (isset($product->size->brand_id) && $product->size->brand_id == $brand->id))
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
                        <div class="form-group {{ $errors->has('size') ? ' has-error' : '' }} required">
                            <label for="size" class=" col-md-12">Talle</label>
                            <select name="size" id="size" class="selectpicker" title="Selecciona una Talle">
                            </select>
                            @if ($errors->has('size'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('size') }}</strong>       
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }} required">
                            <label for="price">Precio</label>
                            <input type="number" min="0" class="form-control" id="price" name="price"
                                value="{{ old('price',  isset($product->price) ? $product->price : null) }}"                            
                                placeholder="Ingrese el Precio">
                            @if ($errors->has('price'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('price') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="number" min="0" class="form-control" id="stock" name="stock"
                                value="{{ old('stock',  isset($product->stock) ? $product->stock : null) }}"                                
                                placeholder="Ingrese el Stock">
                        </div>                                                        
                        <div class="form-group">
                            <label for="stock">Imagen</label>
                            @if (isset($product->image))
                                <img class="img-responsive img-form img-thumbnail" src="<?php echo asset("images/product_images/$product->image")?>" alt="Imagen del producto {{ $product->name }}">
                            @endif
                            <input type="file" id="image" name="image" title="Elegir Imagen" />
                        </div>                                                        
                        <div class="form-group button-group">
                            @if (isset($product))
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


@section('script')

<script>
    $(document).ready(function() {
        $('#brand').on('change', function() {
            $("#size option").remove();
            var brand = $('#brand').val();
            var editSize = {{ isset($product->size_id) ? $product->size_id : 'null' }};
            doAjaxGet('/products/getSizes/brand/' + brand, function(data) {
               $.each(data, function(index, size) {
                    if (editSize && size.id === editSize) {
                        $('#size').append('<option value=' + size.id + ' selected>' + size.name + '</option>');
                    } else {
                        $('#size').append('<option value=' + size.id + '>' + size.name + '</option>');                        
                    }
               });
               $('#size').selectpicker('refresh');
            });
        });
        
        @if(isset($product))
            $('#brand').trigger('change');
        @endif
    });
</script>

@endsection
