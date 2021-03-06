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
                                <form action="{{ route('brands.delete', ['brand_id' => $brand->id]) }}" method="POST" class="table-actions">
                                    <a href="{{ route('brands.edit', ['brand_id' => $brand->id]) }}">
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