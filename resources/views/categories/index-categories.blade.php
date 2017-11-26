@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-sm-4 col-sm-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span>Administrar Categorías</span>
                <span> 
                    <a href="{{ route('categories.create') }}">
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
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>
                                <form action="{{ route('categories.delete', ['category_id' => $category->id]) }}" method="POST" class="table-actions">
                                    <a href="{{ route('categories.edit', ['category_id' => $category->id]) }}">
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