@extends('layouts.template')

@section('title')
Mostrar {{$param->nombre}}
@endsection

@section('header')
Cabecera para mostrar {{$param->nombre}}
@endsection

@section('content')
Cuerpo para mostrar {{$param->nombre}} <br>
<a href="{{route('arbol.index')}}">Regresar</a>
<br>
<strong>Especie: </strong> {{$param->especie}} <br>
<strong>Descrición: </strong> {{$param->descripcion}} <br>

<a href="{{route('arbol.edit',$param)}}">Editar</a>

<form action="{{route('arbol.destroy',$param)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>
@endsection

@section('footer')
Pie para mostrar {{$param->nombre}}
@endsection