@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span>Administrar Productos</span>
                <span> 
                    <a href="{{ route('products.create') }}">
                        <span class="fa fa-plus" aria-hidden="true"></span>
                    </a>
                </span>
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead> 
                    <tr> 
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Talle</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th class="actions-column"></th>
                    </tr> 
                    </thead> 
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                @if ($product->image)
                                <img class="img-in-table" src="<?php echo asset("images/product_images/$product->image")?>" alt="Imagen del producto {{ $product->name }}">
                                @endif
                            </td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->size->brand->name}}</td>
                            <td>{{$product->size->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->stock}}</td>
                            <td>
                                <form action="{{ route('products.delete', ['product_id' => $product->id]) }}" method="POST" class="table-actions">
                                    <a href="{{ route('products.edit', ['product_id' => $product->id]) }}">
                                        <span class="fa fa-pencil-square-o edit" aria-hidden="true"></span>
                                    </a>
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn-link">
                                        <span class="fa fa-trash-o remove" aria-hidden="true"></span>
                                    </button>
                                </form>
                            </td>
                        </tr> 
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection