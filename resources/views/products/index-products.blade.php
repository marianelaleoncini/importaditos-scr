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
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th class="actions-column"></th>
                    </tr> 
                    </thead> 
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->brand->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->stock}}</td>
                            <td>
                                <a href="">
                                    <span class="fa fa-pencil-square-o edit" aria-hidden="true"></span>
                                </a>
                                <a href="">
                                    <span class="fa fa-trash-o remove" aria-hidden="true"></span>
                                </a>
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