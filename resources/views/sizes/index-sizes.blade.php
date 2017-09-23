@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span>Administrar Talles</span>
                <span> 
                    <a href="{{ route('sizes.create') }}">
                        <span class="fa fa-plus" aria-hidden="true"></span>
                    </a>
                </span>
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead> 
                    <tr> 
                        <th>Talle</th>
                        <th>Marca</th>
                        <th>Medidas</th>
                        <th>Peso</th>
                        <th class="actions-column"></th>
                    </tr> 
                    </thead> 
                    <tbody>
                    @foreach ($sizes as $size)
                        <tr>
                            <td>{{$size->name}}</td>
                            <td>{{$size->brand->name}}</td>
                            <td>{{$size->height}}</td>
                            <td>{{$size->weight}}</td>
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