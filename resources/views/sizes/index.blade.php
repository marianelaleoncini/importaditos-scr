@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table"> 
        <caption>Talles <a href="{{ route('sizes.create') }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></caption> 
        <thead> 
        <tr> 
            <th>Talle</th>
            <th>Marca</th>
            <th>Medidas</th>
            <th>Peso</th>
            <th></th>
            <th></th>
        </tr> 
        </thead> 
        <tbody>
        @foreach ($sizes as $size)
            <tr>
                <td>{{$size->name}}</td>
                <td>{{$size->brand}}</td>
                <td>{{$size->height}}</td>
                <td>{{$size->weight}}</td>
                <td><a href=""><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                <td><a href=""><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
            </tr> 
        @endforeach
        </tbody>
    </table>
</div>
@endsection