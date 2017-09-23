@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-sm-4 col-sm-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span>Administrar Marcas</span>
                <span> 
                    <a href="{{ route('brands.create') }}">
                        <span class="fa fa-plus" aria-hidden="true"></span>
                    </a>
                </span>
            </div>
            <div class="panel-body">
                <table class="table"> 
                    <thead> 
                    <tr> 
                        <th>Nombre</th>
                        <th class="actions-column"></th>
                    </tr> 
                    </thead> 
                    <tbody>
                    @foreach ($brands as $brand)
                        <tr>
                            <td>{{$brand->name}}</td>
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