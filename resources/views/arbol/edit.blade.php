@extends('layouts.template')

@section('title')
Editar {{$arbol->nombre}}
@endsection

@section('header')
Cabecera para Edición de {{$arbol->nombre}}
@endsection

@section('content')

Cuerpo para edición de {{$arbol->nombre}}
<br>
<a href="{{route('arbol.index')}}">Regresar</a>
<br>
<form action="{{route('arbol.update',$arbol)}}" method="POST">
@csrf
@method('put')
<label>Nombre: <br>
    <input type="text" name="nombre" value="{{$arbol->nombre}}">
<br>
<label>Especie: <br>
    <input type="text" name="especie" value="{{$arbol->especie}}">
</label>
<br>
<label>Descripción <br>
<textarea name="descripcion" cols="30" rows="10"> {{$arbol->descripcion}} </textarea>
</label>
<br>

<button type="submit">Enviar formulario</button>

</form>
@endsection

@section('footer')
Pie para crear {{$arbol->nombre}}
@endsection
